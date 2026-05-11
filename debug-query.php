<?php
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/includes/categories.php';

$slug = 'tools';
$catInfo = getCategoryInfo($slug);
$savedCatName = $catInfo['name'];
$savedCatSubs = $catInfo['sub'];

echo "Category: $savedCatName\n";
echo "Subcategories: " . implode(', ', $savedCatSubs) . "\n";

$categoriesToQuery = [$savedCatName];
if (!empty($savedCatSubs)) {
    $categoriesToQuery = array_merge($categoriesToQuery, $savedCatSubs);
}

echo "\nCategories to query: " . implode(', ', $categoriesToQuery) . "\n";

$pdo = getDB();
$placeholders = implode(',', array_fill(0, count($categoriesToQuery), '?'));
$stmt = $pdo->prepare("SELECT COUNT(*) as cnt FROM products WHERE category IN ({$placeholders})");
$stmt->execute($categoriesToQuery);
$count = $stmt->fetchColumn();

echo "Products found: $count\n";
?>