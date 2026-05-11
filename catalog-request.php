<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Catalog Request - Synteco';
$pageDescription = 'Request a Synteco product catalog. Get our full product catalog delivered to your business.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Catalog Request</span>
        </div>
        <h1 style="font-size: 42px;">Request a Catalog</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Get our comprehensive product catalog delivered to your business.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
            
            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Why Request a Catalog?</h2>
                <div style="margin-bottom: 32px;">
                    <div style="display: flex; gap: 16px; margin-bottom: 20px;">
                        <div style="width: 48px; height: 48px; background: var(--gray-50); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-book" style="font-size: 20px; color: var(--red);"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Comprehensive Product Guide</h4>
                            <p style="font-size: 13px; color: var(--gray-600);">Over 1,000 pages featuring our most popular industrial products.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; margin-bottom: 20px;">
                        <div style="width: 48px; height: 48px; background: var(--gray-50); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-tag" style="font-size: 20px; color: var(--red);"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Current Pricing</h4>
                            <p style="font-size: 13px; color: var(--gray-600);">Get the latest pricing and special offers for your business.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; margin-bottom: 20px;">
                        <div style="width: 48px; height: 48px; background: var(--gray-50); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-envelope" style="font-size: 20px; color: var(--red);"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Free Shipping</h4>
                            <p style="font-size: 13px; color: var(--gray-600);">Catalogs are shipped free of charge to business addresses.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px;">
                        <div style="width: 48px; height: 48px; background: var(--gray-50); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-desktop" style="font-size: 20px; color: var(--red);"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Digital Catalog Available</h4>
                            <p style="font-size: 13px; color: var(--gray-600);">Prefer digital? Browse our <a href="digital-catalogs.php" style="color: var(--red);">online catalogs</a> now.</p>
                        </div>
                    </div>
                </div>

                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Catalog Options</h4>
                    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <span style="background: #fff; padding: 10px 16px; border-radius: 20px; font-size: 12px; font-weight: 600; border: 1px solid var(--gray-200);">Full Product Catalog</span>
                        <span style="background: #fff; padding: 10px 16px; border-radius: 20px; font-size: 12px; font-weight: 600; border: 1px solid var(--gray-200);">Safety & PPE Guide</span>
                        <span style="background: #fff; padding: 10px 16px; border-radius: 20px; font-size: 12px; font-weight: 600; border: 1px solid var(--gray-200);">Tools & Equipment</span>
                        <span style="background: #fff; padding: 10px 16px; border-radius: 20px; font-size: 12px; font-weight: 600; border: 1px solid var(--gray-200);">Electrical Catalog</span>
                        <span style="background: #fff; padding: 10px 16px; border-radius: 20px; font-size: 12px; font-weight: 600; border: 1px solid var(--gray-200);">HVAC & Refrigeration</span>
                    </div>
                </div>
            </div>

            <div>
                <div style="background: var(--gray-50); padding: 32px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 24px;">Catalog Request Form</h3>
                    <form>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                            <div>
                                <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">First Name *</label>
                                <input type="text" class="search-input" style="width: 100%;" placeholder="First name">
                            </div>
                            <div>
                                <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">Last Name *</label>
                                <input type="text" class="search-input" style="width: 100%;" placeholder="Last name">
                            </div>
                        </div>
                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">Company Name *</label>
                            <input type="text" class="search-input" style="width: 100%;" placeholder="Your company">
                        </div>
                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">Email Address *</label>
                            <input type="email" class="search-input" style="width: 100%;" placeholder="you@company.com">
                        </div>
                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">Phone Number</label>
                            <input type="tel" class="search-input" style="width: 100%;" placeholder="(555) 123-4567">
                        </div>
                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">Shipping Address *</label>
                            <input type="text" class="search-input" style="width: 100%; margin-bottom: 10px;" placeholder="Street address">
                            <div style="display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 10px;">
                                <input type="text" class="search-input" style="width: 100%;" placeholder="City">
                                <input type="text" class="search-input" style="width: 100%;" placeholder="State">
                                <input type="text" class="search-input" style="width: 100%;" placeholder="Zip">
                            </div>
                        </div>
                        <div style="margin-bottom: 20px;">
                            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">Which catalogs would you like?</label>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; color: var(--gray-600); cursor: pointer;">
                                    <input type="checkbox" checked> Full Product Catalog
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; color: var(--gray-600); cursor: pointer;">
                                    <input type="checkbox"> Safety & PPE
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; color: var(--gray-600); cursor: pointer;">
                                    <input type="checkbox"> Tools & Equipment
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; color: var(--gray-600); cursor: pointer;">
                                    <input type="checkbox"> Electrical
                                </label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg" style="width: 100%;" onclick="showToast('Catalog request submitted! Your catalog will ship within 2 business days.', 'success');">
                            <i class="fas fa-paper-plane"></i> Submit Request
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
