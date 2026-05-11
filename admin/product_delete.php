<?php
require_once __DIR__ . '/../includes/auth.php';
requireLogin();

$pdo = getDB();
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$stmt = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$stmt->execute([':id' => $id]);
$product = $stmt->fetch();

if (!$product) {
    header('Location: products.php');
    exit;
}

if ($product['image'] && file_exists(__DIR__ . '/../uploads/' . $product['image'])) {
    unlink(__DIR__ . '/../uploads/' . $product['image']);
}

$pdo->prepare('DELETE FROM products WHERE id = :id')->execute([':id' => $id]);

header('Location: products.php');
exit;
