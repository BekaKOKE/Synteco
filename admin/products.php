<?php
require_once __DIR__ . '/../includes/auth.php';
requireLogin();

$pageTitle = 'Products';
require_once __DIR__ . '/../includes/header.php';

$pdo = getDB();

$search   = trim($_GET['search'] ?? '');
$category = trim($_GET['category'] ?? '');
$page     = max(1, (int)($_GET['page'] ?? 1));
$limit    = 10;
$offset   = ($page - 1) * $limit;

$where  = 'WHERE 1=1';
$bind   = [];

if ($search !== '') {
    $where .= ' AND name LIKE :search';
    $bind[':search'] = '%' . $search . '%';
}
if ($category !== '') {
    $where .= ' AND category = :category';
    $bind[':category'] = $category;
}

$total = $pdo->prepare("SELECT COUNT(*) FROM products $where");
$total->execute($bind);
$total = (int)$total->fetchColumn();
$totalPages = max(1, (int)ceil($total / $limit));

$stmt = $pdo->prepare("SELECT * FROM products $where ORDER BY created_at DESC LIMIT $limit OFFSET $offset");
$stmt->execute($bind);
$products = $stmt->fetchAll();

$categories = $pdo->query('SELECT DISTINCT category FROM products WHERE category IS NOT NULL AND category != "" ORDER BY category')->fetchAll(PDO::FETCH_COLUMN);

function qs(array $extra = []): string {
    $params = array_merge($_GET, $extra);
    unset($params['page']);
    return http_build_query($params);
}
?>

<div class="toolbar">
    <form method="get" class="toolbar" style="margin-bottom:0;width:100%;">
        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" name="search" placeholder="Search products..." value="<?= htmlspecialchars($search) ?>">
        </div>
        <select name="category">
            <option value="">All Categories</option>
            <?php foreach ($categories as $cat): ?>
                <option value="<?= htmlspecialchars($cat) ?>" <?= $category === $cat ? 'selected' : '' ?>><?= htmlspecialchars($cat) ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-filter"></i> Filter</button>
        <a href="products.php" class="btn btn-secondary btn-sm"><i class="fas fa-times"></i> Clear</a>
        <a href="product_create.php" class="btn btn-primary btn-sm" style="margin-left:auto;"><i class="fas fa-plus"></i> Add Product</a>
    </form>
</div>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-boxes"></i> Products (<?= $total ?>)</h2>
    </div>
    <div class="card-body p-0">
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Added</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($products) === 0): ?>
                    <tr><td colspan="8" class="text-center">No products found.</td></tr>
                <?php else: foreach ($products as $p): ?>
                    <tr>
                        <td>
                            <?php if ($p['image']): ?>
                                <img src="../uploads/<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['name']) ?>">
                            <?php else: ?>
                                <div style="width:48px;height:48px;background:var(--gray-100);border-radius:6px;display:flex;align-items:center;justify-content:center;color:var(--gray-600);font-size:18px;"><i class="fas fa-box"></i></div>
                            <?php endif; ?>
                        </td>
                        <td><?= $p['id'] ?></td>
                        <td><strong><?= htmlspecialchars($p['name']) ?></strong></td>
                        <td><?= htmlspecialchars($p['category'] ?? '—') ?></td>
                        <td>$<?= number_format($p['price'], 2) ?></td>
                        <td><span class="stock-badge stock-<?= $p['stock'] == 0 ? 'out' : ($p['stock'] <= 5 ? 'low' : 'ok') ?>"><?= $p['stock'] ?></span></td>
                        <td><?= date('M j, Y', strtotime($p['created_at'])) ?></td>
                        <td>
                            <div class="action-group">
                                <a href="product_edit.php?id=<?= $p['id'] ?>" class="btn-icon edit" title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="product_delete.php?id=<?= $p['id'] ?>" class="btn-icon delete" title="Delete" onclick="return confirmDelete('<?= htmlspecialchars($p['name'], ENT_QUOTES) ?>')"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
    <?php if ($totalPages > 1): ?>
    <div class="card-body" style="border-top:1px solid var(--gray-100);">
        <div class="pagination">
            <a href="?<?= qs(['page' => $page - 1]) ?>" class="<?= $page <= 1 ? 'disabled' : '' ?>">&laquo;</a>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?<?= qs(['page' => $i]) ?>" class="<?= $i === $page ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>
            <a href="?<?= qs(['page' => $page + 1]) ?>" class="<?= $page >= $totalPages ? 'disabled' : '' ?>">&raquo;</a>
        </div>
    </div>
    <?php endif; ?>
</div>

<script>
function confirmDelete(name) {
    return confirm('Delete "' + name + '" permanently? This cannot be undone.');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
