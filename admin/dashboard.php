<?php
require_once __DIR__ . '/../includes/auth.php';
requireLogin();

$pageTitle = 'Dashboard';
require_once __DIR__ . '/../includes/header.php';

$pdo = getDB();

$totalProducts = $pdo->query('SELECT COUNT(*) FROM products')->fetchColumn();
$totalStock    = $pdo->query('SELECT COALESCE(SUM(stock), 0) FROM products')->fetchColumn();
$lowStock      = $pdo->query('SELECT COUNT(*) FROM products WHERE stock > 0 AND stock <= 5')->fetchColumn();
$outOfStock    = $pdo->query('SELECT COUNT(*) FROM products WHERE stock = 0')->fetchColumn();
$avgPrice      = $pdo->query('SELECT COALESCE(ROUND(AVG(price), 2), 0) FROM products')->fetchColumn();
?>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon" style="background:#e3f2fd;color:#1565c0;"><i class="fas fa-boxes"></i></div>
        <div class="stat-info">
            <span class="stat-number"><?= $totalProducts ?></span>
            <span class="stat-label">Total Products</span>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon" style="background:#e8f5e9;color:#2e7d32;"><i class="fas fa-warehouse"></i></div>
        <div class="stat-info">
            <span class="stat-number"><?= $totalStock ?></span>
            <span class="stat-label">Total Stock</span>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon" style="background:#fff3e0;color:#e65100;"><i class="fas fa-exclamation-triangle"></i></div>
        <div class="stat-info">
            <span class="stat-number"><?= $lowStock ?></span>
            <span class="stat-label">Low Stock (≤5)</span>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon" style="background:#fce4ec;color:#c62828;"><i class="fas fa-times-circle"></i></div>
        <div class="stat-info">
            <span class="stat-number"><?= $outOfStock ?></span>
            <span class="stat-label">Out of Stock</span>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon" style="background:#f3e5f5;color:#6a1b9a;"><i class="fas fa-dollar-sign"></i></div>
        <div class="stat-info">
            <span class="stat-number">$<?= number_format($avgPrice, 2) ?></span>
            <span class="stat-label">Avg. Price</span>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        <h2><i class="fas fa-clock"></i> Recent Products</h2>
        <a href="products.php" class="btn btn-sm">View All</a>
    </div>
    <div class="card-body p-0">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Added</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $recent = $pdo->query('SELECT id, name, category, price, stock, created_at FROM products ORDER BY created_at DESC LIMIT 5');
                if ($recent->rowCount() === 0): ?>
                    <tr><td colspan="6" class="text-center">No products yet.</td></tr>
                <?php else: while ($row = $recent->fetch()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['category'] ?? '—') ?></td>
                        <td>$<?= number_format($row['price'], 2) ?></td>
                        <td><span class="stock-badge stock-<?= $row['stock'] == 0 ? 'out' : ($row['stock'] <= 5 ? 'low' : 'ok') ?>"><?= $row['stock'] ?></span></td>
                        <td><?= $row['created_at'] ?></td>
                    </tr>
                <?php endwhile; endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
