<?php
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/includes/categories.php';

$allDefs = getAllCategories();
$defNames = array_values(array_map(function($i) { return $i['name']; }, $allDefs));

$pdo = getDB();
$dbCats = $pdo->query('SELECT DISTINCT category FROM products ORDER BY category')->fetchAll(PDO::FETCH_COLUMN);

echo "=== Categories that DON'T match ===\n";
foreach ($dbCats as $cat) {
    if (!in_array($cat, $defNames)) {
        $cnt = $pdo->prepare('SELECT COUNT(*) FROM products WHERE category = ?');
        $cnt->execute([$cat]);
        echo "NOT FOUND: $cat ({$cnt->fetchColumn()} products)\n";
    }
}

echo "\n=== Categories that DO match ===\n";
foreach ($dbCats as $cat) {
    if (in_array($cat, $defNames)) {
        $cnt = $pdo->prepare('SELECT COUNT(*) FROM products WHERE category = ?');
        $cnt->execute([$cat]);
        echo "FOUND: $cat ({$cnt->fetchColumn()} products)\n";
    }
}
?>