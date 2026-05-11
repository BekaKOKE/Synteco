<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Terms of Access - Synteco';
$pageDescription = 'Review Synteco\'s Terms of Access for using our website and online services.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Terms of Access</span>
        </div>
        <h1 style="font-size: 42px;">Terms of Access</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Please read these terms carefully before using our website.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            
            <div style="background: var(--gray-50); padding: 32px; border-radius: 12px; margin-bottom: 40px;">
                <h3 style="font-size: 16px; color: var(--black); margin-bottom: 8px;">Last Updated</h3>
                <p style="font-size: 14px; color: var(--gray-600);">January 1, 2026</p>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">1. Acceptance of Terms</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    By accessing and using the Synteco website ("Site"), you accept and agree to be bound by these Terms of Access.
                </p>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    If you do not agree to these terms, please do not use this Site.
                </p>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">2. Use of the Site</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    This Site is intended for business and commercial use by registered customers of Synteco.
                </p>
                <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 8px; padding: 20px; margin-top: 16px;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 12px;">You agree not to:</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="padding: 8px 0; border-bottom: 1px solid var(--gray-100);"><i class="fas fa-times" style="color: #c62828; margin-right: 10px;"></i>Use the Site for any unlawful purpose</li>
                        <li style="padding: 8px 0; border-bottom: 1px solid var(--gray-100);"><i class="fas fa-times" style="color: #c62828; margin-right: 10px;"></i>Attempt to gain unauthorized access to our systems</li>
                        <li style="padding: 8px 0; border-bottom: 1px solid var(--gray-100);"><i class="fas fa-times" style="color: #c62828; margin-right: 10px;"></i>Interfere with or disrupt the Site's operation</li>
                        <li style="padding: 8px 0; border-bottom: 1px solid var(--gray-100);"><i class="fas fa-times" style="color: #c62828; margin-right: 10px;"></i>Scrape, copy, or distribute content without permission</li>
                        <li style="padding: 8px 0;"><i class="fas fa-times" style="color: #c62828; margin-right: 10px;"></i>Use any automated systems to access the Site</li>
                    </ul>
                </div>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">3. Account Security</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    You are responsible for maintaining the confidentiality of your account credentials.
                </p>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    Notify us immediately of any unauthorized use of your account.
                </p>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">4. Product Information</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    While we strive for accuracy, Synteco does not warrant that product descriptions, pricing, or other content is error-free.
                </p>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    Prices and availability are subject to change without notice.
                </p>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">5. Limitation of Liability</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    Synteco shall not be liable for any indirect, incidental, special, or consequential damages arising from your use of this Site.
                </p>
            </div>

            <div>
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">6. Contact</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    Questions about these terms? Contact our legal department at <a href="mailto:legal@synteco.local" style="color: var(--red);">legal@synteco.local</a> or call 1-800-SYNTECO.
                </p>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
