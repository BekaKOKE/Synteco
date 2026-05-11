<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Hot Buys - Synteco';
$pageDescription = 'Synteco Hot Buys - Weekly special offers, flash sales, and limited time deals on industrial supplies.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #ff6f00 0%, #e65100 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Hot Buys</span>
        </div>
        <h1 style="font-size: 42px;">Hot Buys</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Limited time offers and weekly specials. Deals change weekly - don't miss out!
        </p>
    </div>
</div>

<div style="padding: 40px 0; background: linear-gradient(135deg, #1a1a1a 0%, #333 100%);">
    <div class="container">
        <div style="display: flex; justify-content: center; align-items: center; gap: 40px; flex-wrap: wrap;">
            <div style="color: #fff; text-align: center;">
                <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 2px; opacity: 0.7; margin-bottom: 8px;">Sale Ends In</div>
                <div style="display: flex; gap: 12px; justify-content: center;">
                    <div style="background: rgba(255,255,255,0.1); padding: 12px 16px; border-radius: 8px; text-align: center;">
                        <div style="font-size: 28px; font-weight: 900;">03</div>
                        <div style="font-size: 10px; opacity: 0.7;">Days</div>
                    </div>
                    <div style="background: rgba(255,255,255,0.1); padding: 12px 16px; border-radius: 8px; text-align: center;">
                        <div style="font-size: 28px; font-weight: 900;">14</div>
                        <div style="font-size: 10px; opacity: 0.7;">Hours</div>
                    </div>
                    <div style="background: rgba(255,255,255,0.1); padding: 12px 16px; border-radius: 8px; text-align: center;">
                        <div style="font-size: 28px; font-weight: 900;">35</div>
                        <div style="font-size: 10px; opacity: 0.7;">Mins</div>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <div style="font-size: 48px; font-weight: 900; color: #ff6f00; margin-bottom: 4px;">Up to 50%</div>
                <div style="font-size: 14px; font-weight: 600; color: #fff;">OFF This Week's Hot Buys</div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>This Week's Hot Buys</h2>
            <p>Valid through Sunday at midnight</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 40px;">
            <div style="background: #fff; border: 2px solid #ff6f00; border-radius: 12px; overflow: hidden; position: relative;">
                <div style="position: absolute; top: 12px; left: 12px; background: #ff6f00; color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; z-index: 10;">HOT BUY</div>
                <div style="height: 160px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-wrench" style="font-size: 48px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 16px;">
                    <div style="font-size: 11px; color: var(--gray-500); margin-bottom: 4px;">DeWalt</div>
                    <h4 style="font-size: 13px; font-weight: 600; color: var(--black); margin-bottom: 8px; line-height: 1.4;">20V MAX 5.0Ah Battery (2-Pack)</h4>
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                        <span style="font-size: 18px; font-weight: 900; color: var(--red);">$129.99</span>
                        <span style="font-size: 12px; color: var(--gray-500); text-decoration: line-through;">$199.99</span>
                        <span style="font-size: 11px; background: #ffebee; color: #c62828; padding: 2px 8px; border-radius: 4px; font-weight: 600;">Save $70</span>
                    </div>
                    <button class="btn btn-primary" style="width: 100%; padding: 8px; font-size: 12px;" onclick="addToCart(this, 'DeWalt 20V Battery 2-Pack', 129.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden;">
                <div style="height: 160px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-gloves" style="font-size: 48px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 16px;">
                    <div style="font-size: 11px; color: var(--gray-500); margin-bottom: 4px;">Ansell</div>
                    <h4 style="font-size: 13px; font-weight: 600; color: var(--black); margin-bottom: 8px; line-height: 1.4;">Nitrile Disposable Gloves (Case of 1000)</h4>
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                        <span style="font-size: 18px; font-weight: 900; color: var(--red);">$89.99</span>
                        <span style="font-size: 12px; color: var(--gray-500); text-decoration: line-through;">$124.99</span>
                    </div>
                    <button class="btn btn-primary" style="width: 100%; padding: 8px; font-size: 12px;" onclick="addToCart(this, 'Ansell Nitrile Gloves Case', 89.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>

            <div style="background: #fff; border: 2px solid #ff6f00; border-radius: 12px; overflow: hidden; position: relative;">
                <div style="position: absolute; top: 12px; left: 12px; background: #ff6f00; color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 700; z-index: 10;">FLASH SALE</div>
                <div style="height: 160px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-tape" style="font-size: 48px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 16px;">
                    <div style="font-size: 11px; color: var(--gray-500); margin-bottom: 4px;">3M</div>
                    <h4 style="font-size: 13px; font-weight: 600; color: var(--black); margin-bottom: 8px; line-height: 1.4;">Scotch-Brite General Purpose Scouring Pads (20-Pack)</h4>
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                        <span style="font-size: 18px; font-weight: 900; color: var(--red);">$24.99</span>
                        <span style="font-size: 12px; color: var(--gray-500); text-decoration: line-through;">$39.99</span>
                    </div>
                    <button class="btn btn-primary" style="width: 100%; padding: 8px; font-size: 12px;" onclick="addToCart(this, '3M Scouring Pads 20-Pack', 24.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden;">
                <div style="height: 160px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-lightbulb" style="font-size: 48px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 16px;">
                    <div style="font-size: 11px; color: var(--gray-500); margin-bottom: 4px;">Sylvania</div>
                    <h4 style="font-size: 13px; font-weight: 600; color: var(--black); margin-bottom: 8px; line-height: 1.4;">4ft LED T8 Tube 32W Equivalent (10-Pack)</h4>
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                        <span style="font-size: 18px; font-weight: 900; color: var(--red);">$44.99</span>
                        <span style="font-size: 12px; color: var(--gray-500); text-decoration: line-through;">$69.99</span>
                    </div>
                    <button class="btn btn-primary" style="width: 100%; padding: 8px; font-size: 12px;" onclick="addToCart(this, 'Sylvania LED T8 10-Pack', 44.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>

        <div class="section-header">
            <h2>Category Specials</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; max-width: 1000px; margin: 0 auto;">
            <div style="background: linear-gradient(135deg, #1a1a1a 0%, #333 100%); padding: 32px; border-radius: 12px; color: #fff; text-align: center;">
                <i class="fas fa-tools" style="font-size: 40px; margin-bottom: 16px;"></i>
                <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Tool Sale</h3>
                <p style="font-size: 13px; opacity: 0.8; margin-bottom: 16px;">25% off all hand & power tools</p>
                <a href="category.php?slug=tools" class="btn btn-primary" style="background: #ff6f00; border-color: #ff6f00;">Shop Now</a>
            </div>
            <div style="background: linear-gradient(135deg, #1a1a1a 0%, #333 100%); padding: 32px; border-radius: 12px; color: #fff; text-align: center;">
                <i class="fas fa-bolt" style="font-size: 40px; margin-bottom: 16px;"></i>
                <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Electrical Deals</h3>
                <p style="font-size: 13px; opacity: 0.8; margin-bottom: 16px;">Buy 2, Get 1 Free on wire & cable</p>
                <a href="category.php?slug=tools" class="btn btn-primary" style="background: #ff6f00; border-color: #ff6f00;">Shop Now</a>
            </div>
            <div style="background: linear-gradient(135deg, #1a1a1a 0%, #333 100%); padding: 32px; border-radius: 12px; color: #fff; text-align: center;">
                <i class="fas fa-hard-hat" style="font-size: 40px; margin-bottom: 16px;"></i>
                <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Safety Bundle</h3>
                <p style="font-size: 13px; opacity: 0.8; margin-bottom: 16px;">PPE kits starting at $49.99</p>
                <a href="category.php?slug=tools" class="btn btn-primary" style="background: #ff6f00; border-color: #ff6f00;">Shop Now</a>
            </div>
        </div>
    </div>
</div>

<div class="register-cta" style="background: linear-gradient(135deg, #ff6f00 0%, #e65100 100%);">
    <div class="container">
        <div class="cta-content">
            <h2>Get Hot Buy Alerts</h2>
            <p>Never miss a deal. Sign up to receive weekly Hot Buy notifications directly to your inbox.</p>
            <div style="display: flex; gap: 16px; justify-content: center; margin-top: 28px;">
                <a href="register.php" class="btn btn-primary btn-lg" style="background: #fff; color: #e65100; border-color: #fff;"><i class="fas fa-bell"></i> Sign Up for Alerts</a>
                <a href="clearance.php" class="btn btn-outline btn-lg" style="border-color: rgba(255,255,255,0.5); color: #fff;">Shop Clearance</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
