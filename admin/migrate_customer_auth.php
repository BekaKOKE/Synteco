<?php
require_once __DIR__ . '/../config/init.php';

$migrations = [
    'add_username_to_users' => [
        'run' => function(PDO $pdo) {
            try {
                $check = $pdo->query("SHOW COLUMNS FROM users LIKE 'username'");
                if ($check->rowCount() > 0) {
                    return ['success' => true, 'message' => 'Column already exists'];
                }
            } catch (Exception $e) {}
            
            try {
                $pdo->exec("ALTER TABLE users ADD COLUMN username VARCHAR(50) NULL DEFAULT NULL AFTER email");
                $pdo->exec("ALTER TABLE users ADD UNIQUE KEY idx_username (username)");
                return ['success' => true, 'message' => 'Added username column and unique index'];
            } catch (Exception $e) {
                return ['success' => false, 'error' => $e->getMessage()];
            }
        },
    ],
    'add_remember_token_to_users' => [
        'run' => function(PDO $pdo) {
            try {
                $check = $pdo->query("SHOW COLUMNS FROM users LIKE 'remember_token'");
                if ($check->rowCount() > 0) {
                    return ['success' => true, 'message' => 'Column already exists'];
                }
            } catch (Exception $e) {}
            
            try {
                $pdo->exec("ALTER TABLE users ADD COLUMN remember_token VARCHAR(100) NULL DEFAULT NULL AFTER status");
                return ['success' => true, 'message' => 'Added remember_token column'];
            } catch (Exception $e) {
                return ['success' => false, 'error' => $e->getMessage()];
            }
        },
    ],
    'add_reset_tokens_table' => [
        'run' => function(PDO $pdo) {
            try {
                $check = $pdo->query("SHOW TABLES LIKE 'password_reset_tokens'");
                if ($check->rowCount() > 0) {
                    return ['success' => true, 'message' => 'Table already exists'];
                }
            } catch (Exception $e) {}
            
            try {
                $sql = "CREATE TABLE IF NOT EXISTS password_reset_tokens (
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
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
                
                $pdo->exec($sql);
                return ['success' => true, 'message' => 'Created password_reset_tokens table'];
            } catch (Exception $e) {
                return ['success' => false, 'error' => $e->getMessage()];
            }
        },
    ],
];

$results = [];
$pdo = getDB();

foreach ($migrations as $name => $migration) {
    $results[$name] = $migration['run']($pdo);
}

header('Content-Type: text/plain');
echo "Synteco Database Migrations\n";
echo str_repeat('=', 50) . "\n\n";

foreach ($results as $name => $result) {
    if ($result['success']) {
        echo "[OK] {$name}: {$result['message']}\n";
    } else {
        echo "[FAILED] {$name}: {$result['error']}\n";
    }
}

echo "\n" . str_repeat('=', 50) . "\n";
echo "Migration run complete.\n";
echo "IMPORTANT: Delete this file after running for security.\n";
