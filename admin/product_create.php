<?php
require_once __DIR__ . '/../includes/auth.php';
requireLogin();
require_once __DIR__ . '/../includes/functions.php';

$pageTitle = 'Add Product';
require_once __DIR__ . '/../includes/header.php';

$pdo = getDB();
$errors = [];
$data = $_POST;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrf($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid security token. Please try again.';
    }

    validateProductInput($data, $errors);
    $imageName = uploadProductImage(null, $errors);

    if (empty($errors)) {
        $stmt = $pdo->prepare('INSERT INTO products (name, description, price, image, category, stock) VALUES (:name, :description, :price, :image, :category, :stock)');
        $stmt->execute([
            ':name'        => $data['name'],
            ':description' => $data['description'],
            ':price'       => $data['price'],
            ':image'       => $imageName,
            ':category'    => $data['category'] ?: null,
            ':stock'       => (int)$data['stock'],
        ]);
        echo '<div class="toast toast-success">Product created successfully!</div>';
        $data = [];
    }
}
?>

<div class="card form-card">
    <div class="card-header">
        <h2><i class="fas fa-plus-circle"></i> New Product</h2>
        <a href="products.php" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">
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
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($data['name'] ?? '') ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4"><?= htmlspecialchars($data['description'] ?? '') ?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price * ($)</label>
                <input type="number" id="price" name="price" step="0.01" min="0" value="<?= htmlspecialchars($data['price'] ?? '') ?>" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category">
                    <option value="">— Select —</option>
                    <?php renderCategoryOptions($pdo, $data['category'] ?? '') ?>
                </select>
            </div>
            <div class="form-group">
                <label for="stock">Stock Quantity *</label>
                <input type="number" id="stock" name="stock" min="0" value="<?= htmlspecialchars($data['stock'] ?? '') ?>" required>
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" id="image" name="image" accept="image/jpeg,image/png,image/gif,image/webp">
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Product</button>
                <a href="products.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?php showToast() ?>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
