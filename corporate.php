<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Corporate Responsibility - Synteco';
$pageDescription = 'Synteco is committed to sustainability, community, and ethical business practices.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Corporate Responsibility</span>
        </div>
        <h1 style="font-size: 42px;">Corporate Responsibility</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Doing good while doing business. Our commitment to sustainability and community.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Our Commitments</h2>
        </div>
        <div class="value-grid" style="grid-template-columns: repeat(3, 1fr);">
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-leaf"></i></div>
                <h3>Sustainability</h3>
                <p>Reducing our environmental footprint through green initiatives and eco-friendly operations.</p>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-users"></i></div>
                <h3>Community</h3>
                <p>Investing in the communities where we live and work through charitable giving and volunteerism.</p>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-handshake"></i></div>
                <h3>Ethics</h3>
                <p>Conducting business with the highest standards of integrity, transparency, and fair dealing.</p>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div>
                <h2 style="font-size: 28px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Environmental Initiatives</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 20px;">
                    We're committed to reducing our environmental impact through sustainable business practices.
                </p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div style="background: #fff; padding: 20px; border-radius: 12px; border: 1px solid var(--gray-200);">
                        <div style="font-size: 32px; font-weight: 900; color: #2e7d32; margin-bottom: 4px;">42%</div>
                        <div style="font-size: 13px; color: var(--gray-600);">Carbon Reduction</div>
                    </div>
                    <div style="background: #fff; padding: 20px; border-radius: 12px; border: 1px solid var(--gray-200);">
                        <div style="font-size: 32px; font-weight: 900; color: #2e7d32; margin-bottom: 4px;">68%</div>
                        <div style="font-size: 13px; color: var(--gray-600);">Waste Recycled</div>
                    </div>
                    <div style="background: #fff; padding: 20px; border-radius: 12px; border: 1px solid var(--gray-200);">
                        <div style="font-size: 32px; font-weight: 900; color: #2e7d32; margin-bottom: 4px;">12MW</div>
                        <div style="font-size: 13px; color: var(--gray-600);">Solar Capacity</div>
                    </div>
                    <div style="background: #fff; padding: 20px; border-radius: 12px; border: 1px solid var(--gray-200);">
                        <div style="font-size: 32px; font-weight: 900; color: #2e7d32; margin-bottom: 4px;">35%</div>
                        <div style="font-size: 13px; color: var(--gray-600);">EV Fleet</div>
                    </div>
                </div>
            </div>
            <div>
                <div style="background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%); padding: 40px; border-radius: 16px; color: #fff;">
                    <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 20px;">Green Products Program</h3>
                    <p style="font-size: 14px; line-height: 1.8; opacity: 0.9; margin-bottom: 20px;">
                        We offer over 50,000 eco-friendly products including energy-efficient lighting, water-saving fixtures, and sustainable materials.
                    </p>
                    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.2); padding: 8px 16px; border-radius: 20px; font-size: 12px;">Energy Star</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 8px 16px; border-radius: 20px; font-size: 12px;">EPEAT</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 8px 16px; border-radius: 20px; font-size: 12px;">LEED</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 8px 16px; border-radius: 20px; font-size: 12px;">FSC Certified</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Giving Back</h2>
            <p>Investing in our communities</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto;">
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="font-size: 48px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-hands-helping"></i></div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 12px;">United Way</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">Annual workplace giving campaign supporting local United Way chapters across the nation.</p>
            </div>
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="font-size: 48px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-tools"></i></div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Skills-Based Volunteering</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">Employees donate professional expertise to nonprofits, including facility improvement projects.</p>
            </div>
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="font-size: 48px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-graduation-cap"></i></div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 12px;">STEM Education</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">Supporting technical education programs and scholarships for future trades professionals.</p>
            </div>
        </div>
    </div>
</div>

<div class="register-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Learn More About Our Values</h2>
            <p>Discover how Synteco is building a better future through responsible business practices.</p>
            <div style="display: flex; gap: 16px; justify-content: center; margin-top: 28px;">
                <a href="about.php" class="btn btn-primary btn-lg"><i class="fas fa-info-circle"></i> About Synteco</a>
                <a href="diversity.php" class="btn btn-outline btn-lg" style="border-color: rgba(255,255,255,0.5); color: #fff;">Inclusion & Diversity</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
