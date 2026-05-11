<?php
require_once __DIR__ . '/../config/database.php';

echo "Synteco Database Check & Fix\n";
echo str_repeat('=', 60) . "\n\n";

try {
    $pdo = getDB();
    echo "[OK] Database connection established\n\n";
    
    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    echo "Tables in database: " . implode(', ', $tables) . "\n\n";
    
    $usersCount = 0;
    try {
        $usersCount = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
        echo "[OK] Users table exists: {$usersCount} records\n";
    } catch (Exception $e) {
        echo "[CREATING] Users table...\n";
        $pdo->exec("CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(100) NOT NULL UNIQUE,
            username VARCHAR(50) NULL DEFAULT NULL,
            password VARCHAR(255) NOT NULL,
            first_name VARCHAR(100) DEFAULT NULL,
            last_name VARCHAR(100) DEFAULT NULL,
            company VARCHAR(255) DEFAULT NULL,
            phone VARCHAR(20) DEFAULT NULL,
            customer_group_id INT DEFAULT NULL,
            account_type VARCHAR(20) NOT NULL DEFAULT 'standard',
            is_verified TINYINT(1) NOT NULL DEFAULT 0,
            status VARCHAR(20) NOT NULL DEFAULT 'active',
            last_login TIMESTAMP NULL DEFAULT NULL,
            remember_token VARCHAR(100) NULL DEFAULT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            UNIQUE KEY idx_username (username),
            INDEX idx_email (email),
            INDEX idx_company (company),
            INDEX idx_status (status),
            FOREIGN KEY (customer_group_id) REFERENCES customer_groups(id) ON DELETE SET NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
        echo "[OK] Users table created\n";
    }
    
    try {
        $catCount = $pdo->query("SELECT COUNT(*) FROM categories")->fetchColumn();
        echo "[OK] Categories table: {$catCount} records\n";
    } catch (Exception $e) {
        echo "[ERROR] Categories table issue: " . $e->getMessage() . "\n";
    }
    
    try {
        $pdo->query("SELECT username FROM users LIMIT 1");
        echo "[OK] Username column exists\n";
    } catch (Exception $e) {
        echo "[ADDING] Username column...\n";
        try {
            $pdo->exec("ALTER TABLE users ADD COLUMN username VARCHAR(50) NULL DEFAULT NULL AFTER email");
            $pdo->exec("ALTER TABLE users ADD UNIQUE KEY idx_username (username)");
            echo "[OK] Username column added\n";
        } catch (Exception $e2) {
            echo "[ERROR] " . $e2->getMessage() . "\n";
        }
    }
    
    try {
        $pdo->query("SELECT remember_token FROM users LIMIT 1");
        echo "[OK] Remember token column exists\n";
    } catch (Exception $e) {
        echo "[ADDING] Remember token column...\n";
        try {
            $pdo->exec("ALTER TABLE users ADD COLUMN remember_token VARCHAR(100) NULL DEFAULT NULL AFTER status");
            echo "[OK] Remember token column added\n";
        } catch (Exception $e2) {
            echo "[ERROR] " . $e2->getMessage() . "\n";
        }
    }
    
    try {
        $pdo->query("SELECT 1 FROM password_reset_tokens LIMIT 1");
        echo "[OK] Password reset tokens table exists\n";
    } catch (Exception $e) {
        echo "[CREATING] Password reset tokens table...\n";
        try {
            $pdo->exec("CREATE TABLE IF NOT EXISTS password_reset_tokens (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT NOT NULL,
                token VARCHAR(64) NOT NULL,
                expires_at TIMESTAMP NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                used_at TIMESTAMP NULL DEFAULT NULL,
                UNIQUE KEY idx_token (token),
                INDEX idx_user (user_id),
                INDEX idx_expires (expires_at),
                FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
            echo "[OK] Password reset tokens table created\n";
        } catch (Exception $e2) {
            echo "[ERROR] " . $e2->getMessage() . "\n";
        }
    }
    
    echo "\n" . str_repeat('=', 60) . "\n";
    echo "Database check complete!\n";
    echo "\nNow you can register at: /synteco website/register.php\n";
    
} catch (Exception $e) {
    echo "[ERROR] " . $e->getMessage() . "\n";
}
