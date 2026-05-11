<?php
require_once __DIR__ . '/../includes/auth.php';
requireLogin();

$pageTitle = 'Seed Database';
require_once __DIR__ . '/../includes/header.php';

$pdo = getDB();
$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['seed'])) {
    try {
        $sql = file_get_contents(__DIR__ . '/../config/database_schema.sql');
        $pdo->exec('USE synteco_db');
        // Execute schema (ignore errors for IF NOT EXISTS)
        $statements = explode(';', $sql);
        foreach ($statements as $stmt) {
            $stmt = trim($stmt);
            if ($stmt) {
                try { $pdo->exec($stmt); } catch (Exception $e) {}
            }
        }

        // Seed categories
        $seedSql = file_get_contents(__DIR__ . '/../config/seed_categories.sql');
        $statements = explode(';', $seedSql);
        foreach ($statements as $stmt) {
            $stmt = trim($stmt);
            if ($stmt) {
                try { $pdo->exec($stmt); } catch (Exception $e) { $error .= $e->getMessage() . "\n"; }
            }
        }

        $message = 'Database seeded successfully! Categories created with nested set model.';
    } catch (Exception $e) {
        $error = 'Seed failed: ' . $e->getMessage();
    }
}

// Count categories
$catCount = 0;
try { $catCount = $pdo->query('SELECT COUNT(*) FROM categories')->fetchColumn(); } catch (Exception $e) {}
$rootCatCount = 0;
try { $rootCatCount = $pdo->query('SELECT COUNT(*) FROM categories WHERE level = 0')->fetchColumn(); } catch (Exception $e) {}
$subCatCount = 0;
try { $subCatCount = $pdo->query('SELECT COUNT(*) FROM categories WHERE level > 0')->fetchColumn(); } catch (Exception $e) {}
?>

<div class="card" style="max-width:700px;">
    <div class="card-header">
        <h2><i class="fas fa-database"></i> Database Seeder</h2>
    </div>
    <div class="card-body">
        <?php if ($message): ?>
            <div class="alert" style="background:#e8f5e9;color:#2e7d32;border:1px solid #c8e6c9;">
                <i class="fas fa-check-circle"></i> <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i> <?= nl2br(htmlspecialchars($error)) ?>
            </div>
        <?php endif; ?>

        <h3 style="margin-bottom:12px;">Current Database Status</h3>
        <table class="table" style="margin-bottom:20px;">
            <tr>
                <td><strong>Root Categories</strong></td>
                <td><?= $rootCatCount ?></td>
            </tr>
            <tr>
                <td><strong>Subcategories</strong></td>
                <td><?= $subCatCount ?></td>
            </tr>
            <tr>
                <td><strong>Total Categories</strong></td>
                <td><strong><?= $catCount ?></strong></td>
            </tr>
            <tr>
                <td><strong>Products (old table)</strong></td>
                <td><?= $pdo->query('SELECT COUNT(*) FROM products')->fetchColumn() ?></td>
            </tr>
        </table>

        <div style="background:var(--gray-50);padding:16px;border-radius:8px;margin-bottom:20px;">
            <strong style="color:var(--red);">⚠️ Warning:</strong>
            <p style="margin-top:4px;color:var(--gray-600);font-size:13px;">Running the seed will clear all existing categories and re-insert them. This is safe for development but will reset any manual category changes.</p>
        </div>

        <form method="post">
            <button type="submit" name="seed" value="1" class="btn btn-primary" onclick="return confirm('This will reset all categories. Continue?')">
                <i class="fas fa-seedling"></i> Seed Database
            </button>
            <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
        </form>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
