<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/session.php';

function isCustomerLoggedIn(): bool {
    return isset($_SESSION['customer_id']);
}

function requireCustomerLogin(): void {
    if (!isCustomerLoggedIn()) {
        header('Location: login.php?redirect=' . urlencode($_SERVER['REQUEST_URI']));
        exit;
    }
}

function getCurrentCustomer(): ?array {
    if (!isCustomerLoggedIn()) return null;
    
    try {
        $pdo = getDB();
        $stmt = $pdo->prepare('SELECT id, email, username, first_name, last_name, company, phone, customer_group_id, account_type, is_verified, status FROM users WHERE id = :id LIMIT 1');
        $stmt->execute([':id' => $_SESSION['customer_id']]);
        $customer = $stmt->fetch();
        return $customer ?: null;
    } catch (Exception $e) {
        return null;
    }
}

function loginCustomer(string $login, string $password): array {
    $pdo = getDB();
    
    $login = trim($login);
    $isEmail = filter_var($login, FILTER_VALIDATE_EMAIL);
    
    if ($isEmail) {
        $stmt = $pdo->prepare('SELECT id, email, username, password, status FROM users WHERE email = :login LIMIT 1');
    } else {
        $stmt = $pdo->prepare('SELECT id, email, username, password, status FROM users WHERE username = :login LIMIT 1');
    }
    
    $stmt->execute([':login' => $login]);
    $customer = $stmt->fetch();
    
    if (!$customer) {
        return ['success' => false, 'error' => 'Invalid login credentials.'];
    }
    
    if ($customer['status'] !== 'active') {
        return ['success' => false, 'error' => 'Your account has been disabled. Please contact support.'];
    }
    
    if (!password_verify($password, $customer['password'])) {
        return ['success' => false, 'error' => 'Invalid login credentials.'];
    }
    
    session_regenerate_id(true);
    
    $_SESSION['customer_id'] = (int)$customer['id'];
    $_SESSION['customer_email'] = $customer['email'];
    $_SESSION['customer_username'] = $customer['username'];
    
    try {
        $updateStmt = $pdo->prepare('UPDATE users SET last_login = CURRENT_TIMESTAMP WHERE id = :id');
        $updateStmt->execute([':id' => $customer['id']]);
    } catch (Exception $e) {}
    
    return ['success' => true, 'customer_id' => $customer['id']];
}

function registerCustomer(string $email, string $username, string $password, string $firstName = '', string $lastName = '', string $company = '', string $phone = ''): array {
    $pdo = getDB();
    
    $email = trim(strtolower($email));
    $username = trim($username);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['success' => false, 'error' => 'Please enter a valid email address.'];
    }
    
    if (strlen($username) < 3) {
        return ['success' => false, 'error' => 'Username must be at least 3 characters.'];
    }
    
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
        return ['success' => false, 'error' => 'Username can only contain letters, numbers, and underscores.'];
    }
    
    if (strlen($password) < 8) {
        return ['success' => false, 'error' => 'Password must be at least 8 characters.'];
    }
    
    try {
        $emailCheck = $pdo->prepare('SELECT id FROM users WHERE email = :email LIMIT 1');
        $emailCheck->execute([':email' => $email]);
        if ($emailCheck->fetch()) {
            return ['success' => false, 'error' => 'An account with this email already exists.'];
        }
        
        $userCheck = $pdo->prepare('SELECT id FROM users WHERE username = :username LIMIT 1');
        $userCheck->execute([':username' => $username]);
        if ($userCheck->fetch()) {
            return ['success' => false, 'error' => 'This username is already taken.'];
        }
        
        $defaultGroupStmt = $pdo->query('SELECT id FROM customer_groups WHERE is_default = 1 LIMIT 1');
        $defaultGroup = $defaultGroupStmt->fetch();
        $customerGroupId = $defaultGroup ? (int)$defaultGroup['id'] : 1;
        
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        
        $stmt = $pdo->prepare('INSERT INTO users (email, username, password, first_name, last_name, company, phone, customer_group_id, account_type, is_verified, status, created_at) VALUES (:email, :username, :password, :first_name, :last_name, :company, :phone, :customer_group_id, :account_type, :is_verified, :status, CURRENT_TIMESTAMP)');
        
        $result = $stmt->execute([
            ':email' => $email,
            ':username' => $username,
            ':password' => $hashedPassword,
            ':first_name' => $firstName ?: null,
            ':last_name' => $lastName ?: null,
            ':company' => $company ?: null,
            ':phone' => $phone ?: null,
            ':customer_group_id' => $customerGroupId,
            ':account_type' => 'standard',
            ':is_verified' => 0,
            ':status' => 'active',
        ]);
        
        if (!$result) {
            return ['success' => false, 'error' => 'Failed to create account. Please try again.'];
        }
        
        $customerId = (int)$pdo->lastInsertId();
        
        session_regenerate_id(true);
        $_SESSION['customer_id'] = $customerId;
        $_SESSION['customer_email'] = $email;
        $_SESSION['customer_username'] = $username;
        
        return ['success' => true, 'customer_id' => $customerId, 'email' => $email];
        
    } catch (Exception $e) {
        error_log('Registration error: ' . $e->getMessage());
        return ['success' => false, 'error' => 'Server error during registration. Please try again.'];
    }
}

