<?php
require_once __DIR__ . '/includes/categories.php';
require_once __DIR__ . '/config/database.php';

$query = trim($_GET['q'] ?? '');
$categoryFilter = trim($_GET['cat'] ?? '');
$page = max(1, (int)($_GET['page'] ?? 1));
$limit = 24;
$offset = ($page - 1) * $limit;

$results = [];
$totalResults = 0;
$totalPages = 1;

if ($query !== '') {
    try {
        $pdo = getDB();

        $where = 'WHERE (name LIKE :q1 OR description LIKE :q2 OR category LIKE :q3 OR sku LIKE :q4)';
        $params = [
            ':q1' => '%' . $query . '%',
            ':q2' => '%' . $query . '%',
            ':q3' => '%' . $query . '%',
            ':q4' => '%' . $query . '%',
        ];

        if ($categoryFilter !== '') {
            $where .= ' AND category = :cat';
            $params[':cat'] = $categoryFilter;
        }

        $countStmt = $pdo->prepare("SELECT COUNT(*) FROM products {$where}");
        $countStmt->execute($params);
        $totalResults = (int)$countStmt->fetchColumn();
        $totalPages = max(1, (int)ceil($totalResults / $limit));

        $stmt = $pdo->prepare("SELECT * FROM products {$where} ORDER BY 
            CASE WHEN name LIKE :exact THEN 0 ELSE 1 END,
            created_at DESC 
            LIMIT {$limit} OFFSET {$offset}");
        $params[':exact'] = $query;
        $stmt->execute($params);
        $results = $stmt->fetchAll();

        // Get distinct categories for filter
        $catStmt = $pdo->query("SELECT DISTINCT category FROM products WHERE category IS NOT NULL AND category != '' ORDER BY category");
        $allCategories = $catStmt->fetchAll(PDO::FETCH_COLUMN);
    } catch (Exception $e) {
        $results = [];
        $allCategories = [];
    }
} else {
    $allCategories = [];
}

$pageTitle = $query ? "Search: {$query} - Synteco Industrial Supply" : 'Search - Synteco Industrial Supply';
$pageDescription = $query ? "Search results for \"{$query}\" at Synteco Industrial Supply." : 'Search our catalog of over 1.5 million industrial products.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

  <div class="category-hero" style="padding:32px 0;">
    <div class="container">
      <div class="breadcrumb">
        <a href="index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <span>Search<?php echo $query ? ': ' . htmlspecialchars($query) : ''; ?></span>
      </div>
      <h1><?php echo $query ? 'Results for "' . htmlspecialchars($query) . '"' : 'Search Products'; ?></h1>
      <p><?php echo $query ? "{$totalResults} product" . ($totalResults !== 1 ? 's' : '') . ' found' : 'Find the industrial supplies you need'; ?></p>
    </div>
  </div>

  <div class="category-body">
    <div class="container">
      <div class="category-layout">

        <!-- ===== FILTER SIDEBAR ===== -->
        <aside class="subcategory-sidebar">
          <h3><i class="fas fa-filter"></i> Filters</h3>
          <a href="search.php?q=<?php echo htmlspecialchars($query); ?>" class="<?php echo $categoryFilter === '' ? 'active' : ''; ?>">All Categories</a>
          <?php if (!empty($allCategories)): ?>
            <?php foreach ($allCategories as $cat): ?>
            <a href="search.php?q=<?php echo htmlspecialchars($query); ?>&cat=<?php echo htmlspecialchars($cat); ?>" class="<?php echo $categoryFilter === $cat ? 'active' : ''; ?>">
              <?php echo htmlspecialchars($cat); ?>
            </a>
            <?php endforeach; ?>
          <?php endif; ?>
        </aside>

        <!-- ===== RESULTS ===== -->
        <div class="category-content">
          <div class="category-toolbar">
            <h2><?php echo $query ? 'Search Results' : 'All Products'; ?> <span class="result-count">(<?php echo $totalResults; ?>)</span></h2>
          </div>

          <?php if ($query === ''): ?>
          <div class="empty-state">
            <i class="fas fa-search"></i>
            <p>Enter a search term to find products.</p>
            <p style="margin-top:8px;font-size:14px;color:var(--gray-500);">Search by product name, SKU, brand, or category.</p>
            <a href="category.php?slug=tools" class="btn-back"><i class="fas fa-arrow-left"></i> Browse Categories</a>
          </div>

          <?php elseif ($totalResults === 0): ?>
          <div class="empty-state">
            <i class="fas fa-search-minus"></i>
            <p>No products found for "<?php echo htmlspecialchars($query); ?>"</p>
            <p style="margin-top:8px;font-size:14px;color:var(--gray-500);">Try different keywords, check spelling, or browse by category.</p>
            <div style="margin-top:20px;display:flex;gap:10px;justify-content:center;">
              <a href="search.php" class="btn-back"><i class="fas fa-search"></i> New Search</a>
              <a href="category.php?slug=tools" class="btn-back" style="background:var(--gray-600);">Browse Categories</a>
            </div>
          </div>

          <?php else: ?>
          <div class="cat-product-grid" id="productGrid">
            <?php foreach ($results as $prod): ?>
            <div class="cat-product-card" data-id="<?php echo $prod['id']; ?>">
               <a href="#" class="prod-image-link" onclick="showProductModal(<?php echo $prod['id']; ?>); return false;">
                 <div class="prod-image">
                   <?php if ($prod['image']): ?>
                   <img src="uploads/<?php echo htmlspecialchars($prod['image']); ?>" alt="<?php echo htmlspecialchars($prod['name']); ?>" loading="lazy">
                   <?php else: ?>
                   <i class="fas <?php echo getCategoryIcon($prod['category'] ?? ''); ?>"></i>
                   <?php endif; ?>
                 </div>
               </a>
              <div class="prod-info">
                <a href="#" class="prod-name" onclick="showProductModal(<?php echo $prod['id']; ?>); return false;"><?php echo htmlspecialchars($prod['name']); ?></a>
                <div class="prod-category"><?php echo htmlspecialchars($prod['category'] ?? ''); ?></div>
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

          <!-- PAGINATION -->
          <?php if ($totalPages > 1): ?>
          <div class="pagination-container">
            <div class="pagination">
              <?php if ($page > 1): ?>
              <a href="?q=<?php echo htmlspecialchars($query); ?>&cat=<?php echo htmlspecialchars($categoryFilter); ?>&page=<?php echo $page - 1; ?>" class="page-link">&laquo; Previous</a>
              <?php endif; ?>
              <?php
              $startPage = max(1, $page - 2);
              $endPage = min($totalPages, $page + 2);
              for ($i = $startPage; $i <= $endPage; $i++):
              ?>
              <a href="?q=<?php echo htmlspecialchars($query); ?>&cat=<?php echo htmlspecialchars($categoryFilter); ?>&page=<?php echo $i; ?>" class="page-link <?php echo $i === $page ? 'active' : ''; ?>"><?php echo $i; ?></a>
              <?php endfor; ?>
              <?php if ($page < $totalPages): ?>
              <a href="?q=<?php echo htmlspecialchars($query); ?>&cat=<?php echo htmlspecialchars($categoryFilter); ?>&page=<?php echo $page + 1; ?>" class="page-link">Next &raquo;</a>
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

  <!-- ===== PRODUCT QUICK VIEW MODAL ===== -->
  <div class="modal-overlay" id="productModal">
    <div class="modal-box modal-box-lg" id="productModalContent">
      <button class="modal-close-btn" onclick="closeProductModal()">&times;</button>
      <div id="productModalBody">
        <div class="modal-loading"><i class="fas fa-spinner fa-spin"></i> Loading product details...</div>
      </div>
    </div>
  </div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
