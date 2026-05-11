<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../config/database.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id <= 0) {
    echo json_encode(['error' => 'Invalid product ID']);
    exit;
}

try {
    $pdo = getDB();
    $stmt = $pdo->prepare('SELECT id, name, description, price, image, category, stock FROM products WHERE id = :id LIMIT 1');
    $stmt->execute([':id' => $id]);
    $product = $stmt->fetch();

    if (!$product) {
        echo json_encode(['error' => 'Product not found']);
        exit;
    }

    echo json_encode($product);
} catch (Exception $e) {
    echo json_encode(['error' => 'Failed to load product details']);
}
