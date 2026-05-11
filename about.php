<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'About Synteco - Industrial Supply & MRO Products';
$pageDescription = 'Synteco is your trusted partner for industrial supplies and MRO products. With over 1.5 million products available, we keep your operations running smoothly.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>About Synteco</span>
        </div>
        <h1 style="font-size: 42px;">About Synteco</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Your trusted partner for industrial supplies and MRO products since 1985.
        </p>
    </div>
</div>

<div class="value-props" style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 40px;">
            <h2>Why Choose Synteco</h2>
        </div>
        <div class="value-grid">
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-box-open"></i></div>
                <h3>1.5+ Million Products</h3>
                <p>From hand tools to heavy equipment, we carry the products you need from the brands you trust.</p>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-shipping-fast"></i></div>
                <h3>Fast Delivery</h3>
                <p>With multiple distribution centers across the country, get your orders fast - often same-day or next-day.</p>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-headset"></i></div>
                <h3>Expert Support</h3>
                <p>Our product specialists are available to help you find exactly what you need for your application.</p>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div>
                <h2 style="font-size: 28px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Our Mission</h2>
                <p style="font-size: 15px; line-height: 1.8; color: var(--gray-600); margin-bottom: 16px;">
                    At Synteco, our mission is to keep your operations running smoothly by providing the industrial supplies, tools, and equipment you need, when you need them.
                </p>
                <p style="font-size: 15px; line-height: 1.8; color: var(--gray-600); margin-bottom: 16px;">
                    Founded in 1985, we've grown from a single local supply store to a national distributor serving over 500,000 businesses across every industry.
                </p>
                <p style="font-size: 15px; line-height: 1.8; color: var(--gray-600);">
                    Our commitment to quality products, competitive pricing, and exceptional service has made us the trusted choice for MRO supplies.
                </p>
            </div>
            <div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div style="background: #fff; padding: 32px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                        <div style="font-size: 42px; font-weight: 900; color: var(--red); margin-bottom: 8px;">1.5M+</div>
                        <div style="font-size: 14px; color: var(--gray-600); font-weight: 600;">Products</div>
                    </div>
                    <div style="background: #fff; padding: 32px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                        <div style="font-size: 42px; font-weight: 900; color: var(--red); margin-bottom: 8px;">500K+</div>
                        <div style="font-size: 14px; color: var(--gray-600); font-weight: 600;">Business Customers</div>
                    </div>
                    <div style="background: #fff; padding: 32px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                        <div style="font-size: 42px; font-weight: 900; color: var(--red); margin-bottom: 8px;">38+</div>
                        <div style="font-size: 14px; color: var(--gray-600); font-weight: 600;">Years of Service</div>
                    </div>
                    <div style="background: #fff; padding: 32px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                        <div style="font-size: 42px; font-weight: 900; color: var(--red); margin-bottom: 8px;">6</div>
                        <div style="font-size: 14px; color: var(--gray-600); font-weight: 600;">Distribution Centers</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>What We Offer</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
            <div style="padding: 28px; background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200); transition: all 0.2s;">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-tools"></i></div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 10px;">Tools & Equipment</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">Hand tools, power tools, tool storage, and equipment for every job from trusted brands.</p>
            </div>
            <div style="padding: 28px; background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200); transition: all 0.2s;">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-hard-hat"></i></div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 10px;">Safety & PPE</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">Complete personal protective equipment, safety supplies, and facility safety solutions.</p>
            </div>
            <div style="padding: 28px; background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200); transition: all 0.2s;">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-bolt"></i></div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 10px;">Electrical & Lighting</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">Wire, cable, conduit, circuit protection, lighting fixtures, and electrical controls.</p>
            </div>
            <div style="padding: 28px; background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200); transition: all 0.2s;">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-wrench"></i></div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 10px;">Hardware & Fasteners</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">Screws, bolts, nuts, washers, anchors, and hardware for every application.</p>
            </div>
            <div style="padding: 28px; background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200); transition: all 0.2s;">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-snowflake"></i></div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 10px;">HVAC & Refrigeration</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">Heating, cooling, refrigeration, ventilation, and HVAC controls and accessories.</p>
            </div>
            <div style="padding: 28px; background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200); transition: all 0.2s;">
                <div style="font-size: 32px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-spray-can"></i></div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 10px;">Cleaning & Janitorial</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">Cleaning chemicals, paper products, janitorial supplies, and facility maintenance.</p>
            </div>
        </div>
    </div>
</div>

<div class="register-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Get Started?</h2>
            <p>Create a free account and start shopping from over 1.5 million industrial products today.</p>
            <div style="display: flex; gap: 16px; justify-content: center; margin-top: 28px;">
                <a href="register.php" class="btn btn-primary btn-lg"><i class="fas fa-user-plus"></i> Create Account</a>
                <a href="category.php?slug=tools" class="btn btn-outline btn-lg" style="border-color: rgba(255,255,255,0.5); color: #fff;">Browse Catalog</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
