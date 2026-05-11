<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Careers - Join Synteco';
$pageDescription = 'Build your career at Synteco. Explore job openings in industrial supply, sales, logistics, and more.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Careers</span>
        </div>
        <h1 style="font-size: 42px;">Careers at Synteco</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Join a team that keeps industry running. Build your career with Synteco.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Why Work at Synteco</h2>
        </div>
        <div class="value-grid" style="grid-template-columns: repeat(4, 1fr);">
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-hand-holding-usd"></i></div>
                <h3>Competitive Pay</h3>
                <p>Market-based compensation with performance bonuses.</p>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-heartbeat"></i></div>
                <h3>Great Benefits</h3>
                <p>Medical, dental, vision, and 401(k) matching.</p>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-graduation-cap"></i></div>
                <h3>Career Growth</h3>
                <p>Training programs and advancement opportunities.</p>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-balance-scale"></i></div>
                <h3>Work-Life Balance</h3>
                <p>Flexible schedules and paid time off.</p>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>Current Openings</h2>
            <p>Find your next opportunity</p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            
            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 16px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <div>
                        <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Outside Sales Representative</h3>
                        <div style="display: flex; gap: 16px; margin-bottom: 12px;">
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-map-marker-alt" style="color: var(--red); margin-right: 4px;"></i> Chicago, IL</span>
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-briefcase" style="color: var(--red); margin-right: 4px;"></i> Full-time</span>
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-dollar-sign" style="color: var(--red); margin-right: 4px;"></i> $70K-95K + Commission</span>
                        </div>
                        <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">
                            Develop new business accounts and manage existing customer relationships. Excellent base + uncapped commission.
                        </p>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>
            </div>

            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 16px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <div>
                        <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Warehouse Operations Manager</h3>
                        <div style="display: flex; gap: 16px; margin-bottom: 12px;">
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-map-marker-alt" style="color: var(--red); margin-right: 4px;"></i> Dallas, TX</span>
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-briefcase" style="color: var(--red); margin-right: 4px;"></i> Full-time</span>
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-dollar-sign" style="color: var(--red); margin-right: 4px;"></i> $85K-110K</span>
                        </div>
                        <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">
                            Manage daily warehouse operations including receiving, picking, shipping, and inventory control for our distribution center.
                        </p>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>
            </div>

            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 16px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <div>
                        <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Senior Software Engineer</h3>
                        <div style="display: flex; gap: 16px; margin-bottom: 12px;">
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-map-marker-alt" style="color: var(--red); margin-right: 4px;"></i> Remote / Chicago</span>
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-briefcase" style="color: var(--red); margin-right: 4px;"></i> Full-time</span>
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-dollar-sign" style="color: var(--red); margin-right: 4px;"></i> $120K-160K</span>
                        </div>
                        <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">
                            Build and maintain our e-commerce platform serving 500K+ business customers. Experience with PHP, MySQL, and modern JS frameworks.
                        </p>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>
            </div>

            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 16px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <div>
                        <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Product Specialist - Electrical</h3>
                        <div style="display: flex; gap: 16px; margin-bottom: 12px;">
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-map-marker-alt" style="color: var(--red); margin-right: 4px;"></i> Atlanta, GA</span>
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-briefcase" style="color: var(--red); margin-right: 4px;"></i> Full-time</span>
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-dollar-sign" style="color: var(--red); margin-right: 4px;"></i> $55K-75K</span>
                        </div>
                        <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">
                            Provide technical expertise on electrical products to customers and sales teams. Electrical engineering or field experience preferred.
                        </p>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>
            </div>

            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 16px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <div>
                        <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Branch Manager</h3>
                        <div style="display: flex; gap: 16px; margin-bottom: 12px;">
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-map-marker-alt" style="color: var(--red); margin-right: 4px;"></i> Phoenix, AZ</span>
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-briefcase" style="color: var(--red); margin-right: 4px;"></i> Full-time</span>
                            <span style="font-size: 13px; color: var(--gray-600);"><i class="fas fa-dollar-sign" style="color: var(--red); margin-right: 4px;"></i> $95K-130K + Bonus</span>
                        </div>
                        <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">
                            Lead branch operations including sales, customer service, and warehouse functions. P&L responsibility with bonus potential.
                        </p>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="register-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Don't See the Right Role?</h2>
            <p>Send us your resume. We're always looking for talented individuals to join our team.</p>
            <div style="display: flex; gap: 16px; justify-content: center; margin-top: 28px;">
                <a href="contact.php" class="btn btn-primary btn-lg"><i class="fas fa-envelope"></i> Contact HR</a>
                <a href="about.php" class="btn btn-outline btn-lg" style="border-color: rgba(255,255,255,0.5); color: #fff;">Learn About Us</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
