<?php
// ============================================================
// Synteco Cart System (Session-based, upgradable to DB)
// ============================================================

function getCart(): array {
    return $_SESSION['cart'] ?? [];
}

function saveCart(array $cart): void {
    $_SESSION['cart'] = $cart;
}

function getCartCount(): int {
    $cart = getCart();
    $count = 0;
    foreach ($cart as $item) {
        $count += $item['quantity'];
    }
    return $count;
}

function getCartTotal(): float {
    $cart = getCart();
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

function addToCart(int $productId, string $name, float $price, int $quantity = 1, string $image = ''): void {
    $cart = getCart();

    if (isset($cart[$productId])) {
        $cart[$productId]['quantity'] += $quantity;
    } else {
        $cart[$productId] = [
            'id'       => $productId,
            'name'     => $name,
            'price'    => $price,
            'quantity' => $quantity,
            'image'    => $image,
        ];
    }

    saveCart($cart);
}

function updateCartQuantity(int $productId, int $quantity): void {
    $cart = getCart();

    if ($quantity <= 0) {
        unset($cart[$productId]);
    } elseif (isset($cart[$productId])) {
        $cart[$productId]['quantity'] = $quantity;
    }

    saveCart($cart);
}

function removeFromCart(int $productId): void {
    $cart = getCart();
    unset($cart[$productId]);
    saveCart($cart);
}

function clearCart(): void {
    $_SESSION['cart'] = [];
}

function getCartItems(): array {
    $cart = getCart();
    if (empty($cart)) return [];

    // Try to enrich with DB data
    try {
        require_once __DIR__ . '/../config/database.php';
        $pdo = getDB();
        $ids = array_keys($cart);
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $stmt = $pdo->prepare("SELECT id, name, price, image, stock FROM products WHERE id IN ({$placeholders})");
        $stmt->execute(array_values($ids));
        $dbProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $enriched = [];
        foreach ($dbProducts as $dbp) {
            $pid = $dbp['id'];
            if (isset($cart[$pid])) {
                $enriched[$pid] = array_merge($cart[$pid], [
                    'price' => $dbp['price'],
                    'name'  => $dbp['name'],
                    'image' => $dbp['image'],
                    'stock' => $dbp['stock'],
                ]);
            }
        }
        return $enriched;
    } catch (Exception $e) {
        return $cart;
    }
}
