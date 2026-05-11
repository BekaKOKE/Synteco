<?php
// Exact copy of category.php logic to debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/includes/categories.php';
require_once __DIR__ . '/config/database.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : 'tools';
echo "Slug: $slug<br>";

$catInfo = getCategoryInfo($slug);
if (!$catInfo) {
    $catInfo = getCategoryInfo('tools');
    $slug = 'tools';
}

$savedCatName = $catInfo['name'];
$savedCatSubs = $catInfo['sub'];
$savedSlug = $slug;

echo "Category Name: $savedCatName<br>";
echo "Subcategories: " . count($savedCatSubs) . "<br>";
echo "First 5 subs: " . implode(', ', array_slice($savedCatSubs, 0, 5)) . "<br><br>";

$categoriesToQuery = [$savedCatName];
if (!empty($savedCatSubs)) {
    $categoriesToQuery = array_merge($categoriesToQuery, $savedCatSubs);
}

echo "Total categories to query: " . count($categoriesToQuery) . "<br><br>";

$pdo = getDB();
$placeholders = implode(',', array_fill(0, count($categoriesToQuery), '?'));

// Debug: What categories are in the database?
echo "=== Categories in DB that match query ===<br>";
$placeholdersList = [];
foreach ($categoriesToQuery as $i => $cat) {
    $placeholdersList[] = "category = ?";
}
$whereDebug = implode(' OR ', $placeholdersList);
$debugStmt = $pdo->prepare("SELECT category, COUNT(*) as cnt FROM products WHERE $whereDebug GROUP BY category ORDER BY category");
$debugStmt->execute($categoriesToQuery);
$matches = $debugStmt->fetchAll();
foreach ($matches as $m) {
    echo "{$m['category']}: {$m['cnt']}<br>";
}
echo "<br>Total matches: " . array_sum(array_column($matches, 'cnt')) . "<br>";

// Final query test
$countStmt = $pdo->prepare("SELECT COUNT(*) FROM products WHERE category IN ({$placeholders})");
$countStmt->execute($categoriesToQuery);
$totalProducts = (int)$countStmt->fetchColumn();

echo "<br>Final count: $totalProducts products<br>";
?>