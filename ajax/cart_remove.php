<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../config/init.php';

$productId = (int)($_POST['id'] ?? 0);
$clearAll = isset($_POST['clear']) && $_POST['clear'] == '1';

if ($clearAll) {
    clearCart();
    echo json_encode([
        'success' => true,
        'count' => 0,
        'total' => 0,
    ]);
    exit;
}

if ($productId <= 0) {
    echo json_encode(['success' => false, 'error' => 'Invalid product']);
    exit;
}

removeFromCart($productId);

echo json_encode([
    'success' => true,
    'count' => getCartCount(),
    'total' => getCartTotal(),
]);
