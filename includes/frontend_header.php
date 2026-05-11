<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/categories.php';
$pageTitle = $pageTitle ?? 'Synteco Industrial Supply - MRO Products, Equipment and Tools';
$pageDescription = $pageDescription ?? 'Over 1.5 million industrial supplies, MRO products, equipment and tools. Count on Synteco for fast delivery, expert support, and everything you need to get the job done.';
$currentSlug = $currentSlug ?? '';

$isLoggedIn = isCustomerLoggedIn();
$currentCustomer = $isLoggedIn ? getCurrentCustomer() : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' rx='4' fill='%23C8102E'/><text x='16' y='22' font-size='18' font-weight='bold' fill='white' text-anchor='middle'>S</text></svg>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- ===== ANNOUNCEMENT BAR ===== -->
  <div class="announcement-bar">
    <div class="container">
      <span class="announcement-text">New! Check out our improved ordering experience. <a href="about.php">Learn more</a></span>
      <span class="announcement-links">
        <?php if ($isLoggedIn): ?>
        <a href="my-account.php"><i class="fas fa-user"></i> My Account</a>
        <a href="order-history.php"><i class="fas fa-clock"></i> Orders</a>
        <a href="lists.php"><i class="fas fa-list"></i> Lists</a>
        <a href="quotes.php"><i class="fas fa-quote-right"></i> Quotes</a>
        <?php else: ?>
        <a href="login.php"><i class="fas fa-user"></i> Sign In</a>
        <a href="order-status.php"><i class="fas fa-clock"></i> Track Order</a>
        <a href="lists.php"><i class="fas fa-list"></i> Lists</a>
        <a href="quotes.php"><i class="fas fa-quote-right"></i> Quotes</a>
        <?php endif; ?>
      </span>
    </div>
  </div>
  </div>

  <!-- ===== TOP HEADER ===== -->
  <header class="site-header">
    <div class="container header-main">
      <div class="logo">
        <a href="index.php">
          <span class="logo-text">SYNTECO</span>
          <span class="logo-tagline">Industrial Supply</span>
        </a>
      </div>
      <div class="header-actions">
        <div class="order-lookup">
          <i class="fa-regular fa-rectangle-list"></i>
          <span>
            <strong>Track & Check</strong><br>
            <small>Order Status</small>
          </span>
        </div>
        <nav class="header-nav">
          <a href="digital-catalogs.php">Catalog</a>
          <a href="find-branch.php">Find a Branch</a>
          <a href="keepstock.php">KeepStock</a>
          <a href="help.php">Help</a>
          <a href="tel:1-800-SYNTECO" class="phone">1-800-SYNTECO</a>
        </nav>
        <div class="auth-buttons">
          <?php if ($isLoggedIn): ?>
          <div class="user-menu-wrapper">
            <button class="btn btn-outline user-menu-btn" id="userMenuBtn">
              <i class="fas fa-user-circle"></i>
              <span><?php echo htmlspecialchars($currentCustomer['first_name'] ?? $currentCustomer['username']); ?></span>
              <i class="fas fa-chevron-down" style="font-size: 10px; margin-left: 4px;"></i>
            </button>
            <div class="user-dropdown" id="userDropdown">
              <div class="user-dropdown-header">
                <strong><?php 
                  if ($currentCustomer['first_name'] && $currentCustomer['last_name']) {
                    echo htmlspecialchars($currentCustomer['first_name'] . ' ' . $currentCustomer['last_name']);
                  } else {
                    echo htmlspecialchars($currentCustomer['username']);
                  }
                ?></strong>
                <small><?php echo htmlspecialchars($currentCustomer['email']); ?></small>
              </div>
              <a href="my-account.php"><i class="fas fa-home"></i> Dashboard</a>
              <a href="order-history.php"><i class="fas fa-box"></i> Orders</a>
              <a href="my-account.php#addresses"><i class="fas fa-map-marker-alt"></i> Addresses</a>
              <a href="my-account.php#profile"><i class="fas fa-user-edit"></i> Profile</a>
              <div class="user-dropdown-divider"></div>
              <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
            </div>
          </div>
          <?php else: ?>
          <a href="register.php" class="btn btn-outline">Register</a>
          <a href="login.php" class="btn btn-primary">Sign In</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </header>

  <!-- ===== SEARCH BAR ===== -->
  <div class="search-bar">
    <div class="container search-bar-inner">
      <div class="search-wrapper">
        <div class="search-category" id="searchCategory">
          <span>All Products</span>
          <i class="fas fa-chevron-down"></i>
          <div class="category-dropdown" id="categoryDropdown">
            <a href="#" class="active" data-slug="">All Products</a>
            <?php
            $allCats = getAllCategories();
            foreach ($allCats as $slug => $catInfo):
            ?>
            <a href="#" data-slug="<?php echo htmlspecialchars($slug); ?>"><?php echo htmlspecialchars($catInfo['name']); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="search-input-wrapper">
          <input type="text" placeholder="Search Synteco for products, brands, and more..." id="searchInput" autocomplete="off">
          <button class="search-btn" id="searchBtn"><i class="fas fa-search"></i></button>
        </div>
      </div>
      <div class="header-cart">
        <a href="cart.php">
          <div class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-count">0</span>
          </div>
          <div class="cart-text">
            <strong>Cart</strong><br>
            <small>$0.00</small>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- ===== CATEGORIES NAV ===== -->
  <div class="categories-nav-wrapper">
    <div class="categories-nav">
      <div class="container">
        <div class="categories-nav-inner">
          <div class="all-categories-btn" id="allCategoriesBtn">
            <i class="fas fa-bars"></i>
            <span>Shop by Category</span>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="categories-links" id="categoriesLinks">
            <?php
            $topLinks = ['abrasives', 'cleaning', 'electrical', 'fasteners', 'hvac', 'lighting', 'material-handling', 'safety', 'security', 'tools', 'plumbing'];
            foreach ($topLinks as $linkSlug):
              $linkCat = getCategoryInfo($linkSlug);
              if ($linkCat):
            ?>
            <a href="category.php?slug=<?php echo htmlspecialchars($linkSlug); ?>" class="<?php echo $currentSlug === $linkSlug ? 'active' : ''; ?>"><?php echo htmlspecialchars($linkCat['name']); ?></a>
            <?php endif; endforeach; ?>
            <a href="category.php?slug=tools">All Categories <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- ===== MEGA MENU ===== -->
    <div class="mega-menu-overlay" id="megaMenuOverlay"></div>
    <div class="mega-menu" id="megaMenu">
    <div class="mega-menu-inner">
      <?php
      $megaGroups = [
        'Industrial Supplies' => ['abrasives', 'adhesives', 'cleaning', 'electrical', 'electronics', 'fasteners', 'fleet', 'furnishings'],
        'HVAC & Plumbing' => ['hvac', 'hardware', 'hydraulics', 'lab', 'lighting', 'lubrication', 'machining', 'material-handling'],
        'Tools & Equipment' => ['motors', 'office', 'outdoor', 'packaging', 'paints', 'pipe', 'plumbing', 'pneumatics'],
      ];
      foreach ($megaGroups as $groupName => $slugs):
      ?>
      <div class="mega-menu-col">
        <h3><?php echo htmlspecialchars($groupName); ?></h3>
        <?php foreach ($slugs as $mslug): $mcat = getCategoryInfo($mslug); if ($mcat): ?>
        <a href="category.php?slug=<?php echo htmlspecialchars($mslug); ?>"><?php echo htmlspecialchars($mcat['name']); ?></a>
        <?php endif; endforeach; ?>
      </div>
      <?php endforeach; ?>
      <div class="mega-menu-col mega-menu-col-wide">
        <h3>Safety <span style="color:var(--red);font-weight:400;">&amp;</span> Security</h3>
        <div class="mega-sub-grid">
          <?php
          $safetyCats = getCategoryInfo('safety');
          $securityCats = getCategoryInfo('security');
          if ($safetyCats):
          ?>
          <div class="mega-sub-col">
            <strong>Safety</strong>
            <a href="category.php?slug=safety">All Safety</a>
            <?php foreach (array_slice($safetyCats['sub'], 0, 11) as $ssub): ?>
            <a href="category.php?slug=safety&sub=<?php echo htmlspecialchars($ssub); ?>"><?php echo htmlspecialchars($ssub); ?></a>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
          <?php if ($securityCats): ?>
          <div class="mega-sub-col">
            <strong>Security</strong>
            <a href="category.php?slug=security">All Security</a>
            <?php foreach (array_slice($securityCats['sub'], 0, 8) as $ssub): ?>
            <a href="category.php?slug=security&sub=<?php echo htmlspecialchars($ssub); ?>"><?php echo htmlspecialchars($ssub); ?></a>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  </div>
