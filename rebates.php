<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Rebates - Synteco';
$pageDescription = 'Synteco rebate center. Find and submit manufacturer rebates on qualifying purchases.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Rebates</span>
        </div>
        <h1 style="font-size: 42px;">Rebate Center</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Find and submit manufacturer rebates on qualifying purchases.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Available Rebates</h2>
            <p>Current manufacturer rebate offers</p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div style="background: #e8f5e9; border: 1px solid #a5d6a7; border-radius: 12px; padding: 24px; margin-bottom: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                    <div style="display: flex; gap: 20px; align-items: center;">
                        <div style="width: 72px; height: 72px; background: #fff; border-radius: 8px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--gray-200);">
                            <i class="fas fa-bolt" style="font-size: 28px; color: #1976d2;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 4px;">Energy-Efficient Lighting Rebate</h3>
                            <p style="font-size: 13px; color: var(--gray-600);">LED Lighting & Fixtures</p>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 28px; font-weight: 900; color: #2e7d32;">Up to $50</div>
                        <div style="font-size: 12px; color: var(--gray-500);">Per qualifying item</div>
                    </div>
                </div>
                <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 12px;">
                    Get rebates on qualifying energy-efficient LED lighting products from Philips, Sylvania, and GE. Valid on purchases made through June 30, 2026.
                </p>
                <div style="display: flex; gap: 12px; align-items: center;">
                    <span style="font-size: 11px; background: #c8e6c9; color: #2e7d32; padding: 4px 10px; border-radius: 20px; font-weight: 600;"><i class="fas fa-calendar" style="margin-right: 4px;"></i>Expires: Jun 30, 2026</span>
                    <button class="btn btn-outline" style="padding: 6px 14px; font-size: 12px;" onclick="showToast('Rebate form downloading...', 'info');"><i class="fas fa-download"></i> Get Rebate Form</button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; padding: 24px; margin-bottom: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                    <div style="display: flex; gap: 20px; align-items: center;">
                        <div style="width: 72px; height: 72px; background: var(--gray-50); border-radius: 8px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--gray-200);">
                            <i class="fas fa-tools" style="font-size: 28px; color: var(--red);"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 4px;">DeWalt Trade-In Program</h3>
                            <p style="font-size: 13px; color: var(--gray-600);">Power Tools & Equipment</p>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 28px; font-weight: 900; color: #2e7d32;">Up to $100</div>
                        <div style="font-size: 12px; color: var(--gray-500);">Trade-in value</div>
                    </div>
                </div>
                <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 12px;">
                    Trade in your old power tools and receive instant rebates on new DeWalt purchases. Available in-store at participating locations.
                </p>
                <div style="display: flex; gap: 12px; align-items: center;">
                    <span style="font-size: 11px; background: #c8e6c9; color: #2e7d32; padding: 4px 10px; border-radius: 20px; font-weight: 600;"><i class="fas fa-calendar" style="margin-right: 4px;"></i>Expires: Dec 31, 2026</span>
                    <a href="find-branch.php" class="btn btn-outline" style="padding: 6px 14px; font-size: 12px;"><i class="fas fa-map-marker-alt"></i> Find a Branch</a>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; padding: 24px; margin-bottom: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                    <div style="display: flex; gap: 20px; align-items: center;">
                        <div style="width: 72px; height: 72px; background: var(--gray-50); border-radius: 8px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--gray-200);">
                            <i class="fas fa-snowflake" style="font-size: 28px; color: #1976d2;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 4px;">HVAC Energy Efficiency Rebate</h3>
                            <p style="font-size: 13px; color: var(--gray-600);">Commercial HVAC Equipment</p>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 28px; font-weight: 900; color: #2e7d32;">Up to $500</div>
                        <div style="font-size: 12px; color: var(--gray-500);">Per system</div>
                    </div>
                </div>
                <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 12px;">
                    Rebates available on high-efficiency HVAC systems and components from Carrier, Trane, Lennox, and other leading manufacturers.
                </p>
                <div style="display: flex; gap: 12px; align-items: center;">
                    <span style="font-size: 11px; background: #c8e6c9; color: #2e7d32; padding: 4px 10px; border-radius: 20px; font-weight: 600;"><i class="fas fa-calendar" style="margin-right: 4px;"></i>Expires: Sep 30, 2026</span>
                    <button class="btn btn-outline" style="padding: 6px 14px; font-size: 12px;" onclick="showToast('Rebate details opening...', 'info');"><i class="fas fa-info-circle"></i> Learn More</button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; padding: 24px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                    <div style="display: flex; gap: 20px; align-items: center;">
                        <div style="width: 72px; height: 72px; background: var(--gray-50); border-radius: 8px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--gray-200);">
                            <i class="fas fa-battery-full" style="font-size: 28px; color: #7b1fa2;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 4px;">Cordless System Bundle Rebate</h3>
                            <p style="font-size: 13px; color: var(--gray-600);">Milwaukee M18 & DeWalt 20V MAX</p>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 28px; font-weight: 900; color: #2e7d32;">$50 - $200</div>
                        <div style="font-size: 12px; color: var(--gray-500);">Per bundle</div>
                    </div>
                </div>
                <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 12px;">
                    Purchase qualifying tool bundles and receive instant mail-in rebates. Valid on kits with 2+ tools or battery/charger combos.
                </p>
                <div style="display: flex; gap: 12px; align-items: center;">
                    <span style="font-size: 11px; background: #c8e6c9; color: #2e7d32; padding: 4px 10px; border-radius: 20px; font-weight: 600;"><i class="fas fa-calendar" style="margin-right: 4px;"></i>Expires: Mar 31, 2026</span>
                    <button class="btn btn-outline" style="padding: 6px 14px; font-size: 12px;" onclick="showToast('Rebate form downloading...', 'info');"><i class="fas fa-download"></i> Get Form</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>How to Submit a Rebate</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto;">
            <div style="text-align: center;">
                <div style="width: 56px; height: 56px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #fff; font-weight: 800; font-size: 20px;">1</div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Make Purchase</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Buy qualifying products at Synteco</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 56px; height: 56px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #fff; font-weight: 800; font-size: 20px;">2</div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Download Form</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Get the appropriate rebate form</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 56px; height: 56px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #fff; font-weight: 800; font-size: 20px;">3</div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Submit Documents</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Mail form with your receipt</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 56px; height: 56px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #fff; font-weight: 800; font-size: 20px;">4</div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Get Rebate</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Receive check or prepaid card</p>
            </div>
        </div>
    </div>
</div>

<div style="padding: 40px 0; background: #fff;">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto; text-align: center; background: var(--gray-50); padding: 32px; border-radius: 12px; border: 1px solid var(--gray-200);">
            <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 12px;">Questions About Rebates?</h3>
            <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 20px;">
                Our customer service team can help you with rebate submissions and status inquiries.
            </p>
            <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                <a href="help.php" class="btn btn-primary"><i class="fas fa-headset"></i> Help Center</a>
                <a href="contact.php" class="btn btn-outline"><i class="fas fa-envelope"></i> Contact Us</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
