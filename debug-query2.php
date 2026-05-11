<?php
require_once __DIR__ . '/includes/categories.php';
require_once __DIR__ . '/config/database.php';

$slug = 'tools';
$catInfo = getCategoryInfo($slug);

$name = $catInfo['name'];
$subs = $catInfo['sub'];

$catsToQuery = [$name];
if (!empty($subs)) {
    $catsToQuery = array_merge($catsToQuery, $subs);
}

$pdo = getDB();
$placeholders = implode(',', array_fill(0, count($catsToQuery), '?'));

echo "Testing query with:\n";
echo "Name: $name\n";
echo "Subs count: " . count($subs) . "\n";
echo "Total query items: " . count($catsToQuery) . "\n\n";

echo "First 3: " . implode(', ', array_slice($catsToQuery, 0, 3)) . "\n\n";

// Test 1: Simple query
$test1 = $pdo->prepare("SELECT COUNT(*) FROM products WHERE category = ?");
$test1->execute([$name]);
echo "Test 1 (single category '$name'): " . $test1->fetchColumn() . "\n";

// Test 2: In query with placeholders
$test2 = $pdo->prepare("SELECT COUNT(*) FROM products WHERE category IN ($placeholders)");
$test2->execute($catsToQuery);
echo "Test 2 (IN query with " . count($catsToQuery) . " categories): " . $test2->fetchColumn() . "\n";

// Test 3: List what we query
foreach ($catsToQuery as $c) {
    $cnt = $pdo->prepare("SELECT COUNT(*) FROM products WHERE category = ?");
    $cnt->execute([$c]);
    $result = $cnt->fetchColumn();
    if ($result > 0) echo "FOUND: $c = $result\n";
}
?>