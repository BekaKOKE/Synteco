<?php
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/includes/categories.php';

$pdo = getDB();

echo "=== Categories in Products Table ===\n";
$dbCats = $pdo->query('SELECT category, COUNT(*) as cnt FROM products GROUP BY category ORDER BY category')->fetchAll();
foreach ($dbCats as $row) {
    echo "DB: {$row['category']} ({$row['cnt']} products)\n";
}

echo "\n=== Categories Defined in categories.php ===\n";
$allCats = getAllCategories();
foreach ($allCats as $slug => $info) {
    echo "DEF: {$info['name']} (slug: $slug)\n";
}
?>