<?php
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/includes/categories.php';

$slugs = ['abrasives', 'adhesives', 'cleaning', 'electrical', 'electronics', 'fasteners', 'fleet', 'furnishings',
          'hvac', 'hardware', 'hydraulics', 'lab', 'lighting', 'lubrication', 'machining', 'material-handling',
          'motors', 'office', 'outdoor', 'packaging', 'paints', 'pipe', 'plumbing', 'pneumatics',
          'power-transmission', 'pumps', 'raw-materials', 'safety', 'security', 'test-instruments', 'tools', 'welding'];

echo "=== Products per Category Slug ===\n";
foreach ($slugs as $slug) {
    $catInfo = getCategoryInfo($slug);
    if (!$catInfo) {
        echo "INVALID: $slug\n";
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

    echo "$slug: $count products\n";
}
?>