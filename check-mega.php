<?php
require_once __DIR__ . '/includes/categories.php';

// Check all slugs in mega menu
$slugs = ['abrasives', 'adhesives', 'cleaning', 'electrical', 'electronics', 'fasteners', 'fleet', 'furnishings', 
          'hvac', 'hardware', 'hydraulics', 'lab', 'lighting', 'lubrication', 'machining', 'material-handling',
          'motors', 'office', 'outdoor', 'packaging', 'paints', 'pipe', 'plumbing', 'pneumatics'];

echo "=== Mega Menu Slugs Check ===\n";
foreach ($slugs as $slug) {
    $info = getCategoryInfo($slug);
    if ($info) {
        echo "OK: $slug -> {$info['name']}\n";
    } else {
        echo "MISSING: $slug\n";
    }
}
?>