<?php
require_once __DIR__ . '/../includes/auth.php';
requireLogin();
require_once __DIR__ . '/../includes/functions.php';

$pageTitle = 'Edit Product';
require_once __DIR__ . '/../includes/header.php';

$pdo = getDB();
$errors = [];
$success = false;

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$stmt->execute([':id' => $id]);
$product = $stmt->fetch();

if (!$product) {
    echo '<div class="alert alert-error">Product not found.</div>';
    require_once __DIR__ . '/../includes/footer.php';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrf($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid security token. Please try again.';
    }

    $data = $_POST;
    validateProductInput($data, $errors);
    $imageName = uploadProductImage($product['image'], $errors);

    if (empty($errors)) {
        $stmt = $pdo->prepare('UPDATE products SET name = :name, description = :description, price = :price, image = :image, category = :category, stock = :stock WHERE id = :id');
        $stmt->execute([
            ':name'        => $data['name'],
            ':description' => $data['description'],
            ':price'       => $data['price'],
            ':image'       => $imageName,
            ':category'    => $data['category'] ?: null,
            ':stock'       => (int)$data['stock'],
            ':id'          => $id,
        ]);
        $success = true;
        $stmt = $pdo->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->execute([':id' => $id]);
        $product = $stmt->fetch();
    }
}
?>

<div class="card form-card">
    <div class="card-header">
        <h2><i class="fas fa-edit"></i> Edit Product #<?= $id ?></h2>
        <a href="products.php" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">
        <?php if ($success): ?>
            <div class="toast toast-success">Product updated successfully!</div>
        <?php endif; ?>
        <?php if (!empty($errors)): ?>
            <div class="alert alert-error">
                <?php foreach ($errors as $err): ?>
                    <div><?= htmlspecialchars($err) ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="csrf_token" value="<?= csrfToken() ?>">
            <div class="form-group">
                <label for="name">Product Name *</label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($_POST['name'] ?? $product['name']) ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4"><?= htmlspecialchars($_POST['description'] ?? $product['description']) ?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price * ($)</label>
                <input type="number" id="price" name="price" step="0.01" min="0" value="<?= htmlspecialchars($_POST['price'] ?? $product['price']) ?>" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category">
                    <option value="">— Select —</option>
                    <?php renderCategoryOptions($pdo, $_POST['category'] ?? $product['category'] ?? '') ?>
                </select>
            </div>
            <div class="form-group">
                <label for="stock">Stock Quantity *</label>
                <input type="number" id="stock" name="stock" min="0" value="<?= htmlspecialchars($_POST['stock'] ?? $product['stock']) ?>" required>
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                <?php if ($product['image']): ?>
                    <div style="margin-bottom:8px;">
                        <img src="../uploads/<?= htmlspecialchars($product['image']) ?>" alt="" style="width:80px;height:80px;object-fit:cover;border-radius:6px;border:1px solid var(--gray-200);">
                    </div>
                <?php endif; ?>
                <input type="file" id="image" name="image" accept="image/jpeg,image/png,image/gif,image/webp">
                <small style="color:var(--gray-600);">Leave empty to keep current image.</small>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Product</button>
                <a href="products.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?php showToast() ?>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
