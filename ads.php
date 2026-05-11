<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'About Our Ads - Synteco';
$pageDescription = 'Learn about Synteco\'s advertising practices and third-party advertising networks.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>About Our Ads</span>
        </div>
        <h1 style="font-size: 42px;">About Our Ads</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Understanding how we use advertising on our site.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            
            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">Advertising on Synteco</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    Synteco may display advertisements from third-party advertising networks. These ads help us keep our prices competitive and support our website operations.
                </p>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">Third-Party Advertising</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    Third-party ad servers or ad networks may use cookies, web beacons, or similar technologies to measure the effectiveness of their advertisements and/or to personalize the advertising content you see.
                </p>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    We do not control these third-party technologies and their use is governed by the privacy policies of the third parties using such technologies.
                </p>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">Opting Out</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    You may be able to opt out of personalized advertising through:
                </p>
                <ul style="list-style: none; padding: 0; margin: 0 0 0 20px;">
                    <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Network Advertising Initiative (NAI) opt-out page</li>
                    <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Digital Advertising Alliance (DAA) Self-Regulatory Program</li>
                    <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Your browser's cookie settings</li>
                </ul>
            </div>

            <div>
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">Questions?</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    If you have questions about our advertising practices, please <a href="contact.php" style="color: var(--red);">contact us</a>.
                </p>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
