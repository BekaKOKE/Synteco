<?php
// Test exact scenario as category.php
$slug = 'safety';

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/includes/categories.php';

$catInfo = getCategoryInfo($slug);
if (!$catInfo) {
    echo "Category not found: $slug";
    exit;
}

$savedCatName = $catInfo['name'];
$savedCatSubs = $catInfo['sub'];

$categoriesToQuery = [$savedCatName];
if (!empty($savedCatSubs)) {
    $categoriesToQuery = array_merge($categoriesToQuery, $savedCatSubs);
}

echo "Category: $savedCatName\n";
echo "Subcount: " . count($savedCatSubs) . "\n";
echo "Total cats to query: " . count($categoriesToQuery) . "\n";
echo "First 5: " . implode(', ', array_slice($categoriesToQuery, 0, 5)) . "\n\n";

$pdo = getDB();
$placeholders = implode(',', array_fill(0, count($categoriesToQuery), '?'));

// Test the exact query
$testSql = "SELECT COUNT(*) as cnt FROM products WHERE category IN ($placeholders)";
echo "SQL: $testSql\n\n";

$stmt = $pdo->prepare($testSql);
$stmt->execute($categoriesToQuery);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo "Result: " . $result['cnt'] . " products\n";

// Also show what categories actually exist in DB
echo "\n=== Actual categories in DB ===\n";
$allDbCats = $pdo->query("SELECT category, COUNT(*) as cnt FROM products GROUP BY category ORDER BY category")->fetchAll();
foreach ($allDbCats as $row) {
    echo "{$row['category']}: {$row['cnt']}\n";
}
?>