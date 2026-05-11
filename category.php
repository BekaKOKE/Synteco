<?php
require_once __DIR__ . '/includes/categories.php';
require_once __DIR__ . '/config/database.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : 'tools';
$catInfo = getCategoryInfo($slug);

if (!$catInfo) {
    $catInfo = getCategoryInfo('tools');
    $slug = 'tools';
}

$savedCatName = $catInfo['name'];
$savedCatSubs = $catInfo['sub'];
$savedSlug = $slug;

$subcategory = isset($_GET['sub']) ? $_GET['sub'] : null;
$page = max(1, (int)($_GET['page'] ?? 1));
$limit = 20;
$offset = ($page - 1) * $limit;
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'newest';

$priceFilter = isset($_GET['price']) ? $_GET['price'] : '';
$brandFilter = isset($_GET['brand']) ? $_GET['brand'] : '';
$inStockOnly = isset($_GET['in_stock']) && $_GET['in_stock'] === '1';

$products = [];
$totalProducts = 0;
$totalPages = 1;
$availableBrands = [];

$pdo = getDB();

if ($subcategory) {
    $categoriesToQuery = [$subcategory];
} else {
    $categoriesToQuery = [$savedCatName];
    if (!empty($savedCatSubs)) {
        $categoriesToQuery = array_merge($categoriesToQuery, $savedCatSubs);
    }
}

// Build catList - quote each category properly
$catList = "";
if (!empty($categoriesToQuery)) {
    $quoted = [];
    foreach ($categoriesToQuery as $cat) {
        $quoted[] = "'" . $cat . "'";
    }
    $catList = implode(',', $quoted);
}

// Get brands - disabled since column doesn't exist
$availableBrands = [];

// Build filter SQL
$filterSql = "";
if ($priceFilter) {
    if ($priceFilter === '0-25') $filterSql .= " AND price < 25";
    elseif ($priceFilter === '25-50') $filterSql .= " AND price >= 25 AND price < 50";
    elseif ($priceFilter === '50-100') $filterSql .= " AND price >= 50 AND price < 100";
    elseif ($priceFilter === '100-250') $filterSql .= " AND price >= 100 AND price < 250";
    elseif ($priceFilter === '250+') $filterSql .= " AND price >= 250";
}

if ($brandFilter) {
    $filterSql .= " AND brand = '" . $brandFilter . "'";
}

if ($inStockOnly) {
    $filterSql .= " AND stock > 0";
}

// Get total count
if ($catList) {
    $countSql = "SELECT COUNT(*) FROM products WHERE category IN ($catList)" . $filterSql;
    $totalProducts = (int)$pdo->query($countSql)->fetchColumn();
    $totalPages = max(1, (int)ceil($totalProducts / $limit));
}

// Order by
switch ($sort) {
    case 'relevance':
    case 'newest': $orderBy = 'created_at DESC'; break;
    case 'price-asc': $orderBy = 'price ASC'; break;
    case 'price-desc': $orderBy = 'price DESC'; break;
    case 'name-asc': $orderBy = 'name ASC'; break;
    case 'name-desc': $orderBy = 'name DESC'; break;
    default: $orderBy = 'created_at DESC';
}

// Get products
if ($catList && $totalProducts > 0) {
    $sql = "SELECT * FROM products WHERE category IN ($catList)" . $filterSql . " ORDER BY $orderBy LIMIT $limit OFFSET $offset";
    $products = $pdo->query($sql)->fetchAll();
}

$pageTitle = ($subcategory ? $subcategory . ' - ' : '') . $savedCatName . ' - Synteco Industrial Supply';
$pageDescription = 'Browse our selection of ' . strtolower($savedCatName) . ' products and supplies at Synteco.';
$currentSlug = $savedSlug;

