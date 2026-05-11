<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Privacy Policy - Synteco';
$pageDescription = 'Learn how Synteco collects, uses, and protects your personal information.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Privacy Policy</span>
        </div>
        <h1 style="font-size: 42px;">Privacy Policy</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Your privacy matters to us. Here's how we protect your data.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 40px;">
                <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 28px; border-radius: 12px; text-align: center;">
                    <i class="fas fa-lock" style="font-size: 36px; color: #fff; margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: #fff; margin-bottom: 4px;">Secure</h4>
                    <p style="font-size: 12px; color: rgba(255,255,255,0.7);">256-bit SSL encryption</p>
                </div>
                <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 28px; border-radius: 12px; text-align: center;">
                    <i class="fas fa-user-shield" style="font-size: 36px; color: #fff; margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: #fff; margin-bottom: 4px;">Your Data</h4>
                    <p style="font-size: 12px; color: rgba(255,255,255,0.7);">We never sell your data</p>
                </div>
                <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 28px; border-radius: 12px; text-align: center;">
                    <i class="fas fa-cookie-bite" style="font-size: 36px; color: #fff; margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: #fff; margin-bottom: 4px;">Cookies</h4>
                    <p style="font-size: 12px; color: rgba(255,255,255,0.7);">Manageable preferences</p>
                </div>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">1. Information We Collect</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 16px;">
                    We collect information you provide directly and automatically when you use our services.
                </p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200);">
                        <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 12px;"><i class="fas fa-user" style="color: var(--red); margin-right: 8px;"></i>Information You Provide</h4>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="padding: 6px 0; font-size: 13px; color: var(--gray-600);">Name, email, username</li>
                            <li style="padding: 6px 0; font-size: 13px; color: var(--gray-600);">Billing & shipping address</li>
                            <li style="padding: 6px 0; font-size: 13px; color: var(--gray-600);">Payment information</li>
                            <li style="padding: 6px 0; font-size: 13px; color: var(--gray-600);">Phone number</li>
                        </ul>
                    </div>
                    <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200);">
                        <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 12px;"><i class="fas fa-chart-line" style="color: var(--red); margin-right: 8px;"></i>Automatically Collected</h4>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="padding: 6px 0; font-size: 13px; color: var(--gray-600);">IP address & browser type</li>
                            <li style="padding: 6px 0; font-size: 13px; color: var(--gray-600);">Device information</li>
                            <li style="padding: 6px 0; font-size: 13px; color: var(--gray-600);">Pages visited</li>
                            <li style="padding: 6px 0; font-size: 13px; color: var(--gray-600);">Search queries</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">2. How We Use Your Information</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    We use your information to:
                </p>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin-top: 16px;">
                    <div style="background: #fff; padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);"><i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 8px;"></i><strong>Process orders & payments</strong></div>
                    <div style="background: #fff; padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);"><i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 8px;"></i><strong>Send order updates</strong></div>
                    <div style="background: #fff; padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);"><i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 8px;"></i><strong>Improve our services</strong></div>
                    <div style="background: #fff; padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);"><i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 8px;"></i><strong>Personalize experience</strong></div>
                    <div style="background: #fff; padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);"><i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 8px;"></i><strong>Prevent fraud</strong></div>
                    <div style="background: #fff; padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);"><i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 8px;"></i><strong>Communicate offers</strong></div>
                </div>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">3. Data Sharing</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    We do not sell your personal information. We may share data with:
                </p>
                <ul style="list-style: none; padding: 0; margin: 0 0 0 20px;">
                    <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Service providers (shipping, payment processing)</li>
                    <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>When required by law</li>
                    <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>To protect our rights</li>
                </ul>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">4. Your Rights</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    You have the right to access, correct, or delete your personal information.
                </p>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    Contact <a href="contact.php" style="color: var(--red);">contact us</a> to exercise your rights or update preferences.
                </p>
            </div>

            <div>
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">5. Contact</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    Questions? Email our Privacy Officer at <a href="mailto:privacy@synteco.local" style="color: var(--red);">privacy@synteco.local</a>
                </p>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
