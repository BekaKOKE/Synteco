<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Terms of Sale - Synteco';
$pageDescription = 'Review Synteco\'s Terms of Sale including pricing, payment, shipping, returns, and warranty information.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Terms of Sale</span>
        </div>
        <h1 style="font-size: 42px;">Terms of Sale</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Our standard terms and conditions for all purchases.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 40px;">
                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                    <i class="fas fa-tags" style="font-size: 28px; color: var(--red); margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Pricing</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Subject to change</p>
                </div>
                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                    <i class="fas fa-credit-card" style="font-size: 28px; color: var(--red); margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Payment</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Net-30 terms available</p>
                </div>
                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                    <i class="fas fa-truck" style="font-size: 28px; color: var(--red); margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Shipping</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Free on $50+</p>
                </div>
                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                    <i class="fas fa-undo" style="font-size: 28px; color: var(--red); margin-bottom: 12px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Returns</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">30-day return policy</p>
                </div>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">1. Pricing & Payment</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    All prices are in U.S. dollars and are subject to change without prior notice. Prices do not include taxes, shipping, or handling charges.
                </p>
                <div style="background: #fff8e1; border-left: 4px solid #f9a825; padding: 16px 20px; margin-top: 16px; border-radius: 0 8px 8px 0;">
                    <p style="font-size: 14px; color: #5d4037; margin: 0;"><i class="fas fa-info-circle" style="margin-right: 8px;"></i>
                        <strong>Note:</strong> Volume discounts available for business customers. Contact your account manager.
                    </p>
                </div>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">2. Order Acceptance</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    Your receipt of an order confirmation does not constitute our acceptance of your order.
                </p>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    We reserve the right to accept or decline any order. Orders are deemed accepted only when we ship the products.
                </p>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">3. Shipping & Delivery</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    Standard shipping is free on orders over $50 within the contiguous United States.
                </p>
                <div style="background: var(--gray-50); border-radius: 8px; padding: 20px; margin-top: 16px;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Shipping Options</h4>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                        <div style="background: #fff; padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);">
                            <div style="font-weight: 600; color: var(--black); margin-bottom: 4px;">Standard Ground</div>
                            <div style="font-size: 13px; color: var(--gray-600);">3-5 business days</div>
                        </div>
                        <div style="background: #fff; padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);">
                            <div style="font-weight: 600; color: var(--black); margin-bottom: 4px;">Express</div>
                            <div style="font-size: 13px; color: var(--gray-600);">2 business days</div>
                        </div>
                        <div style="background: #fff; padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);">
                            <div style="font-weight: 600; color: var(--black); margin-bottom: 4px;">Next Day</div>
                            <div style="font-size: 13px; color: var(--gray-600);">1 business day</div>
                        </div>
                        <div style="background: #fff; padding: 16px; border-radius: 8px; border: 1px solid var(--gray-200);">
                            <div style="font-weight: 600; color: var(--black); margin-bottom: 4px;">Same Day</div>
                            <div style="font-size: 13px; color: var(--gray-600);">Same day pickup</div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-bottom: 40px;">
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">4. Returns & Refunds</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 12px;">
                    Most items may be returned within 30 days of receipt in original condition.
                </p>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    See our full <a href="returns.php" style="color: var(--red); text-decoration: underline;">Return Policy</a> for complete details.
                </p>
            </div>

            <div>
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black); margin-bottom: 16px;">5. Warranties</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600);">
                    Products are covered by manufacturer's warranty where applicable. Contact customer service for warranty claims.
                </p>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
