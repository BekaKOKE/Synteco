<?php
require_once __DIR__ . '/includes/categories.php';

$cat = getCategoryInfo('tools');
echo "Result for 'tools': ";
print_r($cat);
?>