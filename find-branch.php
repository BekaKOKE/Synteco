<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Find a Branch - Synteco Industrial Supply';
$pageDescription = 'Locate a Synteco branch near you. Visit us in person for will-call pickup, counter sales, and expert assistance.';
$currentSlug = '';

$branches = getBranches();

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Find a Branch</span>
        </div>
        <h1 style="font-size: 42px;">Find a Branch</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Visit any of our 6 distribution centers nationwide for will-call pickup, counter sales, and expert assistance.
        </p>
    </div>
</div>

<div class="category-body" style="background: var(--gray-100);">
    <div class="container">
        <div style="background: #fff; border-radius: 12px; padding: 24px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
            <div style="display: grid; grid-template-columns: 1fr 200px; gap: 16px; align-items: end;">
                <div class="form-group" style="margin-bottom: 0;">
                    <label for="searchBranch">Search by City, State, or ZIP Code</label>
                    <div class="input-wrapper">
                        <i class="fas fa-search"></i>
                        <input type="text" id="searchBranch" placeholder="Enter city, state, or ZIP code..." style="width: 100%;">
                    </div>
                </div>
                <button class="btn btn-primary" style="width: 100%; justify-content: center;">
                    <i class="fas fa-search-location"></i> Search
                </button>
            </div>
        </div>
        
        <div class="section-header" style="margin-bottom: 24px;">
            <h2>All Locations</h2>
            <span style="font-size: 14px; color: var(--gray-500);"><?php echo count($branches); ?> branches</span>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
            <?php foreach ($branches as $branch): ?>
            <div style="background: #fff; border-radius: 12px; padding: 28px; border: 1px solid var(--gray-200); transition: all 0.2s; box-shadow: 0 1px 4px rgba(0,0,0,0.04);">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                    <div>
                        <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 4px;"><?php echo htmlspecialchars($branch['name']); ?></h3>
                        <p style="font-size: 14px; color: var(--gray-600);">
                            <?php echo htmlspecialchars($branch['address']); ?><br>
                            <?php echo htmlspecialchars($branch['city']); ?>, <?php echo htmlspecialchars($branch['state']); ?> <?php echo htmlspecialchars($branch['zip']); ?>
                        </p>
                    </div>
                </div>
                
                <div style="display: flex; gap: 8px; margin-bottom: 16px;">
                    <span style="display: inline-flex; align-items: center; gap: 4px; padding: 4px 10px; background: #f0fdf4; color: #166534; border-radius: 20px; font-size: 12px; font-weight: 600;">
                        <i class="fas fa-check-circle"></i> Open Now
                    </span>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                    <div>
                        <p style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; font-weight: 600;">Phone</p>
                        <p style="font-size: 14px; font-weight: 600; color: var(--black);"><?php echo htmlspecialchars($branch['phone']); ?></p>
                    </div>
                    <div>
                        <p style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; font-weight: 600;">Hours</p>
                        <p style="font-size: 13px; color: var(--gray-600); line-height: 1.4;"><?php echo htmlspecialchars($branch['hours']); ?></p>
                    </div>
                </div>
                
                <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--gray-100);">
                    <p style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px; font-weight: 600;">Services</p>
                    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                        <?php foreach ($branch['services'] as $service): ?>
                        <span style="display: inline-flex; align-items: center; gap: 4px; padding: 4px 10px; background: var(--gray-50); color: var(--gray-600); border-radius: 4px; font-size: 12px; border: 1px solid var(--gray-200);">
                            <i class="fas fa-check" style="color: #16a34a; font-size: 10px;"></i>
                            <?php echo htmlspecialchars($service); ?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div style="margin-top: 16px; display: flex; gap: 8px;">
                    <a href="https://maps.google.com/?q=<?php echo urlencode($branch['address'] . ', ' . $branch['city'] . ', ' . $branch['state'] . ' ' . $branch['zip']); ?>" target="_blank" class="btn btn-outline" style="flex: 1; justify-content: center; padding: 8px 14px; font-size: 13px;">
                        <i class="fas fa-directions"></i> Directions
                    </a>
                    <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $branch['phone']); ?>" class="btn btn-primary" style="flex: 1; justify-content: center; padding: 8px 14px; font-size: 13px;">
                        <i class="fas fa-phone"></i> Call
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="branch-app" style="background: #fff;">
    <div class="container">
        <div class="branch-app-grid">
            <div class="branch-card">
                <div class="branch-icon"><i class="fas fa-truck"></i></div>
                <h3>Will-Call Pickup</h3>
                <p>Order online and pick up at your nearest Synteco branch. Most orders are ready within 2 hours during business hours.</p>
                <div style="margin-top: 16px;">
                    <a href="category.php?slug=tools" class="form-link" style="font-size: 14px; font-weight: 600;">
                        Shop Now for Will-Call <i class="fas fa-chevron-right" style="font-size: 11px; margin-left: 4px;"></i>
                    </a>
                </div>
            </div>
            <div class="app-card">
                <div class="app-icon"><i class="fas fa-headset"></i></div>
                <h3>Expert Counter Sales</h3>
                <p>Visit any branch to speak with our product specialists. Get help finding the right part, technical specifications, and more.</p>
                <div style="margin-top: 16px;">
                    <a href="contact.php" class="form-link" style="font-size: 14px; font-weight: 600;">
                        Contact Customer Service <i class="fas fa-chevron-right" style="font-size: 11px; margin-left: 4px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