function logoutCustomer(): void {
    $keepCart = $_SESSION['cart'] ?? [];
    
    $_SESSION = [];
    
    if (!empty($keepCart)) {
        $_SESSION['cart'] = $keepCart;
    }
    
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            '/', $params['domain'],
            $params['secure'], $params['httponly']
        );
    }
}

function customerCsrfToken(): string {
    if (empty($_SESSION['customer_csrf_token'])) {
        $_SESSION['customer_csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['customer_csrf_token'];
}

function verifyCustomerCsrf(?string $token): bool {
    if (empty($token) || empty($_SESSION['customer_csrf_token'])) {
        return false;
    }
    return hash_equals($_SESSION['customer_csrf_token'], $token);
}

function getCustomerOrders(int $customerId, int $limit = 20): array {
    try {
        $pdo = getDB();
        $stmt = $pdo->prepare('SELECT id, order_number, status, subtotal, shipping_total, tax_total, grand_total, created_at, updated_at FROM orders WHERE user_id = :user_id ORDER BY created_at DESC LIMIT :limit');
        $stmt->bindValue(':user_id', $customerId, PDO::PARAM_INT);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll() ?: [];
    } catch (Exception $e) {
        return [];
    }
}

function getCustomerOrderById(int $customerId, int $orderId): ?array {
    try {
        $pdo = getDB();
        $stmt = $pdo->prepare('SELECT o.*, 
            a1.street as shipping_street, a1.street2 as shipping_street2, a1.city as shipping_city, a1.state as shipping_state, a1.zip as shipping_zip,
            a2.street as billing_street, a2.street2 as billing_street2, a2.city as billing_city, a2.state as billing_state, a2.zip as billing_zip
            FROM orders o
            LEFT JOIN addresses a1 ON o.shipping_address_id = a1.id
            LEFT JOIN addresses a2 ON o.billing_address_id = a2.id
            WHERE o.user_id = :user_id AND o.id = :order_id LIMIT 1');
        $stmt->execute([':user_id' => $customerId, ':order_id' => $orderId]);
        $order = $stmt->fetch();
        if (!$order) return null;
        
        $itemsStmt = $pdo->prepare('SELECT * FROM order_items WHERE order_id = :order_id');
        $itemsStmt->execute([':order_id' => $orderId]);
        $order['items'] = $itemsStmt->fetchAll() ?: [];
        
        return $order;
    } catch (Exception $e) {
        return null;
    }
}

function updateCustomerProfile(int $customerId, array $data): array {
    $allowedFields = ['first_name', 'last_name', 'company', 'phone'];
    $updates = [];
    $params = [':id' => $customerId];
    
    foreach ($allowedFields as $field) {
        if (isset($data[$field])) {
            $updates[] = "{$field} = :{$field}";
            $params[":{$field}"] = trim($data[$field]) ?: null;
        }
    }
    
    if (empty($updates)) {
        return ['success' => false, 'error' => 'No fields to update.'];
    }
    
    try {
        $pdo = getDB();
        $sql = 'UPDATE users SET ' . implode(', ', $updates) . ' WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return ['success' => true];
    } catch (Exception $e) {
        return ['success' => false, 'error' => 'Failed to update profile.'];
    }
}

function changeCustomerPassword(int $customerId, string $currentPassword, string $newPassword): array {
    if (strlen($newPassword) < 8) {
        return ['success' => false, 'error' => 'New password must be at least 8 characters.'];
    }
    
    try {
        $pdo = getDB();
        $stmt = $pdo->prepare('SELECT password FROM users WHERE id = :id LIMIT 1');
        $stmt->execute([':id' => $customerId]);
        $customer = $stmt->fetch();
        
        if (!$customer || !password_verify($currentPassword, $customer['password'])) {
            return ['success' => false, 'error' => 'Current password is incorrect.'];
        }
        
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT, ['cost' => 12]);
        $updateStmt = $pdo->prepare('UPDATE users SET password = :password WHERE id = :id');
        $updateStmt->execute([':password' => $hashedPassword, ':id' => $customerId]);
        
        return ['success' => true];
    } catch (Exception $e) {
        return ['success' => false, 'error' => 'Failed to change password.'];
    }
}
