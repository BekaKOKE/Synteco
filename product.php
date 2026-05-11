<?php
require_once __DIR__ . '/includes/categories.php';
require_once __DIR__ . '/config/database.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = null;
$relatedProducts = [];

if ($id > 0) {
    try {
        $pdo = getDB();
        $stmt = $pdo->prepare('SELECT * FROM products WHERE id = :id LIMIT 1');
        $stmt->execute([':id' => $id]);
        $product = $stmt->fetch();
    } catch (Exception $e) {}
}

if (!$product) {
    header('Location: index.php');
    exit;
}

// Get related products (same category)
try {
    $stmt = $pdo->prepare('SELECT * FROM products WHERE category = :cat AND id != :id ORDER BY created_at DESC LIMIT 4');
    $stmt->execute([':cat' => $product['category'], ':id' => $product['id']]);
    $relatedProducts = $stmt->fetchAll();
} catch (Exception $e) {}

$pageTitle = htmlspecialchars($product['name']) . ' - Synteco Industrial Supply';
$pageDescription = htmlspecialchars(mb_substr($product['description'] ?: $product['name'], 0, 200));
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

  <!-- ===== BREADCRUMB ===== -->
  <div class="category-hero" style="padding:24px 0;">
    <div class="container">
      <div class="breadcrumb">
        <a href="index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <?php if ($product['category']): $catSlug = getCategorySlugByName($product['category']); ?>
        <a href="category.php?slug=<?php echo htmlspecialchars($catSlug ?: 'tools'); ?>"><?php echo htmlspecialchars($product['category']); ?></a>
        <i class="fas fa-chevron-right"></i>
        <?php endif; ?>
        <span><?php echo htmlspecialchars($product['name']); ?></span>
      </div>
    </div>
  </div>

  <!-- ===== PRODUCT DETAIL ===== -->
  <div class="category-body">
    <div class="container">
      <div class="product-detail-layout">

        <!-- ===== IMAGE GALLERY ===== -->
        <div class="product-gallery">
          <div class="product-main-image">
            <?php if ($product['image']): ?>
            <img src="uploads/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" id="mainProductImage">
            <?php else: ?>
            <div class="product-no-image">
              <i class="fas fa-box"></i>
            </div>
            <?php endif; ?>
          </div>
        </div>

        <!-- ===== PRODUCT INFO ===== -->
        <div class="product-info-panel">
          <h1 class="product-title"><?php echo htmlspecialchars($product['name']); ?></h1>

          <div class="product-meta">
            <span class="product-category-label"><?php echo htmlspecialchars($product['category'] ?? 'Uncategorized'); ?></span>
            <?php if ($product['sku'] ?? null): ?>
            <span class="product-sku">Item #: <?php echo htmlspecialchars($product['sku']); ?></span>
            <?php endif; ?>
          </div>

          <div class="product-price-section">
            <div class="product-current-price">$<?php echo number_format($product['price'], 2); ?></div>
            <?php if ($product['stock'] > 0): ?>
            <div class="product-stock-status in-stock">
              <i class="fas fa-check-circle"></i> In Stock
            </div>
            <?php else: ?>
            <div class="product-stock-status out-of-stock">
              <i class="fas fa-times-circle"></i> Out of Stock
            </div>
            <?php endif; ?>
          </div>

          <?php if ($product['description']): ?>
          <div class="product-description">
            <h3>Description</h3>
            <p><?php echo nl2br(htmlspecialchars($product['description'])); ?></p>
          </div>
          <?php endif; ?>

          <!-- ===== ACTIONS ===== -->
          <div class="product-actions">
            <div class="quantity-selector">
              <label for="qty">Qty:</label>
              <button type="button" class="qty-btn" onclick="adjustQty(-1)">-</button>
              <input type="number" id="qty" value="1" min="1" max="999">
              <button type="button" class="qty-btn" onclick="adjustQty(1)">+</button>
            </div>
            <button class="btn btn-primary btn-lg btn-block" onclick="addToCartFromProduct(this, <?php echo $product['id']; ?>, '<?php echo str_replace("'", "\'", $product['name']); ?>', <?php echo $product['price']; ?>)" style="width:100%;justify-content:center;">
              <i class="fas fa-cart-plus"></i> Add to Cart
            </button>
            <div style="display:flex;gap:10px;">
              <button class="btn btn-outline btn-lg" onclick="addToList(<?php echo $product['id']; ?>)" style="flex:1;justify-content:center;">
                <i class="fas fa-list"></i> Add to List
              </button>
              <button class="btn btn-outline btn-lg" onclick="window.location.href='quotes.php?product=<?php echo $product['id']; ?>'" style="flex:1;justify-content:center;">
                <i class="fas fa-file-invoice"></i> Quote
              </button>
            </div>
          </div>

          <!-- ===== STOCK INFO ===== -->
          <div class="product-stock-info">
            <h3>Availability</h3>
            <div class="stock-row">
              <span class="stock-label">Main Distribution Center:</span>
              <span class="stock-value"><?php echo $product['stock'] > 0 ? $product['stock'] . ' in stock' : 'Out of stock'; ?></span>
            </div>
          </div>
        </div>

      </div>

      <!-- ===== RELATED PRODUCTS ===== -->
      <?php if (!empty($relatedProducts)): ?>
      <div class="related-products-section" style="margin-top:48px;">
        <div class="section-header">
          <h2>Related Products</h2>
          <?php if ($product['category']): $catSlug = getCategorySlugByName($product['category']); ?>
          <a href="category.php?slug=<?php echo htmlspecialchars($catSlug ?: 'tools'); ?>">View All <i class="fas fa-arrow-right"></i></a>
          <?php endif; ?>
        </div>
        <div class="cat-product-grid" style="grid-template-columns:repeat(4, 1fr);">
          <?php foreach ($relatedProducts as $rel): ?>
          <div class="cat-product-card" data-id="<?php echo $rel['id']; ?>">
            <a href="product.php?id=<?php echo $rel['id']; ?>" class="prod-image-link">
              <div class="prod-image">
                <?php if ($rel['image']): ?>
                <img src="uploads/<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['name']); ?>" loading="lazy">
                <?php else: ?>
                <i class="fas fa-box"></i>
                <?php endif; ?>
              </div>
            </a>
            <div class="prod-info">
              <a href="product.php?id=<?php echo $rel['id']; ?>" class="prod-name"><?php echo htmlspecialchars($rel['name']); ?></a>
              <div class="prod-price">$<?php echo number_format($rel['price'], 2); ?></div>
              <button class="btn-add" onclick="addToCart(this, '<?php echo str_replace("'", "\'", $rel['name']); ?>', <?php echo $rel['price']; ?>, <?php echo $rel['id']; ?>)">
                <i class="fas fa-cart-plus"></i> Add to Cart
              </button>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
