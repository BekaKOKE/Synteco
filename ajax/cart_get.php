<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../config/init.php';

$items = getCartItems();
$count = getCartCount();
$total = getCartTotal();

echo json_encode([
    'success' => true,
    'count' => $count,
    'total' => $total,
    'items' => array_values($items),
]);
