<?php
require_once __DIR__ . '/includes/categories.php';

$cats = getAllCategories();
echo "<h1>Category Links Test</h1>";
echo "<ul>";
foreach ($cats as $slug => $info) {
    echo "<li>";
    echo "<a href='category.php?slug={$slug}'>{$info['name']}</a> - ";
    echo "URL should be: category.php?slug={$slug}";
    echo "</li>";
}
echo "</ul>";

echo "<h2>Click test:</h2>";
echo "<p>Click on 'Tools' - should go to: category.php?slug=tools</p>";