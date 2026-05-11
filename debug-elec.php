<?php
// Simulate exact category.php scenario for Electrical
require_once __DIR__ . '/includes/categories.php';
require_once __DIR__ . '/config/database.php';

$slug = 'electrical';
$catInfo = getCategoryInfo($slug);

$savedCatName = $catInfo['name'];
$savedCatSubs = $catInfo['sub'];

$categoriesToQuery = [$savedCatName];
if (!empty($savedCatSubs)) {
    $categoriesToQuery = array_merge($categoriesToQuery, $savedCatSubs);
}

echo "Category: $savedCatName\n";
echo "Subs count: " . count($savedCatSubs) . "\n\n";

$pdo = getDB();
$placeholders = implode(',', array_fill(0, count($categoriesToQuery), '?'));

// Test WITHOUT filters (just like in category.php line 56-57)
$whereClause = "category IN ({$placeholders})";
$params = $categoriesToQuery;

$countStmt = $pdo->prepare("SELECT COUNT(*) FROM products WHERE {$whereClause}");
$countStmt->execute($params);
$totalProducts = (int)$countStmt->fetchColumn();

echo "Total products (no filters): $totalProducts\n";

// Now simulate WITH filters that were added
$priceFilter = '';
$brandFilter = '';
$inStockOnly = false;

// Build WHERE with filters (like in category.php)
$whereClause2 = "category IN ({$placeholders})";
$params2 = $categoriesToQuery;

$countStmt2 = $pdo->prepare("SELECT COUNT(*) FROM products WHERE {$whereClause2}");
$countStmt2->execute($params2);
$totalProducts2 = (int)$countStmt2->fetchColumn();

echo "Total products (with empty filters): $totalProducts2\n";
?>