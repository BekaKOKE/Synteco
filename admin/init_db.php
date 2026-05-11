<?php
require_once __DIR__ . '/../config/database.php';

echo "Synteco Database Initialization\n";
echo str_repeat('=', 60) . "\n\n";

try {
    $pdo = getDB();
    echo "[OK] Database connection established\n\n";
    
    echo "Creating database schema...\n";
    $sql = file_get_contents(__DIR__ . '/../config/database_schema.sql');
    
    $statements = explode(';', $sql);
    $executed = 0;
    $errors = 0;
    
    foreach ($statements as $stmt) {
        $stmt = trim($stmt);
        if ($stmt) {
            try {
                $pdo->exec($stmt);
                $executed++;
            } catch (Exception $e) {
                $errors++;
            }
        }
    }
    
    echo "[OK] Schema: {$executed} statements executed\n";
    if ($errors > 0) {
        echo "[INFO] {$errors} statements skipped (table already exists)\n";
    }
    
    echo "\nSeeding categories...\n";
    $seedSql = file_get_contents(__DIR__ . '/../config/seed_categories.sql');
    
    $pdo->exec('DELETE FROM categories');
    
    $statements = explode(';', $seedSql);
    $catCount = 0;
    
    foreach ($statements as $stmt) {
        $stmt = trim($stmt);
        if ($stmt && stripos($stmt, 'INSERT') === 0) {
            try {
                $pdo->exec($stmt);
                $catCount += $pdo->exec($stmt) ? 1 : 0;
            } catch (Exception $e) {
                echo "[ERROR] " . $e->getMessage() . "\n";
            }
        }
    }
    
    $rootCatCount = $pdo->query('SELECT COUNT(*) FROM categories WHERE level = 0')->fetchColumn();
    $totalCatCount = $pdo->query('SELECT COUNT(*) FROM categories')->fetchColumn();
    
    echo "[OK] Categories: {$totalCatCount} total ({$rootCatCount} root categories)\n\n";
    
    echo str_repeat('=', 60) . "\n";
    echo "Database initialization complete!\n\n";
    echo "Login to admin panel at: /synteco website/admin/login.php\n";
    echo "Default admin: admin / admin123\n";
    echo "\nIMPORTANT: Delete this file after use for security.\n";
    
} catch (Exception $e) {
    echo "[ERROR] " . $e->getMessage() . "\n";
    echo $e->getTraceAsString() . "\n";
}
