<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'My Quotes - Synteco';
$pageDescription = 'View and manage your Synteco quotes. Request special pricing for large orders and custom requirements.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>My Quotes</span>
        </div>
        <h1 style="font-size: 42px;">My Quotes</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Request special pricing and manage your quotes.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px; max-width: 1000px; margin-left: auto; margin-right: auto;">
            <div>
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black);">Active Quotes</h2>
                <p style="font-size: 13px; color: var(--gray-600);">Special pricing for large orders and projects</p>
            </div>
            <button class="btn btn-primary" onclick="showToast('Request a Quote feature coming soon!', 'info');"><i class="fas fa-plus"></i> Request Quote</button>
        </div>

        <div style="max-width: 1000px; margin: 0 auto;">
            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; padding: 24px; margin-bottom: 16px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid var(--gray-100);">
                    <div>
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px;">
                            <h3 style="font-size: 16px; font-weight: 700; color: var(--black);">Quote #QT-2026-0412</h3>
                            <span style="font-size: 11px; background: #fff3e0; color: #ef6c00; padding: 3px 10px; border-radius: 20px; font-weight: 600;">Pending</span>
                        </div>
                        <p style="font-size: 12px; color: var(--gray-600);">Plant Lighting Retrofit Project | Created: Jan 15, 2026</p>
                        <p style="font-size: 11px; color: var(--gray-500); margin-top: 4px;">Expires: Feb 14, 2026</p>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 11px; color: var(--gray-500); margin-bottom: 4px;">Quote Total</div>
                        <div style="font-size: 24px; font-weight: 900; color: var(--black);">$24,850.00</div>
                        <div style="font-size: 11px; color: #2e7d32; font-weight: 600; margin-top: 4px;"><i class="fas fa-tag" style="margin-right: 4px;"></i>12% Volume Discount Applied</div>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div style="font-size: 12px; color: var(--gray-600);">
                        <i class="fas fa-box" style="margin-right: 6px; color: var(--red);"></i> 42 items | <i class="fas fa-user" style="margin-right: 6px; color: var(--red); margin-left: 8px;"></i> Assigned to: John Miller
                    </div>
                    <div style="display: flex; gap: 8px;">
                        <button class="btn btn-primary" onclick="showToast('Converting quote to order...', 'info');"><i class="fas fa-cart-plus"></i> Accept Quote</button>
                        <button class="btn btn-outline" onclick="showToast('Opening quote details...', 'info');"><i class="fas fa-eye"></i> View Details</button>
                        <button class="btn btn-outline" onclick="showToast('Opening message to sales rep...', 'info');"><i class="fas fa-comment"></i> Message</button>
                    </div>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; padding: 24px; margin-bottom: 16px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid var(--gray-100);">
                    <div>
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px;">
                            <h3 style="font-size: 16px; font-weight: 700; color: var(--black);">Quote #QT-2026-0389</h3>
                            <span style="font-size: 11px; background: #e8f5e9; color: #2e7d32; padding: 3px 10px; border-radius: 20px; font-weight: 600;">Accepted</span>
                        </div>
                        <p style="font-size: 12px; color: var(--gray-600);">Quarterly Safety Supply Order | Created: Jan 8, 2026</p>
                        <p style="font-size: 11px; color: #2e7d32; margin-top: 4px;"><i class="fas fa-check-circle" style="margin-right: 4px;"></i> Converted to Order #ORD-12847</p>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 11px; color: var(--gray-500); margin-bottom: 4px;">Quote Total</div>
                        <div style="font-size: 24px; font-weight: 900; color: var(--black);">$8,420.00</div>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div style="font-size: 12px; color: var(--gray-600);">
                        <i class="fas fa-box" style="margin-right: 6px; color: var(--red);"></i> 18 items | <i class="fas fa-check-circle" style="margin-right: 6px; color: #2e7d32; margin-left: 8px;"></i> Accepted: Jan 10, 2026
                    </div>
                    <div style="display: flex; gap: 8px;">
                        <button class="btn btn-outline" onclick="showToast('Viewing order details...', 'info');"><i class="fas fa-shopping-cart"></i> View Order</button>
                        <button class="btn btn-outline" onclick="showToast('Opening quote details...', 'info');"><i class="fas fa-eye"></i> View Quote</button>
                    </div>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; padding: 24px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid var(--gray-100);">
                    <div>
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px;">
                            <h3 style="font-size: 16px; font-weight: 700; color: var(--black);">Quote #QT-2026-0356</h3>
                            <span style="font-size: 11px; background: var(--gray-100); color: var(--gray-600); padding: 3px 10px; border-radius: 20px; font-weight: 600;">Expired</span>
                        </div>
                        <p style="font-size: 12px; color: var(--gray-600);">Tool Crib Stocking | Created: Dec 5, 2025</p>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 11px; color: var(--gray-500); margin-bottom: 4px;">Quote Total</div>
                        <div style="font-size: 24px; font-weight: 900; color: var(--gray-500);">$15,280.00</div>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div style="font-size: 12px; color: var(--gray-500);">
                        <i class="fas fa-clock" style="margin-right: 6px;"></i> Expired: Jan 4, 2026
                    </div>
                    <div style="display: flex; gap: 8px;">
                        <button class="btn btn-primary" onclick="showToast('Requesting renewal of expired quote...', 'info');"><i class="fas fa-redo"></i> Renew Quote</button>
                        <button class="btn btn-outline" onclick="showToast('Opening quote details...', 'info');"><i class="fas fa-eye"></i> View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>When to Request a Quote</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; max-width: 1000px; margin: 0 auto;">
            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <i class="fas fa-layer-group" style="font-size: 28px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Large Orders</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Volume discounts on case quantities and bulk purchases</p>
            </div>
            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <i class="fas fa-project-diagram" style="font-size: 28px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Projects</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Special pricing for construction and renovation projects</p>
            </div>
            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <i class="fas fa-cogs" style="font-size: 28px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Custom Items</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Custom products, special configurations, or hard-to-find items</p>
            </div>
            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <i class="fas fa-building" style="font-size: 28px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Contracts</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Annual contracts and blanket purchase agreements</p>
            </div>
        </div>
    </div>
</div>

<div style="padding: 40px 0; background: #fff;">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto; text-align: center; background: var(--gray-50); padding: 32px; border-radius: 12px; border: 1px solid var(--gray-200);">
            <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 12px;">Need Help with a Quote?</h3>
            <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 20px;">
                Our sales team is ready to help with special pricing and custom quotes.
            </p>
            <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                <a href="special-orders.php" class="btn btn-primary"><i class="fas fa-file-alt"></i> Request Special Order</a>
                <a href="contact.php" class="btn btn-outline"><i class="fas fa-phone"></i> Contact Sales</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
