<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Order Status - Synteco';
$pageDescription = 'Check the status of your Synteco order. Track shipments and view order details.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Order Status</span>
        </div>
        <h1 style="font-size: 42px;">Track Your Order</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Check order status and track shipments in real-time.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
            
            <div>
                <div style="background: var(--gray-50); padding: 32px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 32px;">
                    <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 16px;">Quick Order Lookup</h3>
                    <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 20px;">
                        Don't have an account? Look up your order using your order number and email.
                    </p>
                    <form>
                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">Order Number *</label>
                            <input type="text" class="search-input" style="width: 100%;" placeholder="SYN-2026-XXXXX">
                        </div>
                        <div style="margin-bottom: 20px;">
                            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">Billing Email *</label>
                            <input type="email" class="search-input" style="width: 100%;" placeholder="you@company.com">
                        </div>
                        <button type="button" class="btn btn-primary btn-lg" style="width: 100%;" onclick="showToast('Order not found. Please verify your order number and email.', 'info');">
                            <i class="fas fa-search"></i> Track Order
                        </button>
                    </form>
                </div>

                <div style="background: linear-gradient(135deg, #fff8e1 0%, #ffecb3 100%); padding: 24px; border-radius: 12px; border-left: 4px solid #f9a825;">
                    <div style="display: flex; gap: 12px;">
                        <i class="fas fa-info-circle" style="font-size: 20px; color: #f57f17; flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: #5d4037; margin-bottom: 8px;">Signed In? View Your Orders</h4>
                            <p style="font-size: 13px; color: #5d4037; margin-bottom: 12px;">
                                If you're logged into your Synteco account, view all your orders in your account dashboard.
                            </p>
                            <a href="my-account.php" class="btn btn-outline" style="border-color: #f9a825; color: #5d4037;">
                                <i class="fas fa-user"></i> Go to My Account
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Order Status Guide</h2>
                
                <div style="margin-bottom: 24px;">
                    <div style="display: flex; gap: 16px; margin-bottom: 12px;">
                        <div style="width: 40px; height: 40px; background: #e3f2fd; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-clock" style="font-size: 16px; color: #1976d2;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Processing</h4>
                            <p style="font-size: 13px; color: var(--gray-600);">Your order has been received and is being processed for fulfillment. You'll receive a confirmation email shortly.</p>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 24px;">
                    <div style="display: flex; gap: 16px; margin-bottom: 12px;">
                        <div style="width: 40px; height: 40px; background: #fff3e0; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-box-open" style="font-size: 16px; color: #ef6c00;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Picking & Packing</h4>
                            <p style="font-size: 13px; color: var(--gray-600);">Your items are being picked from our warehouse and prepared for shipment.</p>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 24px;">
                    <div style="display: flex; gap: 16px; margin-bottom: 12px;">
                        <div style="width: 40px; height: 40px; background: #e8f5e9; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-truck" style="font-size: 16px; color: #2e7d32;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Shipped</h4>
                            <p style="font-size: 13px; color: var(--gray-600);">Your order has shipped! Track your package using the tracking number in your shipping confirmation email.</p>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 32px;">
                    <div style="display: flex; gap: 16px; margin-bottom: 12px;">
                        <div style="width: 40px; height: 40px; background: #e0f2f1; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-check-circle" style="font-size: 16px; color: #00695c;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Delivered</h4>
                            <p style="font-size: 13px; color: var(--gray-600);">Your order has been delivered. Check your delivery location or contact us if you haven't received it.</p>
                        </div>
                    </div>
                </div>

                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Need Help?</h4>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                        <a href="help.php" class="btn btn-outline" style="font-size: 13px; padding: 10px 16px;"><i class="fas fa-headset"></i> Help Center</a>
                        <a href="contact.php" class="btn btn-outline" style="font-size: 13px; padding: 10px 16px;"><i class="fas fa-phone"></i> Contact Us</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