require_once __DIR__ . '/includes/frontend_header.php';
?>

  <div class="category-hero">
    <div class="container">
      <div class="breadcrumb">
        <a href="index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <?php if ($subcategory): ?>
        <a href="category.php?slug=<?php echo htmlspecialchars($savedSlug); ?>"><?php echo htmlspecialchars($savedCatName); ?></a>
        <i class="fas fa-chevron-right"></i>
        <span><?php echo htmlspecialchars($subcategory); ?></span>
        <?php else: ?>
        <span><?php echo htmlspecialchars($savedCatName); ?></span>
        <?php endif; ?>
      </div>
      <h1><?php echo htmlspecialchars($subcategory ? $subcategory : $savedCatName); ?></h1>
      <p>Browse our selection of <?php echo htmlspecialchars(strtolower($savedCatName)); ?> products and supplies.</p>
    </div>
  </div>

  <div class="category-body">
    <div class="container">
      <div class="category-layout">

        <aside class="subcategory-sidebar">
          <h3><i class="fas fa-list"></i> <?php echo htmlspecialchars($savedCatName); ?></h3>
          <a href="category.php?slug=<?php echo htmlspecialchars($savedSlug); ?>" class="<?php echo !$subcategory ? 'active' : ''; ?>">
            All <?php echo htmlspecialchars($savedCatName); ?>
          </a>
          <?php foreach ($savedCatSubs as $sub): ?>
          <a href="category.php?slug=<?php echo htmlspecialchars($savedSlug); ?>&sub=<?php echo htmlspecialchars($sub); ?>" class="<?php echo $subcategory === $sub ? 'active' : ''; ?>">
            <?php echo htmlspecialchars($sub); ?>
          </a>
          <?php endforeach; ?>

          <div class="filters-section">
            <h4><i class="fas fa-filter"></i> Filters</h4>
            <div class="filter-group">
              <select id="priceFilter">
                <option value="">Any Price</option>
                <option value="0-25" <?php echo $priceFilter === '0-25' ? 'selected' : ''; ?>>Under $25</option>
                <option value="25-50" <?php echo $priceFilter === '25-50' ? 'selected' : ''; ?>>$25 - $50</option>
                <option value="50-100" <?php echo $priceFilter === '50-100' ? 'selected' : ''; ?>>$50 - $100</option>
                <option value="100-250" <?php echo $priceFilter === '100-250' ? 'selected' : ''; ?>>$100 - $250</option>
                <option value="250+" <?php echo $priceFilter === '250+' ? 'selected' : ''; ?>>$250 & Above</option>
              </select>
            </div>
            <?php if (!empty($availableBrands)): ?>
            <div class="filter-group">
              <select id="brandFilter">
                <option value="">Any Brand</option>
                <?php foreach ($availableBrands as $brand): ?>
                <option value="<?php echo htmlspecialchars($brand); ?>" <?php echo $brandFilter === $brand ? 'selected' : ''; ?>><?php echo htmlspecialchars($brand); ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <?php endif; ?>
            <label class="filter-checkbox">
              <input type="checkbox" id="inStockFilter" <?php echo $inStockOnly ? 'checked' : ''; ?>>
              <span>In Stock Only</span>
            </label>
            <?php if ($priceFilter || $brandFilter || $inStockOnly): ?>
            <a href="category.php?slug=<?php echo htmlspecialchars($savedSlug); ?>" class="clear-filters">
              <i class="fas fa-times"></i> Clear Filters
            </a>
            <?php endif; ?>
          </div>
        </aside>

        <div class="category-content">
          <div class="category-toolbar">
            <h2><?php echo ($subcategory ? htmlspecialchars($subcategory) : 'All ' . htmlspecialchars($savedCatName)); ?> <span class="result-count">(<?php echo $totalProducts; ?> products)</span></h2>
            <div class="sort-bar">
              <label for="sortSelect">Sort by:</label>
              <select id="sortSelect" onchange="var url = new URL(window.location.href); url.searchParams.set('sort', this.value); window.location.href = url.toString();">
                <option value="relevance" <?php echo $sort === 'relevance' ? 'selected' : ''; ?>>Relevance</option>
                <option value="price-asc" <?php echo $sort === 'price-asc' ? 'selected' : ''; ?>>Price: Low to High</option>
                <option value="price-desc" <?php echo $sort === 'price-desc' ? 'selected' : ''; ?>>Price: High to Low</option>
                <option value="name-asc" <?php echo $sort === 'name-asc' ? 'selected' : ''; ?>>Name: A-Z</option>
                <option value="name-desc" <?php echo $sort === 'name-desc' ? 'selected' : ''; ?>>Name: Z-A</option>
                <option value="newest" <?php echo $sort === 'newest' ? 'selected' : ''; ?>>Newest First</option>
              </select>
              <div class="view-toggle">
                <button class="view-btn active" data-view="grid" title="Grid View"><i class="fas fa-th"></i></button>
                <button class="view-btn" data-view="list" title="List View"><i class="fas fa-list"></i></button>
              </div>
            </div>
          </div>

          <?php if ($totalProducts === 0): ?>
          <div class="empty-state">
            <i class="fas fa-box-open"></i>
            <p>No products listed in this category yet.</p>
            <p style="margin-top:8px;font-size:14px;color:var(--gray-500);">Check back soon.</p>
            <a href="index.php" class="btn-back"><i class="fas fa-arrow-left"></i> Back to Home</a>
          </div>
          <?php else: ?>
          <div class="cat-product-grid" id="productGrid">
            <?php foreach ($products as $prod): ?>
            <div class="cat-product-card" data-price="<?php echo $prod['price']; ?>" data-name="<?php echo htmlspecialchars($prod['name']); ?>" data-date="<?php echo $prod['created_at']; ?>">
              <a href="#" class="prod-image-link" onclick="showProductModal(<?php echo $prod['id']; ?>); return false;">
                <div class="prod-image">
                  <?php if ($prod['image']): ?>
                  <img src="uploads/<?php echo htmlspecialchars($prod['image']); ?>" alt="<?php echo htmlspecialchars($prod['name']); ?>" loading="lazy">
                  <?php else: ?>
                  <i class="fas <?php echo getCategoryIcon($prod['category'] ?? $savedCatName); ?>"></i>
                  <?php endif; ?>
                </div>
              </a>
              <div class="prod-info">
                <a href="#" class="prod-name" onclick="showProductModal(<?php echo $prod['id']; ?>); return false;"><?php echo htmlspecialchars($prod['name']); ?></a>
                <div class="prod-category"><?php echo htmlspecialchars($prod['category'] ?: $savedCatName); ?></div>
                <div class="prod-price">$<?php echo number_format($prod['price'], 2); ?></div>
                <div class="prod-stock">
                  <?php if ($prod['stock'] > 0): ?>
                  <i class="fas fa-check-circle" style="color:#2e7d32;"></i> <span style="color:#2e7d32;font-weight:600;">In Stock</span>
                  <?php else: ?>
                  <i class="fas fa-times-circle" style="color:#c62828;"></i> <span style="color:#c62828;font-weight:600;">Out of Stock</span>
                  <?php endif; ?>
                </div>
                <button class="btn-add" onclick="addToCart(this, '<?php echo str_replace("'", "\'", $prod['name']); ?>', <?php echo $prod['price']; ?>, <?php echo $prod['id']; ?>)">
                  <i class="fas fa-cart-plus"></i> Add to Cart
                </button>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <?php if ($totalPages > 1): ?>
          <div class="pagination-container">
            <div class="pagination">
              <?php if ($page > 1): ?>
              <a href="?slug=<?php echo htmlspecialchars($savedSlug); ?>&sub=<?php echo htmlspecialchars($subcategory ?? ''); ?>&sort=<?php echo htmlspecialchars($sort); ?>&page=<?php echo $page - 1; ?>" class="page-link">&laquo; Previous</a>
              <?php endif; ?>
              <?php
              $startPage = max(1, $page - 2);
              $endPage = min($totalPages, $page + 2);
              for ($i = $startPage; $i <= $endPage; $i++):
              ?>
              <a href="?slug=<?php echo htmlspecialchars($savedSlug); ?>&sub=<?php echo htmlspecialchars($subcategory ?? ''); ?>&sort=<?php echo htmlspecialchars($sort); ?>&page=<?php echo $i; ?>" class="page-link <?php echo $i === $page ? 'active' : ''; ?>"><?php echo $i; ?></a>
              <?php endfor; ?>
              <?php if ($page < $totalPages): ?>
              <a href="?slug=<?php echo htmlspecialchars($savedSlug); ?>&sub=<?php echo htmlspecialchars($subcategory ?? ''); ?>&sort=<?php echo htmlspecialchars($sort); ?>&page=<?php echo $page + 1; ?>" class="page-link">Next &raquo;</a>
              <?php endif; ?>
            </div>
            <div class="page-info">Page <?php echo $page; ?> of <?php echo $totalPages; ?></div>
          </div>
          <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="modal-overlay" id="productModal">
    <div class="modal-box modal-box-lg" id="productModalContent">
      <button class="modal-close-btn" onclick="closeProductModal()">&times;</button>
      <div id="productModalBody">
        <div class="modal-loading"><i class="fas fa-spinner fa-spin"></i> Loading product details...</div>
      </div>
    </div>
  </div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>