<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Inclusion & Diversity - Synteco';
$pageDescription = 'Synteco is committed to building an inclusive workplace where everyone can thrive.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Inclusion & Diversity</span>
        </div>
        <h1 style="font-size: 42px;">Inclusion & Diversity</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Building a culture where everyone belongs, contributes, and succeeds.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div>
                <h2 style="font-size: 28px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Our Commitment</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 16px;">
                    At Synteco, we believe that diversity drives innovation and inclusion fuels success. We are committed to creating a workplace where all employees are valued, respected, and empowered to bring their authentic selves to work.
                </p>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    Our commitment extends beyond our walls to our suppliers, customers, and the communities we serve.
                </p>
            </div>
            <div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div style="background: linear-gradient(135deg, #6a1b9a 0%, #8e24aa 100%); padding: 28px; border-radius: 12px; text-align: center; color: #fff;">
                        <div style="font-size: 32px; font-weight: 900; margin-bottom: 4px;">38%</div>
                        <div style="font-size: 13px; opacity: 0.85;">Women in Leadership</div>
                    </div>
                    <div style="background: linear-gradient(135deg, #00695c 0%, #00897b 100%); padding: 28px; border-radius: 12px; text-align: center; color: #fff;">
                        <div style="font-size: 32px; font-weight: 900; margin-bottom: 4px;">42%</div>
                        <div style="font-size: 13px; opacity: 0.85;">BIPOC Employees</div>
                    </div>
                    <div style="background: linear-gradient(135deg, #e65100 0%, #f57c00 100%); padding: 28px; border-radius: 12px; text-align: center; color: #fff;">
                        <div style="font-size: 32px; font-weight: 900; margin-bottom: 4px;">12%</div>
                        <div style="font-size: 13px; opacity: 0.85;">Veteran Employees</div>
                    </div>
                    <div style="background: linear-gradient(135deg, #1565c0 0%, #1976d2 100%); padding: 28px; border-radius: 12px; text-align: center; color: #fff;">
                        <div style="font-size: 32px; font-weight: 900; margin-bottom: 4px;">8+</div>
                        <div style="font-size: 13px; opacity: 0.85;">Employee Resource Groups</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>Our Pillars</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; max-width: 1100px; margin: 0 auto;">
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-bullseye" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Accountability</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">Leaders at all levels are accountable for advancing diversity and inclusion goals.</p>
            </div>
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-graduation-cap" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Education</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">Ongoing unconscious bias training and inclusive leadership development programs.</p>
            </div>
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-hands-helping" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Community</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">Employee Resource Groups fostering connection and belonging across identities.</p>
            </div>
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="width: 64px; height: 64px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-balance-scale" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Equity</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">Pay equity reviews and equitable hiring practices ensuring fair opportunities.</p>
            </div>
        </div>
    </div>
</div>

<div class="register-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Join Our Inclusive Team</h2>
            <p>Explore career opportunities at Synteco and be part of a company that values diversity.</p>
            <div style="display: flex; gap: 16px; justify-content: center; margin-top: 28px;">
                <a href="careers.php" class="btn btn-primary btn-lg"><i class="fas fa-briefcase"></i> View Openings</a>
                <a href="corporate.php" class="btn btn-outline btn-lg" style="border-color: rgba(255,255,255,0.5); color: #fff;">Corporate Responsibility</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
