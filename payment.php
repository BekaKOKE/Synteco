<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Payment Options - Synteco';
$pageDescription = 'Synteco payment options including credit cards, net terms, purchase orders, and more.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Payment Options</span>
        </div>
        <h1 style="font-size: 42px;">Payment Options</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Flexible payment methods for your business needs.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Accepted Payment Methods</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto 60px;">
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <i class="fas fa-credit-card" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Credit Cards</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Visa, Mastercard, Amex, Discover</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <i class="fas fa-file-invoice-dollar" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Net Terms</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Net-30 for qualified businesses</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <i class="fas fa-shopping-cart" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Purchase Orders</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Accepted for approved accounts</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <i class="fas fa-wallet" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Digital Wallet</h4>
                <p style="font-size: 12px; color: var(--gray-600);">Apple Pay, Google Pay</p>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
            
            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Net Terms Credit Application</h2>
                <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 24px;">
                    Qualified business customers can apply for Net-30 payment terms. Enjoy the flexibility of paying invoices after delivery.
                </p>

                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Benefits of Net Terms</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 8px;"></i>30-day payment window</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 8px;"></i>Consolidated billing</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 8px;"></i>Online invoice management</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600); border-bottom: 1px solid var(--gray-100);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 8px;"></i>Purchase order integration</li>
                        <li style="padding: 8px 0; font-size: 13px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 8px;"></i>Spending reports & analytics</li>
                    </ul>
                </div>

                <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 24px; border-radius: 12px; color: #fff;">
                    <h4 style="font-size: 14px; font-weight: 700; margin-bottom: 12px;">How to Apply</h4>
                    <p style="font-size: 13px; opacity: 0.9; margin-bottom: 16px;">
                        Contact our credit department to apply for Net-30 terms. Approval typically takes 2-3 business days.
                    </p>
                    <a href="contact.php" class="btn btn-primary" style="background: #fff; color: var(--black); border-color: #fff;"><i class="fas fa-phone"></i> Contact Credit Dept</a>
                </div>
            </div>

            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Payment Security</h2>
                <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 24px;">
                    Your payment information is protected with industry-leading security measures.
                </p>

                <div style="margin-bottom: 24px;">
                    <div style="display: flex; gap: 16px; margin-bottom: 16px; padding: 16px; background: var(--gray-50); border-radius: 8px;">
                        <div style="width: 40px; height: 40px; background: #e3f2fd; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-lock" style="font-size: 18px; color: #1976d2;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">256-bit SSL Encryption</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">All payment data is encrypted during transmission</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 16px; margin-bottom: 16px; padding: 16px; background: var(--gray-50); border-radius: 8px;">
                        <div style="width: 40px; height: 40px; background: #e8f5e9; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-shield-alt" style="font-size: 18px; color: #2e7d32;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">PCI DSS Compliant</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">We meet the highest payment card industry standards</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 16px; padding: 16px; background: var(--gray-50); border-radius: 8px;">
                        <div style="width: 40px; height: 40px; background: #fff3e0; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-eye-slash" style="font-size: 18px; color: #ef6c00;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Tokenized Payments</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">We never store your full card numbers</p>
                        </div>
                    </div>
                </div>

                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Questions About Payment?</h4>
                    <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">
                        Our customer service team is here to help with payment-related questions.
                    </p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                        <a href="help.php" class="btn btn-outline" style="font-size: 13px; padding: 10px 16px;"><i class="fas fa-question-circle"></i> Help Center</a>
                        <a href="contact.php" class="btn btn-outline" style="font-size: 13px; padding: 10px 16px;"><i class="fas fa-envelope"></i> Contact Us</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
