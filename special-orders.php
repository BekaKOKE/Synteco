<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Special Orders - Synteco';
$pageDescription = 'Synteco special order services for hard-to-find items, custom products, and large quantity orders.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Special Orders</span>
        </div>
        <h1 style="font-size: 42px;">Special Orders</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Can't find what you need? We'll source it for you.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>What We Can Source</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; max-width: 1100px; margin: 0 auto 60px;">
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 12px;"><i class="fas fa-search"></i></div>
                <h3 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Hard-to-Find Items</h3>
                <p style="font-size: 12px; color: var(--gray-600);">Discontinued, obsolete, or niche products</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 12px;"><i class="fas fa-cogs"></i></div>
                <h3 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Custom Products</h3>
                <p style="font-size: 12px; color: var(--gray-600);">Custom sizes, configurations, branding</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 12px;"><i class="fas fa-pallet"></i></div>
                <h3 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Large Quantities</h3>
                <p style="font-size: 12px; color: var(--gray-600);">Volume discounts on bulk orders</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 12px;"><i class="fas fa-truck-loading"></i></div>
                <h3 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Special Deliveries</h3>
                <p style="font-size: 12px; color: var(--gray-600);">White glove, scheduled, onsite delivery</p>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
            
            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">How Special Orders Work</h2>
                <div style="margin-bottom: 32px;">
                    <div style="display: flex; gap: 16px; padding: 20px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px;">
                        <div style="width: 40px; height: 40px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #fff; font-weight: 800;">1</div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Submit Your Request</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Tell us what you need - product details, quantity, timeframe.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; padding: 20px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px;">
                        <div style="width: 40px; height: 40px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #fff; font-weight: 800;">2</div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">We Source It</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Our team searches our network of 5,000+ suppliers.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; padding: 20px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px;">
                        <div style="width: 40px; height: 40px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #fff; font-weight: 800;">3</div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Get a Quote</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Receive pricing and availability within 1-2 business days.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; padding: 20px; background: var(--gray-50); border-radius: 8px;">
                        <div style="width: 40px; height: 40px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #fff; font-weight: 800;">4</div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">We Deliver</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Approve the quote and we'll handle the rest.</p>
                        </div>
                    </div>
                </div>

                <div style="background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%); padding: 24px; border-radius: 12px; color: #fff;">
                    <h4 style="font-size: 14px; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-network-wired" style="margin-right: 8px;"></i>5,000+ Supplier Network</h4>
                    <p style="font-size: 13px; opacity: 0.9; margin-bottom: 12px;">
                        We have access to thousands of manufacturers and distributors to find exactly what you need.
                    </p>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.15); padding: 6px 12px; border-radius: 20px; font-size: 11px;">OEM Parts</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 6px 12px; border-radius: 20px; font-size: 11px;">Hard-to-Find</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 6px 12px; border-radius: 20px; font-size: 11px;">Custom Orders</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 6px 12px; border-radius: 20px; font-size: 11px;">Bulk Pricing</span>
                    </div>
                </div>
            </div>

            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Request a Special Order</h2>
                
                <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <form>
                        <div style="margin-bottom: 12px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Company Name</label>
                            <input type="text" class="search-input" style="width: 100%;" placeholder="Your company">
                        </div>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 12px;">
                            <div>
                                <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Contact Name</label>
                                <input type="text" class="search-input" style="width: 100%;" placeholder="Your name">
                            </div>
                            <div>
                                <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Phone Number</label>
                                <input type="tel" class="search-input" style="width: 100%;" placeholder="(555) 123-4567">
                            </div>
                        </div>
                        <div style="margin-bottom: 12px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Email Address</label>
                            <input type="email" class="search-input" style="width: 100%;" placeholder="you@company.com">
                        </div>
                        <div style="margin-bottom: 12px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Product Description *</label>
                            <textarea class="search-input" style="width: 100%; min-height: 100px;" placeholder="Describe what you're looking for. Include manufacturer, part number, specifications, quantity needed..."></textarea>
                        </div>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 16px;">
                            <div>
                                <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Quantity Needed</label>
                                <input type="text" class="search-input" style="width: 100%;" placeholder="e.g., 100 units">
                            </div>
                            <div>
                                <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Need By Date</label>
                                <input type="date" class="search-input" style="width: 100%;">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg" style="width: 100%;" onclick="showToast('Special order request submitted! We\'ll follow up within 1-2 business days.', 'success');">
                            <i class="fas fa-paper-plane"></i> Submit Request
                        </button>
                    </form>
                </div>

                <div style="background: var(--gray-50); padding: 20px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <h4 style="font-size: 13px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Prefer to Talk?</h4>
                    <p style="font-size: 12px; color: var(--gray-600); margin-bottom: 12px;">
                        Our special order specialists are ready to help.
                    </p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                        <a href="find-branch.php" class="btn btn-outline" style="font-size: 12px; padding: 10px 12px;"><i class="fas fa-map-marker-alt"></i> Visit Branch</a>
                        <a href="contact.php" class="btn btn-outline" style="font-size: 12px; padding: 10px 12px;"><i class="fas fa-phone"></i> Call Us</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
