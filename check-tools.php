<?php
require_once __DIR__ . '/includes/categories.php';

$info = getCategoryInfo('tools');
echo "Tools category:\n";
print_r($info);
?>