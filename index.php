<?php
$pageTitle = 'Synteco Industrial Supply - MRO Products, Equipment and Tools';
$pageDescription = 'Over 1.5 million industrial supplies, MRO products, equipment and tools. Count on Synteco for fast delivery, expert support, and everything you need to get the job done.';
require_once __DIR__ . '/includes/frontend_header.php';
?>

  <!-- ===== HERO BANNER ===== -->
  <section class="hero">
    <div class="container hero-inner">
      <div class="hero-content">
        <h1>Supplies & Solutions for Every Industry<sup>&reg;</sup></h1>
        <p>Over 1.5 million products to keep your operation running. Count on Synteco for fast delivery, expert support, and everything you need to get the job done.</p>
        <div class="hero-cta">
          <a href="category.php?slug=tools" class="btn btn-primary btn-lg">Shop All Products</a>
          <a href="digital-catalogs.php" class="btn btn-outline-light btn-lg">View Digital Catalogs</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== VALUE PROPOSITIONS ===== -->
  <section class="value-props">
    <div class="container">
      <div class="value-grid">
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-boxes-stacked"></i></div>
          <h3>Over 1.5 Million Products</h3>
          <p>Count on Synteco for a broad range of quality products for almost every job in almost every industry.</p>
          <a href="category.php?slug=tools">Shop all categories <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-truck-fast"></i></div>
          <h3>Next-Day Delivery on Most Orders</h3>
          <p>Our nationwide network of distribution centers puts the products you need nearby, when you need them.</p>
          <a href="shipping.php">Learn about shipping <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-headset"></i></div>
          <h3>Tap Into Our Trusted Support</h3>
          <p>Board-certified safety professionals, technical product specialists and 24/7 customer service are ready to help.</p>
          <a href="contact.php">Contact us <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FEATURED CATEGORIES ===== -->
  <section class="featured-categories" id="featuredCategories">
    <div class="container">
      <div class="section-header">
        <h2>Shop by Category</h2>
        <a href="category.php?slug=tools">View All Categories <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="category-grid" id="categoryGrid">
        <?php
        $featuredCats = [
          'tools' => ['gradient' => 'linear-gradient(135deg, #2c3e50, #3498db)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><rect x="60" y="20" width="30" height="80" rx="4" fill="#95a5a6"/><rect x="110" y="20" width="30" height="80" rx="4" fill="#95a5a6"/><rect x="55" y="95" width="90" height="14" rx="3" fill="#7f8c8d"/><circle cx="100" cy="60" r="18" fill="#bdc3c7"/><rect x="88" y="42" width="24" height="36" rx="2" fill="#e74c3c"/></svg>'],
          'electrical' => ['gradient' => 'linear-gradient(135deg, #1a1a2e, #e94560)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><rect x="70" y="10" width="60" height="80" rx="6" fill="#f39c12"/><rect x="80" y="20" width="40" height="25" rx="3" fill="#2c3e50"/><circle cx="100" cy="60" r="10" fill="#e74c3c"/><rect x="95" y="70" width="10" height="30" fill="#7f8c8d"/><rect x="70" y="100" width="60" height="30" rx="4" fill="#34495e"/><rect x="85" y="95" width="30" height="6" fill="#f1c40f"/></svg>'],
          'safety' => ['gradient' => 'linear-gradient(135deg, #e74c3c, #f39c12)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><path d="M100 10 L170 50 L170 90 Q170 130 100 140 Q30 130 30 90 L30 50 Z" fill="#f1c40f" opacity="0.9"/><path d="M100 20 L155 50 L155 85 Q155 120 100 130 Q45 120 45 85 L45 50 Z" fill="#e67e22" opacity="0.3"/><circle cx="100" cy="75" r="20" fill="#2c3e50"/><circle cx="100" cy="75" r="14" fill="#ecf0f1"/></svg>'],
          'hvac' => ['gradient' => 'linear-gradient(135deg, #2980b9, #1abc9c)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><rect x="50" y="25" width="100" height="70" rx="8" fill="#ecf0f1"/><rect x="60" y="35" width="80" height="20" rx="4" fill="#bdc3c7"/><circle cx="100" cy="65" r="14" fill="#3498db"/><rect x="85" y="55" width="30" height="20" rx="2" fill="#2980b9"/><rect x="80" y="95" width="40" height="30" rx="4" fill="#7f8c8d"/><rect x="60" y="115" width="80" height="8" rx="2" fill="#95a5a6"/></svg>'],
          'lighting' => ['gradient' => 'linear-gradient(135deg, #f39c12, #e67e22)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><path d="M100 10 Q130 40 130 70 Q130 95 115 105 L85 105 Q70 95 70 70 Q70 40 100 10Z" fill="#f1c40f"/><rect x="88" y="105" width="24" height="20" rx="3" fill="#7f8c8d"/><rect x="82" y="120" width="36" height="6" rx="2" fill="#95a5a6"/><line x1="70" y1="55" x2="40" y2="45" stroke="#f1c40f" stroke-width="3" opacity="0.6"/><line x1="130" y1="55" x2="160" y2="45" stroke="#f1c40f" stroke-width="3" opacity="0.6"/></svg>'],
          'lubrication' => ['gradient' => 'linear-gradient(135deg, #2c3e50, #7f8c8d)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><rect x="65" y="15" width="70" height="50" rx="10" fill="#e74c3c"/><rect x="75" y="25" width="50" height="30" rx="5" fill="#c0392b"/><rect x="80" y="55" width="40" height="12" rx="2" fill="#7f8c8d"/><rect x="70" y="65" width="60" height="45" rx="6" fill="#95a5a6"/><rect x="60" y="100" width="80" height="15" rx="3" fill="#34495e"/><circle cx="100" cy="42" r="6" fill="#f1c40f"/></svg>'],
          'material-handling' => ['gradient' => 'linear-gradient(135deg, #e67e22, #d35400)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><rect x="40" y="60" width="120" height="40" rx="5" fill="#f39c12"/><rect x="45" y="65" width="110" height="10" fill="#e67e22"/><rect x="55" y="35" width="30" height="30" rx="3" fill="#95a5a6"/><rect x="115" y="35" width="30" height="30" rx="3" fill="#95a5a6"/><circle cx="65" cy="115" r="15" fill="#2c3e50"/><circle cx="135" cy="115" r="15" fill="#2c3e50"/><rect x="90" y="10" width="20" height="55" rx="3" fill="#7f8c8d"/></svg>'],
          'paints' => ['gradient' => 'linear-gradient(135deg, #9b59b6, #8e44ad)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><rect x="70" y="15" width="60" height="50" rx="6" fill="#3498db"/><rect x="75" y="60" width="50" height="30" rx="3" fill="#7f8c8d"/><rect x="90" y="15" width="20" height="60" rx="2" fill="#2980b9"/><rect x="80" y="80" width="40" height="40" rx="4" fill="#2c3e50"/><rect x="55" y="92" width="90" height="10" rx="3" fill="#e74c3c"/><circle cx="100" cy="32" r="8" fill="#ecf0f1"/></svg>'],
          'welding' => ['gradient' => 'linear-gradient(135deg, #c0392b, #8e44ad)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><circle cx="100" cy="50" r="25" fill="#2c3e50"/><circle cx="100" cy="50" r="18" fill="#34495e"/><circle cx="100" cy="50" r="10" fill="#e74c3c"/><rect x="60" y="70" width="80" height="8" rx="2" fill="#7f8c8d"/><rect x="90" y="78" width="20" height="30" rx="3" fill="#95a5a6"/><rect x="50" y="100" width="100" height="15" rx="4" fill="#34495e"/><path d="M70 30 L45 15" stroke="#f39c12" stroke-width="4"/><path d="M130 30 L155 15" stroke="#f39c12" stroke-width="4"/></svg>'],
          'fasteners' => ['gradient' => 'linear-gradient(135deg, #7f8c8d, #2c3e50)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><rect x="75" y="15" width="50" height="50" rx="8" fill="#95a5a6"/><rect x="85" y="25" width="30" height="30" rx="4" fill="#bdc3c7"/><circle cx="100" cy="40" r="8" fill="#2c3e50"/><rect x="90" y="55" width="20" height="35" rx="3" fill="#7f8c8d"/><rect x="70" y="80" width="60" height="12" rx="4" fill="#34495e"/><rect x="55" y="88" width="90" height="35" rx="6" fill="#2c3e50"/></svg>'],
          'cleaning' => ['gradient' => 'linear-gradient(135deg, #1abc9c, #16a085)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><rect x="85" y="15" width="16" height="70" rx="4" fill="#95a5a6"/><rect x="70" y="80" width="46" height="12" rx="4" fill="#e74c3c"/><rect x="60" y="85" width="66" height="40" rx="8" fill="#2c3e50"/><rect x="65" y="90" width="56" height="30" rx="5" fill="#34495e"/><circle cx="93" cy="45" r="10" fill="#ecf0f1"/><line x1="76" y1="35" x2="60" y2="20" stroke="#bdc3c7" stroke-width="3"/><line x1="110" y1="35" x2="126" y2="20" stroke="#bdc3c7" stroke-width="3"/></svg>'],
          'fleet' => ['gradient' => 'linear-gradient(135deg, #34495e, #2c3e50)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><rect x="35" y="50" width="130" height="45" rx="8" fill="#e74c3c"/><rect x="40" y="55" width="120" height="12" fill="#c0392b"/><rect x="45" y="70" width="25" height="20" rx="4" fill="#95a5a6"/><rect x="130" y="70" width="25" height="20" rx="4" fill="#95a5a6"/><rect x="95" y="60" width="20" height="30" rx="3" fill="#f1c40f"/><circle cx="60" cy="105" r="16" fill="#2c3e50"/><circle cx="140" cy="105" r="16" fill="#2c3e50"/><rect x="35" y="30" width="40" height="22" rx="4" fill="#7f8c8d"/></svg>'],
          'security' => ['gradient' => 'linear-gradient(135deg, #1a1a2e, #533483)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><circle cx="100" cy="75" r="45" fill="#2d2d44"/><circle cx="100" cy="75" r="35" fill="#1a1a2e"/><circle cx="100" cy="75" r="18" fill="#e94560"/><rect x="95" y="30" width="10" height="18" rx="2" fill="#f1c40f"/><rect x="95" y="102" width="10" height="18" rx="2" fill="#f1c40f"/><rect x="52" y="71" width="18" height="10" rx="2" fill="#f1c40f"/><rect x="130" y="71" width="18" height="10" rx="2" fill="#f1c40f"/></svg>'],
          'plumbing' => ['gradient' => 'linear-gradient(135deg, #2980b9, #1a5276)', 'svg' => '<svg viewBox="0 0 200 150" class="cat-svg"><rect x="85" y="10" width="30" height="80" rx="5" fill="#95a5a6"/><rect x="80" y="80" width="40" height="15" rx="4" fill="#7f8c8d"/><rect x="95" y="95" width="10" height="25" fill="#bdc3c7"/><circle cx="100" cy="115" r="12" fill="#3498db"/><path d="M60 40 L85 40" stroke="#7f8c8d" stroke-width="6" stroke-linecap="round"/><path d="M115 40 L140 40" stroke="#7f8c8d" stroke-width="6" stroke-linecap="round"/></svg>'],
        ];
        foreach ($featuredCats as $fcatslug => $fcat):
          $fname = getCategoryInfo($fcatslug);
          if (!$fname) continue;
        ?>
        <a href="category.php?slug=<?php echo htmlspecialchars($fcatslug); ?>" class="cat-card">
          <span class="cat-img" style="background-image: <?php echo $fcat['gradient']; ?>;">
            <?php echo $fcat['svg']; ?>
          </span>
          <span class="cat-name"><?php echo htmlspecialchars($fname['name']); ?></span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ===== DIGITAL CATALOGS ===== -->
  <section class="digital-catalogs" id="digitalCatalogs">
    <div class="container">
      <div class="catalog-content">
        <div class="catalog-text">
          <h2>2026 Synteco Catalog</h2>
          <p>Get all the benefits of our print catalog combined with the immediate, searchable convenience of online shopping. Browse our selection of industry-specific catalogs.</p>
          <a href="digital-catalogs.php" class="btn btn-primary">Browse Digital Catalogs <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="catalog-image">
          <div class="catalog-book">
            <i class="fas fa-book-open"></i>
            <span>2026<br>SYNTECO<br>CATALOG</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== INDUSTRY SOLUTIONS ===== -->
  <section class="industry-solutions">
    <div class="container">
      <div class="section-header">
        <h2>Industry Solutions</h2>
        <a href="all-industries.php">View All Industries <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="industry-grid">
        <a href="all-industries.php" class="industry-card" data-industry="manufacturing">
          <span class="industry-img" style="background: linear-gradient(135deg, #1a1a2e, #16213e);">
            <svg viewBox="0 0 200 150" class="industry-svg"><rect x="30" y="30" width="50" height="60" rx="4" fill="#e94560" opacity="0.8"/><rect x="45" y="40" width="20" height="40" fill="#0f3460"/><rect x="120" y="20" width="50" height="70" rx="4" fill="#e94560" opacity="0.8"/><rect x="130" y="30" width="30" height="50" fill="#0f3460"/><line x1="85" y1="55" x2="115" y2="55" stroke="#f1c40f" stroke-width="3"/><rect x="35" y="95" width="130" height="10" rx="3" fill="#533483"/></svg>
          </span>
          <span>Manufacturing</span>
        </a>
        <a href="all-industries.php" class="industry-card" data-industry="warehousing">
          <span class="industry-img" style="background: linear-gradient(135deg, #16213e, #0f3460);">
            <svg viewBox="0 0 200 150" class="industry-svg"><rect x="30" y="25" width="140" height="90" rx="6" fill="#e94560" opacity="0.7"/><rect x="35" y="30" width="130" height="15" fill="#533483"/><rect x="50" y="55" width="30" height="25" rx="3" fill="#0f3460"/><rect x="95" y="55" width="30" height="25" rx="3" fill="#0f3460"/><rect x="140" y="55" width="20" height="25" rx="3" fill="#0f3460"/><rect x="60" y="88" width="90" height="15" rx="4" fill="#533483"/></svg>
          </span>
          <span>Warehousing</span>
        </a>
        <a href="all-industries.php" class="industry-card" data-industry="healthcare">
          <span class="industry-img" style="background: linear-gradient(135deg, #0f3460, #533483);">
            <svg viewBox="0 0 200 150" class="industry-svg"><rect x="70" y="10" width="60" height="90" rx="8" fill="white" opacity="0.9"/><rect x="80" y="35" width="40" height="40" rx="4" fill="#e94560"/><line x1="85" y1="55" x2="115" y2="55" stroke="white" stroke-width="4"/><line x1="100" y1="40" x2="100" y2="70" stroke="white" stroke-width="4"/><rect x="55" y="95" width="90" height="15" rx="5" fill="#533483"/><rect x="40" y="105" width="120" height="12" rx="4" fill="#16213e"/></svg>
          </span>
          <span>Healthcare</span>
        </a>
        <a href="all-industries.php" class="industry-card" data-industry="government">
          <span class="industry-img" style="background: linear-gradient(135deg, #1a1a2e, #533483);">
            <svg viewBox="0 0 200 150" class="industry-svg"><rect x="50" y="30" width="100" height="80" rx="6" fill="#e94560" opacity="0.6"/><rect x="55" y="35" width="90" height="12" fill="#1a1a2e"/><rect x="65" y="55" width="20" height="30" rx="2" fill="#1a1a2e"/><rect x="100" y="55" width="20" height="30" rx="2" fill="#1a1a2e"/><rect x="82" y="55" width="15" height="30" rx="2" fill="#1a1a2e"/><rect x="60" y="90" width="80" height="12" rx="3" fill="#533483"/></svg>
          </span>
          <span>Government</span>
        </a>
        <a href="all-industries.php" class="industry-card" data-industry="food">
          <span class="industry-img" style="background: linear-gradient(135deg, #16213e, #e94560);">
            <svg viewBox="0 0 200 150" class="industry-svg"><rect x="40" y="40" width="120" height="60" rx="8" fill="white" opacity="0.85"/><circle cx="80" cy="70" r="15" fill="#e94560"/><circle cx="120" cy="70" r="15" fill="#e94560"/><rect x="65" y="62" width="70" height="16" rx="4" fill="#16213e"/><rect x="50" y="100" width="100" height="10" rx="3" fill="#533483"/><rect x="60" y="108" width="80" height="8" rx="2" fill="#1a1a2e"/></svg>
          </span>
          <span>Food & Beverage</span>
        </a>
        <a href="all-industries.php" class="industry-card" data-industry="oil-gas">
          <span class="industry-img" style="background: linear-gradient(135deg, #0f3460, #e94560);">
            <svg viewBox="0 0 200 150" class="industry-svg"><rect x="75" y="10" width="50" height="90" rx="6" fill="#95a5a6"/><rect x="85" y="15" width="30" height="80" rx="3" fill="#7f8c8d"/><ellipse cx="100" cy="100" rx="40" ry="12" fill="#2c3e50"/><rect x="55" y="110" width="90" height="15" rx="5" fill="#533483"/><circle cx="100" cy="45" r="8" fill="#f1c40f"/><rect x="95" y="35" width="10" height="25" fill="#e74c3c"/></svg>
          </span>
          <span>Oil & Gas</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ===== BRANCH & APP ===== -->
  <section class="branch-app">
    <div class="container">
      <div class="branch-app-grid">
        <div class="branch-card">
          <div class="branch-icon"><i class="fas fa-store"></i></div>
          <h3>Stop By a Branch</h3>
          <p>Need something on the spot? Visit your local Synteco branch. Order online for same-day pickup.</p>
          <a href="find-branch.php" class="btn btn-primary">Find a Branch <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="app-card">
          <div class="app-icon"><i class="fas fa-mobile-screen-button"></i></div>
          <h3>Download Our Mobile App</h3>
          <p>Away from your desk? Get the items you need wherever your job takes you. Scan barcodes, search by photo, and more.</p>
          <div class="app-buttons">
            <a href="#" class="btn btn-outline" data-action="app-store"><i class="fab fa-apple"></i> App Store</a>
            <a href="#" class="btn btn-outline" data-action="google-play"><i class="fab fa-google-play"></i> Google Play</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== REGISTER CTA ===== -->
  <section class="register-cta">
    <div class="container">
      <div class="cta-content">
        <h2>Get More Done with a Free Account</h2>
        <p>Register to track orders, auto-reorder, create shared lists, and streamline checkout.</p>
        <a href="register.php" class="btn btn-primary btn-lg">Register Now <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
