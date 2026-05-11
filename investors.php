<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Investor Relations - Synteco';
$pageDescription = 'Synteco investor relations information including financial reports, stock information, and corporate governance.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Investor Relations</span>
        </div>
        <h1 style="font-size: 42px;">Investor Relations</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Financial information and investor resources for Synteco Industrial Supply.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 60px; align-items: start;">
            <div>
                <h2 style="font-size: 28px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Company Overview</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 16px;">
                    Synteco is a leading distributor of industrial supplies, MRO products, and equipment serving over 500,000 business customers across the United States. With more than 1.5 million products available through our e-commerce platform and 200+ branch locations, we keep industry running.
                </p>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    Founded in 1985, Synteco has grown from a single local supply store to a national distributor with six distribution centers and a team of over 4,000 dedicated employees.
                </p>
            </div>
            <div>
                <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 28px; border-radius: 12px; color: #fff;">
                    <h3 style="font-size: 16px; font-weight: 700; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(255,255,255,0.2);">At a Glance</h3>
                    <div style="margin-bottom: 16px;">
                        <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">Annual Revenue</div>
                        <div style="font-size: 24px; font-weight: 900;">$2.8B</div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">Employees</div>
                        <div style="font-size: 24px; font-weight: 900;">4,200+</div>
                    </div>
                    <div>
                        <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">Products</div>
                        <div style="font-size: 24px; font-weight: 900;">1.5M+</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>Investor Resources</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto;">
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="font-size: 36px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-chart-bar"></i></div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Financial Reports</h3>
                <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">Annual reports, 10-K, 10-Q filings</p>
                <a href="#" class="btn btn-outline">View Reports</a>
            </div>
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="font-size: 36px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-calendar-alt"></i></div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Events & Presentations</h3>
                <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">Earnings calls, investor conferences</p>
                <a href="#" class="btn btn-outline">View Events</a>
            </div>
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="font-size: 36px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-gavel"></i></div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Governance</h3>
                <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">Board of directors, committee charters</p>
                <a href="#" class="btn btn-outline">Governance Docs</a>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Contact Investor Relations</h2>
        </div>
        <div style="max-width: 600px; margin: 0 auto; text-align: center;">
            <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 28px;">
                For investor inquiries, please contact our Investor Relations team.
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <i class="fas fa-envelope" style="font-size: 24px; color: var(--red); margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Email</h4>
                    <p style="font-size: 13px; color: var(--gray-600);">investors@synteco.local</p>
                </div>
                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <i class="fas fa-phone" style="font-size: 24px; color: var(--red); margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Phone</h4>
                    <p style="font-size: 13px; color: var(--gray-600);">1-800-SYNTECO (IR)</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
