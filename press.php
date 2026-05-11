<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Press Room - Synteco';
$pageDescription = 'Synteco press releases, media resources, and company news.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Press Room</span>
        </div>
        <h1 style="font-size: 42px;">Press Room</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Latest news, press releases, and media resources.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Recent Press Releases</h2>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            
            <div style="padding: 28px; border-bottom: 1px solid var(--gray-200); margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--gray-500); font-weight: 600; margin-bottom: 8px;">JANUARY 15, 2026</div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Synteco Announces Record Fourth Quarter Results, Full Year Revenue Exceeds $2.8 Billion</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6; margin-bottom: 12px;">
                    Synteco Industrial Supply today reported strong fourth quarter and full year 2025 results, with record sales growth driven by e-commerce expansion and new customer acquisitions.
                </p>
                <a href="#" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">Read Full Release <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
            </div>

            <div style="padding: 28px; border-bottom: 1px solid var(--gray-200); margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--gray-500); font-weight: 600; margin-bottom: 8px;">DECEMBER 10, 2025</div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Synteco Opens New Distribution Center in Phoenix, Expanding Southwest Coverage</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6; margin-bottom: 12px;">
                    New 300,000 sq ft facility will serve customers in Arizona, Nevada, New Mexico, and Southern California with faster delivery times.
                </p>
                <a href="#" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">Read Full Release <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
            </div>

            <div style="padding: 28px; border-bottom: 1px solid var(--gray-200); margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--gray-500); font-weight: 600; margin-bottom: 8px;">NOVEMBER 20, 2025</div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Synteco Launches AI-Powered Product Recommendation Engine</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6; margin-bottom: 12px;">
                    New machine learning platform helps customers find the right products faster, with personalized recommendations based on purchase history and industry trends.
                </p>
                <a href="#" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">Read Full Release <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
            </div>

            <div style="padding: 28px; border-bottom: 1px solid var(--gray-200); margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--gray-500); font-weight: 600; margin-bottom: 8px;">OCTOBER 5, 2025</div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Synteco Announces $50M Sustainability Initiative, Targets Carbon Neutrality by 2035</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6; margin-bottom: 12px;">
                    Company commits to fleet electrification, solar installation at all facilities, and expanded eco-friendly product offerings.
                </p>
                <a href="#" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">Read Full Release <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
            </div>

        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>Media Contacts</h2>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; max-width: 800px; margin: 0 auto;">
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 16px;">Press Inquiries</h3>
                <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 12px;">Sarah Chen, Director of Communications</p>
                <p style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-envelope" style="color: var(--red); margin-right: 8px;"></i>media@synteco.local</p>
                <p style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-phone" style="color: var(--red); margin-right: 8px;"></i>1-312-555-PRESS</p>
            </div>
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 16px;">Media Kit</h3>
                <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 16px;">Download our brand guidelines, logos, and company fact sheet.</p>
                <a href="#" class="btn btn-outline"><i class="fas fa-download"></i> Download Media Kit</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
