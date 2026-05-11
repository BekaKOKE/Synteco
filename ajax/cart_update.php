<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../config/init.php';

$productId = (int)($_POST['id'] ?? 0);
$quantity = (int)($_POST['qty'] ?? 0);

if ($productId <= 0) {
    echo json_encode(['success' => false, 'error' => 'Invalid product']);
    exit;
}

updateCartQuantity($productId, $quantity);

echo json_encode([
    'success' => true,
    'count' => getCartCount(),
    'total' => getCartTotal(),
]);
