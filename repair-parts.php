<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Repair Parts - Synteco';
$pageDescription = 'Find repair parts for tools and equipment at Synteco. Genuine OEM and aftermarket replacement parts available.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #0d47a1 0%, #1565c0 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Repair Parts</span>
        </div>
        <h1 style="font-size: 42px;">Repair Parts Center</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Genuine OEM and aftermarket parts for tools and equipment.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto 60px;">
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 16px; text-align: center;">Find the Right Part</h3>
                <div style="display: flex; gap: 12px;">
                    <input type="text" class="search-input" style="flex: 1;" placeholder="Enter part number, model, or keyword...">
                    <button class="btn btn-primary" onclick="showToast('Searching for parts...', 'info');"><i class="fas fa-search"></i> Search</button>
                </div>
                <div style="display: flex; gap: 8px; margin-top: 12px; flex-wrap: wrap; justify-content: center;">
                    <span style="font-size: 11px; color: var(--gray-500);">Popular: </span>
                    <span style="font-size: 11px; color: var(--gray-600); cursor: pointer; text-decoration: underline;" onclick="showToast('Searching: carbon brushes', 'info');">carbon brushes</span>
                    <span style="font-size: 11px; color: var(--gray-600); cursor: pointer; text-decoration: underline;" onclick="showToast('Searching: batteries', 'info');">batteries</span>
                    <span style="font-size: 11px; color: var(--gray-600); cursor: pointer; text-decoration: underline;" onclick="showToast('Searching: chargers', 'info');">chargers</span>
                    <span style="font-size: 11px; color: var(--gray-600); cursor: pointer; text-decoration: underline;" onclick="showToast('Searching: filters', 'info');">filters</span>
                    <span style="font-size: 11px; color: var(--gray-600); cursor: pointer; text-decoration: underline;" onclick="showToast('Searching: belts', 'info');">belts</span>
                </div>
            </div>
        </div>

        <div class="section-header">
            <h2>Shop by Brand</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 16px; max-width: 900px; margin: 0 auto 60px;">
            <div style="background: var(--gray-50); padding: 20px; border-radius: 8px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <div style="font-size: 24px; font-weight: 900; color: var(--black); margin-bottom: 4px;">DeWalt</div>
                <div style="font-size: 11px; color: var(--gray-500);">2,400+ parts</div>
            </div>
            <div style="background: var(--gray-50); padding: 20px; border-radius: 8px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <div style="font-size: 24px; font-weight: 900; color: var(--red); margin-bottom: 4px;">Milwaukee</div>
                <div style="font-size: 11px; color: var(--gray-500);">1,800+ parts</div>
            </div>
            <div style="background: var(--gray-50); padding: 20px; border-radius: 8px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <div style="font-size: 24px; font-weight: 900; color: #1976d2; margin-bottom: 4px;">Makita</div>
                <div style="font-size: 11px; color: var(--gray-500);">1,200+ parts</div>
            </div>
            <div style="background: var(--gray-50); padding: 20px; border-radius: 8px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <div style="font-size: 24px; font-weight: 900; color: #7b1fa2; margin-bottom: 4px;">Bosch</div>
                <div style="font-size: 11px; color: var(--gray-500);">900+ parts</div>
            </div>
            <div style="background: var(--gray-50); padding: 20px; border-radius: 8px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <div style="font-size: 24px; font-weight: 900; color: #e65100; margin-bottom: 4px;">Hilti</div>
                <div style="font-size: 11px; color: var(--gray-500);">700+ parts</div>
            </div>
            <div style="background: var(--gray-50); padding: 20px; border-radius: 8px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <div style="font-size: 24px; font-weight: 900; color: var(--black); margin-bottom: 4px;">100+</div>
                <div style="font-size: 11px; color: var(--gray-500);">More Brands</div>
            </div>
        </div>

        <div class="section-header">
            <h2>Popular Repair Parts</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden;">
                <div style="height: 140px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-battery-full" style="font-size: 40px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 14px;">
                    <div style="font-size: 10px; color: var(--gray-500); margin-bottom: 2px;">DeWalt</div>
                    <h4 style="font-size: 12px; font-weight: 600; color: var(--black); margin-bottom: 6px; line-height: 1.3;">DCB205 20V MAX 5.0Ah Battery</h4>
                    <div style="font-size: 15px; font-weight: 900; color: var(--red); margin-bottom: 10px;">$149.99</div>
                    <button class="btn btn-primary" style="width: 100%; padding: 6px; font-size: 11px;" onclick="addToCart(this, 'DeWalt DCB205 Battery', 149.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden;">
                <div style="height: 140px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-plug" style="font-size: 40px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 14px;">
                    <div style="font-size: 10px; color: var(--gray-500); margin-bottom: 2px;">Milwaukee</div>
                    <h4 style="font-size: 12px; font-weight: 600; color: var(--black); margin-bottom: 6px; line-height: 1.3;">48-59-1812 M18/M12 Charger</h4>
                    <div style="font-size: 15px; font-weight: 900; color: var(--red); margin-bottom: 10px;">$89.99</div>
                    <button class="btn btn-primary" style="width: 100%; padding: 6px; font-size: 11px;" onclick="addToCart(this, 'Milwaukee 48-59-1812 Charger', 89.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden;">
                <div style="height: 140px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-circle" style="font-size: 40px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 14px;">
                    <div style="font-size: 10px; color: var(--gray-500); margin-bottom: 2px;">DeWalt</div>
                    <h4 style="font-size: 12px; font-weight: 600; color: var(--black); margin-bottom: 6px; line-height: 1.3;">N421227 Carbon Brush Set (2-Pack)</h4>
                    <div style="font-size: 15px; font-weight: 900; color: var(--red); margin-bottom: 10px;">$14.99</div>
                    <button class="btn btn-primary" style="width: 100%; padding: 6px; font-size: 11px;" onclick="addToCart(this, 'DeWalt N421227 Brush Set', 14.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden;">
                <div style="height: 140px; background: var(--gray-50); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-cog" style="font-size: 40px; color: var(--gray-300);"></i>
                </div>
                <div style="padding: 14px;">
                    <div style="font-size: 10px; color: var(--gray-500); margin-bottom: 2px;">Makita</div>
                    <h4 style="font-size: 12px; font-weight: 600; color: var(--black); margin-bottom: 6px; line-height: 1.3;">1911B3-8 Drive Belt for Planer</h4>
                    <div style="font-size: 15px; font-weight: 900; color: var(--red); margin-bottom: 10px;">$12.99</div>
                    <button class="btn btn-primary" style="width: 100%; padding: 6px; font-size: 11px;" onclick="addToCart(this, 'Makita 1911B3-8 Belt', 12.99);">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>Need Help Finding a Part?</h2>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; max-width: 900px; margin: 0 auto;">
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 16px;">
                    <i class="fas fa-search" style="color: var(--red); margin-right: 8px;"></i>Part Lookup Request
                </h3>
                <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">
                    Can't find the part you need? Our parts specialists can help. Submit a request and we'll locate it for you.
                </p>
                <form>
                    <div style="margin-bottom: 10px;">
                        <input type="text" class="search-input" style="width: 100%;" placeholder="Tool model number">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <input type="text" class="search-input" style="width: 100%;" placeholder="Part description or part number">
                    </div>
                    <div style="margin-bottom: 12px;">
                        <input type="email" class="search-input" style="width: 100%;" placeholder="Your email for response">
                    </div>
                    <button type="button" class="btn btn-primary" style="width: 100%;" onclick="showToast('Part lookup request submitted!', 'success');">
                        <i class="fas fa-paper-plane"></i> Submit Request
                    </button>
                </form>
            </div>
            <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 28px; border-radius: 12px; color: #fff;">
                <h3 style="font-size: 16px; font-weight: 800; margin-bottom: 20px;">
                    <i class="fas fa-headset" style="margin-right: 8px;"></i>Talk to a Parts Specialist
                </h3>
                <div style="margin-bottom: 24px;">
                    <div style="font-size: 13px; opacity: 0.8; margin-bottom: 8px;">Parts Department Hours</div>
                    <div style="font-size: 14px; font-weight: 600;">Mon-Fri: 7AM - 7PM CST</div>
                    <div style="font-size: 14px; font-weight: 600;">Sat: 8AM - 5PM CST</div>
                </div>
                <div style="font-size: 24px; font-weight: 900; margin-bottom: 20px;">
                    <i class="fas fa-phone" style="margin-right: 8px;"></i>1-800-PARTS-SYN
                </div>
                <div style="display: flex; gap: 12px;">
                    <a href="find-branch.php" class="btn btn-outline" style="border-color: rgba(255,255,255,0.4); color: #fff; font-size: 12px; padding: 8px 14px;"><i class="fas fa-map-marker-alt"></i> Visit Branch</a>
                    <a href="repair.php" class="btn btn-primary" style="background: #fff; color: var(--black); border-color: #fff; font-size: 12px; padding: 8px 14px;"><i class="fas fa-tools"></i> Repair Service</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
