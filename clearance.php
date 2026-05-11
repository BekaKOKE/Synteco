<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Clearance Center - Synteco';
$pageDescription = 'Shop Synteco clearance deals. Discounted industrial supplies, overstock items, and closeout pricing.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #b71c1c 0%, #c62828 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Clearance Center</span>
        </div>
        <h1 style="font-size: 42px;">Clearance Center</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Limited time deals on overstock, closeouts, and discontinued items.
        </p>
    </div>
</div>

<div style="padding: 40px 0; background: linear-gradient(135deg, #fff3e0 0%, #ffe0b2 100%);">
    <div class="container">
        <div style="display: flex; justify-content: center; gap: 60px; flex-wrap: wrap; align-items: center;">
            <div style="text-align: center;">
                <div style="font-size: 48px; font-weight: 900; color: #c62828; margin-bottom: 4px;">Up to 70%</div>
                <div style="font-size: 14px; font-weight: 600; color: #5d4037;">OFF Clearance Items</div>
            </div>
            <div style="text-align: center;">
                <div style="font-size: 48px; font-weight: 900; color: #c62828; margin-bottom: 4px;">500+</div>
                <div style="font-size: 14px; font-weight: 600; color: #5d4037;">Products on Sale</div>
            </div>
            <div style="text-align: center;">
                <div style="font-size: 48px; font-weight: 900; color: #c62828; margin-bottom: 4px;">Free</div>
                <div style="font-size: 14px; font-weight: 600; color: #5d4037;">Shipping on $50+</div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Shop by Category</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; max-width: 1000px; margin: 0 auto 60px;">
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <i class="fas fa-tools" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Tools</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Up to 50% off</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <i class="fas fa-hard-hat" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Safety & PPE</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Up to 40% off</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <i class="fas fa-bolt" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Electrical</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Up to 60% off</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <i class="fas fa-snowflake" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">HVAC</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Up to 35% off</p>
            </div>
        </div>

        <div class="section-header">
            <h2>Featured Clearance Deals</h2>
            <p>Quantities limited - shop while supplies last</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; position: relative;">
                <div style="position: absolute; top: 12px; left: 12px; background: #c62828; color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; z-index: 10;">45% OFF</div>
                <div style="height: 160px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-wrench" style="font-size: 48px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 16px;">
                    <div style="font-size: 11px; color: var(--gray-500); margin-bottom: 4px;">DeWalt</div>
                    <h4 style="font-size: 13px; font-weight: 600; color: var(--black); margin-bottom: 8px; line-height: 1.4;">20V MAX Cordless Drill/Driver Kit</h4>
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                        <span style="font-size: 18px; font-weight: 900; color: var(--red);">$149.99</span>
                        <span style="font-size: 12px; color: var(--gray-500); text-decoration: line-through;">$269.99</span>
                    </div>
                    <button class="btn btn-primary" style="width: 100%; padding: 8px; font-size: 12px;" onclick="addToCart(this, 'DeWalt 20V Drill Kit', 149.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; position: relative;">
                <div style="position: absolute; top: 12px; left: 12px; background: #c62828; color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; z-index: 10;">55% OFF</div>
                <div style="height: 160px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-hard-hat" style="font-size: 48px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 16px;">
                    <div style="font-size: 11px; color: var(--gray-500); margin-bottom: 4px;">3M</div>
                    <h4 style="font-size: 13px; font-weight: 600; color: var(--black); margin-bottom: 8px; line-height: 1.4;">Safety Hard Hat - Type 1 Class E (Case of 10)</h4>
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                        <span style="font-size: 18px; font-weight: 900; color: var(--red);">$89.99</span>
                        <span style="font-size: 12px; color: var(--gray-500); text-decoration: line-through;">$199.99</span>
                    </div>
                    <button class="btn btn-primary" style="width: 100%; padding: 8px; font-size: 12px;" onclick="addToCart(this, '3M Hard Hat Case', 89.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; position: relative;">
                <div style="position: absolute; top: 12px; left: 12px; background: #ff6f00; color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; z-index: 10;">Closeout</div>
                <div style="height: 160px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-lightbulb" style="font-size: 48px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 16px;">
                    <div style="font-size: 11px; color: var(--gray-500); margin-bottom: 4px;">Philips</div>
                    <h4 style="font-size: 13px; font-weight: 600; color: var(--black); margin-bottom: 8px; line-height: 1.4;">LED T8 Tube Lights 4ft (Box of 25)</h4>
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                        <span style="font-size: 18px; font-weight: 900; color: var(--red);">$124.99</span>
                        <span style="font-size: 12px; color: var(--gray-500); text-decoration: line-through;">$249.99</span>
                    </div>
                    <button class="btn btn-primary" style="width: 100%; padding: 8px; font-size: 12px;" onclick="addToCart(this, 'Philips LED T8 Lights', 124.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; position: relative;">
                <div style="position: absolute; top: 12px; left: 12px; background: #c62828; color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; z-index: 10;">35% OFF</div>
                <div style="height: 160px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-cogs" style="font-size: 48px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 16px;">
                    <div style="font-size: 11px; color: var(--gray-500); margin-bottom: 4px;">Milwaukee</div>
                    <h4 style="font-size: 13px; font-weight: 600; color: var(--black); margin-bottom: 8px; line-height: 1.4;">M12 Fuel Impact Driver (Tool Only)</h4>
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                        <span style="font-size: 18px; font-weight: 900; color: var(--red);">$99.99</span>
                        <span style="font-size: 12px; color: var(--gray-500); text-decoration: line-through;">$154.99</span>
                    </div>
                    <button class="btn btn-primary" style="width: 100%; padding: 8px; font-size: 12px;" onclick="addToCart(this, 'Milwaukee M12 Impact Driver', 99.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="register-cta" style="background: linear-gradient(135deg, #b71c1c 0%, #c62828 100%);">
    <div class="container">
        <div class="cta-content">
            <h2>Never Miss a Deal</h2>
            <p>Sign up for our email alerts to be notified about new clearance items and exclusive offers.</p>
            <div style="display: flex; gap: 16px; justify-content: center; margin-top: 28px;">
                <a href="register.php" class="btn btn-primary btn-lg" style="background: #fff; color: #c62828; border-color: #fff;"><i class="fas fa-user-plus"></i> Create Account</a>
                <a href="hot-buys.php" class="btn btn-outline btn-lg" style="border-color: rgba(255,255,255,0.5); color: #fff;">View Hot Buys</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
