<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Technical Education - Synteco';
$pageDescription = 'Synteco technical education resources, training programs, and industry knowledge.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Technical Education</span>
        </div>
        <h1 style="font-size: 42px;">Technical Education</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Learn, train, and grow with our technical resources and industry expertise.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Learning Resources</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto;">
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-play-circle"></i></div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Product Training Videos</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">Watch expert demonstrations of product features, installation guides, and best practices.</p>
                <a href="webinars.php" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">Browse Videos <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
            </div>
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-file-alt"></i></div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Technical Documents</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">Access product specs, safety data sheets, installation manuals, and compliance documents.</p>
                <a href="#" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">View Documents <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
            </div>
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-certificate"></i></div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Certification Programs</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">Industry-recognized certifications for safety, electrical, HVAC, and maintenance professionals.</p>
                <a href="webinars.php" style="color: var(--red); font-size: 13px; font-weight: 600; text-decoration: none;">View Programs <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></a>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>Featured Training Topics</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; max-width: 1000px; margin: 0 auto;">
            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); display: flex; gap: 20px; align-items: flex-start;">
                <div style="width: 48px; height: 48px; background: #e3f2fd; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-bolt" style="font-size: 20px; color: #1976d2;"></i>
                </div>
                <div>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Electrical Safety & Lockout/Tagout</h4>
                    <p style="font-size: 13px; color: var(--gray-600); line-height: 1.5;">OSHA-compliant training covering hazardous energy control and electrical safety procedures.</p>
                </div>
            </div>
            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); display: flex; gap: 20px; align-items: flex-start;">
                <div style="width: 48px; height: 48px; background: #e8f5e9; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-hard-hat" style="font-size: 20px; color: #2e7d32;"></i>
                </div>
                <div>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">PPE Selection & Maintenance</h4>
                    <p style="font-size: 13px; color: var(--gray-600); line-height: 1.5;">Learn to select, inspect, and maintain personal protective equipment for your workplace.</p>
                </div>
            </div>
            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); display: flex; gap: 20px; align-items: flex-start;">
                <div style="width: 48px; height: 48px; background: #fff3e0; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-snowflake" style="font-size: 20px; color: #ef6c00;"></i>
                </div>
                <div>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">HVAC System Maintenance</h4>
                    <p style="font-size: 13px; color: var(--gray-600); line-height: 1.5;">Preventive maintenance best practices for heating, ventilation, and air conditioning systems.</p>
                </div>
            </div>
            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); display: flex; gap: 20px; align-items: flex-start;">
                <div style="width: 48px; height: 48px; background: #fce4ec; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-tools" style="font-size: 20px; color: #c2185b;"></i>
                </div>
                <div>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Precision Measuring Tools</h4>
                    <p style="font-size: 13px; color: var(--gray-600); line-height: 1.5;">Master the use of calipers, micrometers, and precision measurement instruments.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Educational Partnerships</h2>
        </div>
        <div style="max-width: 900px; margin: 0 auto; text-align: center;">
            <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 32px;">
                Synteco partners with technical schools, community colleges, and apprenticeship programs to support the next generation of trades professionals.
            </p>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <i class="fas fa-university" style="font-size: 28px; color: var(--red); margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">School Programs</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Equipment donations and training support</p>
                </div>
                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <i class="fas fa-graduation-cap" style="font-size: 28px; color: var(--red); margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Scholarships</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Trade school tuition assistance</p>
                </div>
                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <i class="fas fa-user-tie" style="font-size: 28px; color: var(--red); margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Apprenticeships</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">On-the-job training opportunities</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="register-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Learn?</h2>
            <p>Explore our webinars and training resources to expand your technical knowledge.</p>
            <div style="display: flex; gap: 16px; justify-content: center; margin-top: 28px;">
                <a href="webinars.php" class="btn btn-primary btn-lg"><i class="fas fa-play-circle"></i> Browse Webinars</a>
                <a href="knowhow.php" class="btn btn-outline btn-lg" style="border-color: rgba(255,255,255,0.5); color: #fff;">Synteco KnowHow</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
