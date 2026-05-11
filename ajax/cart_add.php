<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../config/init.php';

$productId = (int)($_POST['id'] ?? 0);
$quantity = max(1, (int)($_POST['qty'] ?? 1));

if ($productId <= 0) {
    echo json_encode(['success' => false, 'error' => 'Invalid product']);
    exit;
}

try {
    $pdo = getDB();
    $stmt = $pdo->prepare('SELECT id, name, price, image FROM products WHERE id = :id LIMIT 1');
    $stmt->execute([':id' => $productId]);
    $product = $stmt->fetch();

    if (!$product) {
        echo json_encode(['success' => false, 'error' => 'Product not found']);
        exit;
    }

    addToCart($product['id'], $product['name'], (float)$product['price'], $quantity, $product['image']);

    echo json_encode([
        'success' => true,
        'count' => getCartCount(),
        'total' => getCartTotal(),
        'item' => $product['name'],
    ]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => 'Server error']);
}
