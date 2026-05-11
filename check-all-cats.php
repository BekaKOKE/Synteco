<?php
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/includes/categories.php';

$testSlugs = ['tools', 'electrical', 'safety', 'fasteners', 'cleaning', 'hvac', 'lighting', 'plumbing', 'security'];

foreach ($testSlugs as $slug) {
    $catInfo = getCategoryInfo($slug);
    if (!$catInfo) {
        echo "$slug: NOT FOUND\n";
        continue;
    }

    $categoriesToQuery = [$catInfo['name']];
    if (!empty($catInfo['sub'])) {
        $categoriesToQuery = array_merge($categoriesToQuery, $catInfo['sub']);
    }

    $pdo = getDB();
    $placeholders = implode(',', array_fill(0, count($categoriesToQuery), '?'));
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM products WHERE category IN ({$placeholders})");
    $stmt->execute($categoriesToQuery);
    $count = $stmt->fetchColumn();

    echo "$slug: $count products (main: {$catInfo['name']})\n";
}
?>