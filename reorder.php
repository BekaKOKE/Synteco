<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Auto-Reorder - Synteco';
$pageDescription = 'Set up automatic reorders with Synteco Auto-Reorder. Never run out of essential supplies again.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Auto-Reorder</span>
        </div>
        <h1 style="font-size: 42px;">Auto-Reorder Program</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Set it and forget it. Automatic deliveries on your schedule.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>How Auto-Reorder Works</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto 60px;">
            <div style="text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <span style="font-size: 24px; font-weight: 900; color: var(--red);">1</span>
                </div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Shop Products</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Browse our catalog and select items you regularly need.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <span style="font-size: 24px; font-weight: 900; color: var(--red);">2</span>
                </div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Set Schedule</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Choose delivery frequency - weekly, monthly, or custom.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <span style="font-size: 24px; font-weight: 900; color: var(--red);">3</span>
                </div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Save 5%</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Get 5% off every Auto-Reorder shipment.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <span style="font-size: 24px; font-weight: 900; color: var(--red);">4</span>
                </div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Manage Easily</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Edit, pause, or cancel anytime from your account.</p>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
            
            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Perfect For Regularly Used Items</h2>
                <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 24px;">
                    Auto-Reorder is ideal for products you use consistently. Never run out of essential supplies again.
                </p>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 32px;">
                    <div style="background: var(--gray-50); padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);">
                        <div style="font-size: 12px; font-weight: 600; color: var(--black); margin-bottom: 4px;">Disposable Gloves</div>
                        <div style="font-size: 11px; color: var(--gray-600);">Weekly or monthly delivery</div>
                    </div>
                    <div style="background: var(--gray-50); padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);">
                        <div style="font-size: 12px; font-weight: 600; color: var(--black); margin-bottom: 4px;">Cleaning Supplies</div>
                        <div style="font-size: 11px; color: var(--gray-600);">Monthly delivery</div>
                    </div>
                    <div style="background: var(--gray-50); padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);">
                        <div style="font-size: 12px; font-weight: 600; color: var(--black); margin-bottom: 4px;">Safety Glasses</div>
                        <div style="font-size: 11px; color: var(--gray-600);">Quarterly delivery</div>
                    </div>
                    <div style="background: var(--gray-50); padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);">
                        <div style="font-size: 12px; font-weight: 600; color: var(--black); margin-bottom: 4px;">Filters & Lubricants</div>
                        <div style="font-size: 11px; color: var(--gray-600);">Custom schedule</div>
                    </div>
                    <div style="background: var(--gray-50); padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);">
                        <div style="font-size: 12px; font-weight: 600; color: var(--black); margin-bottom: 4px;">Batteries</div>
                        <div style="font-size: 11px; color: var(--gray-600);">Monthly delivery</div>
                    </div>
                    <div style="background: var(--gray-50); padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);">
                        <div style="font-size: 12px; font-weight: 600; color: var(--black); margin-bottom: 4px;">Paper Products</div>
                        <div style="font-size: 11px; color: var(--gray-600);">Bi-weekly delivery</div>
                    </div>
                </div>

                <div style="background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%); padding: 24px; border-radius: 12px; color: #fff;">
                    <div style="display: flex; gap: 16px; align-items: center;">
                        <i class="fas fa-percentage" style="font-size: 36px; opacity: 0.9;"></i>
                        <div>
                            <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 4px;">Save 5% on Every Order</h4>
                            <p style="font-size: 13px; opacity: 0.9; margin: 0;">Auto-Reorder subscribers get an automatic 5% discount on all scheduled shipments.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Manage Your Auto-Reorders</h2>
                
                <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 16px;">Full Control Over Your Schedule</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="padding: 10px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 10px;"></i>
                            Change quantities anytime
                        </li>
                        <li style="padding: 10px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 10px;"></i>
                            Adjust delivery frequency
                        </li>
                        <li style="padding: 10px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 10px;"></i>
                            Skip upcoming deliveries
                        </li>
                        <li style="padding: 10px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 10px;"></i>
                            Add/remove items
                        </li>
                        <li style="padding: 10px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 10px;"></i>
                            Pause subscriptions temporarily
                        </li>
                        <li style="padding: 10px 0; font-size: 13px; color: var(--gray-600); display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 10px;"></i>
                            Cancel anytime - no fees
                        </li>
                    </ul>
                </div>

                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Ready to Get Started?</h4>
                    <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">
                        Log into your account to set up Auto-Reorder for your regularly purchased items.
                    </p>
                    <a href="my-account.php" class="btn btn-primary btn-lg" style="width: 100%;"><i class="fas fa-user"></i> Go to My Account</a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
