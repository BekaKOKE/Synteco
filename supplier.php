<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'How to Become a Supplier - Synteco';
$pageDescription = 'Learn how to become an authorized supplier for Synteco Industrial Supply.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Become a Supplier</span>
        </div>
        <h1 style="font-size: 42px;">Become a Synteco Supplier</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Partner with us to reach 500K+ business customers nationwide.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Why Partner With Synteco</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; max-width: 1100px; margin: 0 auto;">
            <div style="text-align: center; padding: 24px;">
                <div style="width: 72px; height: 72px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-users" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">500K+ Customers</h3>
                <p style="font-size: 13px; color: var(--gray-600);">Reach businesses across every industry.</p>
            </div>
            <div style="text-align: center; padding: 24px;">
                <div style="width: 72px; height: 72px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-store" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Nationwide Reach</h3>
                <p style="font-size: 13px; color: var(--gray-600);">Online + 200+ branch locations.</p>
            </div>
            <div style="text-align: center; padding: 24px;">
                <div style="width: 72px; height: 72px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-chart-line" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Growth Focused</h3>
                <p style="font-size: 13px; color: var(--gray-600);">Strategic partners for long-term growth.</p>
            </div>
            <div style="text-align: center; padding: 24px;">
                <div style="width: 72px; height: 72px; background: var(--gray-50); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-handshake" style="font-size: 28px; color: var(--red);"></i>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Fair Terms</h3>
                <p style="font-size: 13px; color: var(--gray-600);">Transparent, collaborative partnerships.</p>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>Our Supplier Requirements</h2>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
                <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 16px; display: flex; align-items: center;">
                        <i class="fas fa-check-circle" style="color: #2e7d32; margin-right: 10px; font-size: 20px;"></i>
                        Basic Requirements
                    </h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Valid business registration</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>General liability insurance</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Product liability coverage</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>EDI capabilities preferred</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Competitive pricing structure</li>
                    </ul>
                </div>
                <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 16px; display: flex; align-items: center;">
                        <i class="fas fa-star" style="color: #f9a825; margin-right: 10px; font-size: 20px;"></i>
                        What We Look For
                    </h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Quality, branded products</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Innovative solutions</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Strong inventory capacity</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Marketing support available</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600);"><i class="fas fa-angle-right" style="color: var(--red); margin-right: 8px;"></i>Dedicated account support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>The Application Process</h2>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                <div style="text-align: center;">
                    <div style="width: 56px; height: 56px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                        <span style="font-size: 20px; font-weight: 800; color: #fff;">1</span>
                    </div>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Submit Inquiry</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Complete our supplier interest form</p>
                </div>
                <div style="text-align: center;">
                    <div style="width: 56px; height: 56px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                        <span style="font-size: 20px; font-weight: 800; color: #fff;">2</span>
                    </div>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Initial Review</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Category team evaluates fit</p>
                </div>
                <div style="text-align: center;">
                    <div style="width: 56px; height: 56px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                        <span style="font-size: 20px; font-weight: 800; color: #fff;">3</span>
                    </div>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Negotiation</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Terms & pricing discussion</p>
                </div>
                <div style="text-align: center;">
                    <div style="width: 56px; height: 56px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                        <span style="font-size: 20px; font-weight: 800; color: #fff;">4</span>
                    </div>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Onboarding</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Setup & integration</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="register-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Become a Supplier?</h2>
            <p>Submit your information and our category management team will review your inquiry.</p>
            <div style="display: flex; gap: 16px; justify-content: center; margin-top: 28px;">
                <a href="contact.php" class="btn btn-primary btn-lg"><i class="fas fa-envelope"></i> Contact Supplier Relations</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
