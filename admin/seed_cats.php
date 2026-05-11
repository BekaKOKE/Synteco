<?php
require_once __DIR__ . '/../config/database.php';

echo "Seeding Categories...\n";
echo str_repeat('=', 60) . "\n\n";

try {
    $pdo = getDB();
    
    $countBefore = $pdo->query('SELECT COUNT(*) FROM categories')->fetchColumn();
    echo "Categories before: {$countBefore}\n";
    
    $seedSql = file_get_contents(__DIR__ . '/../config/seed_categories.sql');
    
    $lines = explode("\n", $seedSql);
    $currentStatement = '';
    $delimiter = ';';
    $statements = [];
    
    foreach ($lines as $line) {
        $trimmed = trim($line);
        
        if (empty($trimmed) || strpos($trimmed, '--') === 0) {
            continue;
        }
        
        $currentStatement .= $line . "\n";
        
        if (substr($trimmed, -1) === ';') {
            $statements[] = $currentStatement;
            $currentStatement = '';
        }
    }
    
    if (trim($currentStatement)) {
        $statements[] = $currentStatement;
    }
    
    $pdo->exec('DELETE FROM categories');
    $pdo->exec('ALTER TABLE categories AUTO_INCREMENT = 1');
    echo "Cleared existing categories\n";
    
    $executed = 0;
    $errors = [];
    
    foreach ($statements as $stmt) {
        $stmt = trim($stmt);
        if (empty($stmt) || $stmt === ';') {
            continue;
        }
        
        try {
            $pdo->exec($stmt);
            $executed++;
        } catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
    }
    
    $countAfter = $pdo->query('SELECT COUNT(*) FROM categories')->fetchColumn();
    $rootCount = $pdo->query("SELECT COUNT(*) FROM categories WHERE level = 0")->fetchColumn();
    $subCount = $pdo->query("SELECT COUNT(*) FROM categories WHERE level > 0")->fetchColumn();
    
    echo "\n";
    echo "Executed: {$executed} statements\n";
    echo "Total categories: {$countAfter}\n";
    echo "Root categories: {$rootCount}\n";
    echo "Subcategories: {$subCount}\n";
    
    if (!empty($errors)) {
        echo "\nErrors: " . count($errors) . "\n";
        foreach (array_slice($errors, 0, 3) as $err) {
            echo "  - {$err}\n";
        }
    }
    
    echo "\n" . str_repeat('=', 60) . "\n";
    echo "Categories seeded successfully!\n";
    
} catch (Exception $e) {
    echo "[ERROR] " . $e->getMessage() . "\n";
    echo $e->getTraceAsString() . "\n";
}
