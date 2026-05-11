<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'All Industries - Synteco';
$pageDescription = 'Synteco industrial solutions for every industry. Manufacturing, healthcare, government, education, and more.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>All Industries</span>
        </div>
        <h1 style="font-size: 42px;">Industry Solutions</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Tailored industrial supply solutions for every sector.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Industries We Serve</h2>
            <p>Specialized solutions for your specific industry needs</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto;">
            <div style="background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer;" onclick="showToast('Exploring Manufacturing solutions...', 'info');">
                <div style="height: 160px; background: linear-gradient(135deg, #37474f 0%, #546e7a 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff;">
                    <i class="fas fa-industry" style="font-size: 48px; margin-bottom: 12px; opacity: 0.9;"></i>
                    <h3 style="font-size: 18px; font-weight: 800;">Manufacturing</h3>
                </div>
                <div style="padding: 20px;">
                    <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                        Keep your production lines running with MRO supplies, tools, safety equipment, and maintenance solutions designed for manufacturing environments.
                    </p>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 16px;">
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">MRO Supplies</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Tools</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Safety</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">KeepStock</span>
                    </div>
                    <a href="#" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">Learn More <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
                </div>
            </div>

            <div style="background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer;" onclick="showToast('Exploring Healthcare solutions...', 'info');">
                <div style="height: 160px; background: linear-gradient(135deg, #00695c 0%, #00897b 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff;">
                    <i class="fas fa-hospital" style="font-size: 48px; margin-bottom: 12px; opacity: 0.9;"></i>
                    <h3 style="font-size: 18px; font-weight: 800;">Healthcare</h3>
                </div>
                <div style="padding: 20px;">
                    <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                        HIPAA-compliant supply solutions for hospitals, clinics, and healthcare facilities. From PPE to facility maintenance supplies.
                    </p>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 16px;">
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">PPE</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Janitorial</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Lighting</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">HVAC</span>
                    </div>
                    <a href="#" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">Learn More <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
                </div>
            </div>

            <div style="background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer;" onclick="showToast('Exploring Government solutions...', 'info');">
                <div style="height: 160px; background: linear-gradient(135deg, #1565c0 0%, #1976d2 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff;">
                    <i class="fas fa-landmark" style="font-size: 48px; margin-bottom: 12px; opacity: 0.9;"></i>
                    <h3 style="font-size: 18px; font-weight: 800;">Government</h3>
                </div>
                <div style="padding: 20px;">
                    <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                        GSA-approved and government-contract ready solutions. Dedicated support for federal, state, and local government agencies.
                    </p>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 16px;">
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">GSA</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Contracts</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Military</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Public Works</span>
                    </div>
                    <a href="#" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">Learn More <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
                </div>
            </div>

            <div style="background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer;" onclick="showToast('Exploring Education solutions...', 'info');">
                <div style="height: 160px; background: linear-gradient(135deg, #7b1fa2 0%, #8e24aa 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff;">
                    <i class="fas fa-graduation-cap" style="font-size: 48px; margin-bottom: 12px; opacity: 0.9;"></i>
                    <h3 style="font-size: 18px; font-weight: 800;">Education</h3>
                </div>
                <div style="padding: 20px;">
                    <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                        Supply solutions for K-12, colleges, universities, and trade schools. From lab supplies to facility maintenance.
                    </p>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 16px;">
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Lab Supplies</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Tools</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Safety</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Janitorial</span>
                    </div>
                    <a href="#" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">Learn More <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
                </div>
            </div>

            <div style="background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer;" onclick="showToast('Exploring Construction solutions...', 'info');">
                <div style="height: 160px; background: linear-gradient(135deg, #e65100 0%, #ff6f00 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff;">
                    <i class="fas fa-hard-hat" style="font-size: 48px; margin-bottom: 12px; opacity: 0.9;"></i>
                    <h3 style="font-size: 18px; font-weight: 800;">Construction</h3>
                </div>
                <div style="padding: 20px;">
                    <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                        Professional-grade tools, safety equipment, and job site supplies for construction companies and contractors.
                    </p>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 16px;">
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Power Tools</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Safety</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Fasteners</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Electrical</span>
                    </div>
                    <a href="#" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">Learn More <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
                </div>
            </div>

            <div style="background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer;" onclick="showToast('Exploring Property Management solutions...', 'info');">
                <div style="height: 160px; background: linear-gradient(135deg, #546e7a 0%, #78909c 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff;">
                    <i class="fas fa-building" style="font-size: 48px; margin-bottom: 12px; opacity: 0.9;"></i>
                    <h3 style="font-size: 18px; font-weight: 800;">Property Management</h3>
                </div>
                <div style="padding: 20px;">
                    <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                        Complete facility maintenance supplies for apartments, office buildings, and commercial properties.
                    </p>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 16px;">
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Janitorial</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Electrical</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Plumbing</span>
                        <span style="font-size: 11px; background: #fff; color: var(--gray-600); padding: 4px 10px; border-radius: 20px; border: 1px solid var(--gray-200);">Lighting</span>
                    </div>
                    <a href="#" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">Learn More <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>Why Partner With Synteco</h2>
            <p>Industry-leading service and solutions</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; max-width: 1100px; margin: 0 auto;">
            <div style="text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; border: 1px solid var(--gray-200);">
                    <i class="fas fa-user-tie" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Dedicated Support</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Industry-specific account managers and product specialists</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; border: 1px solid var(--gray-200);">
                    <i class="fas fa-box-open" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Vast Selection</h4>
                <p style="font-size: 12px; color: var(--gray-600);">1.5M+ products tailored to your industry needs</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; border: 1px solid var(--gray-200);">
                    <i class="fas fa-shipping-fast" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Fast Delivery</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Same-day pickup, next-day delivery available</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; border: 1px solid var(--gray-200);">
                    <i class="fas fa-tags" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Competitive Pricing</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Volume discounts and special pricing programs</p>
            </div>
        </div>
    </div>
</div>

<div class="register-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Get Started?</h2>
            <p>Create a business account and get access to industry-specific pricing, dedicated support, and custom solutions.</p>
            <div style="display: flex; gap: 16px; justify-content: center; margin-top: 28px;">
                <a href="register.php" class="btn btn-primary btn-lg"><i class="fas fa-user-plus"></i> Create Business Account</a>
                <a href="contact.php" class="btn btn-outline btn-lg" style="border-color: rgba(255,255,255,0.5); color: #fff;"><i class="fas fa-headset"></i> Contact Sales</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
