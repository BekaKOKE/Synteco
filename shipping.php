<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Shipping Information - Synteco Industrial Supply';
$pageDescription = 'Learn about Synteco shipping policies, delivery times, and shipping options for your industrial supplies.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Shipping Information</span>
        </div>
        <h1 style="font-size: 42px;">Shipping Information</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Fast, reliable shipping for your industrial supplies. Multiple delivery options available.
        </p>
    </div>
</div>

<div class="category-body" style="background: var(--gray-100);">
    <div class="container">
        
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 32px;">
            <div style="background: #fff; padding: 24px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                <div style="font-size: 36px; color: var(--red); margin-bottom: 12px;"><i class="fas fa-truck-fast"></i></div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Standard Ground</h4>
                <p style="font-size: 13px; color: var(--gray-500);">3-5 Business Days</p>
            </div>
            <div style="background: #fff; padding: 24px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                <div style="font-size: 36px; color: var(--red); margin-bottom: 12px;"><i class="fas fa-shipping-fast"></i></div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Express</h4>
                <p style="font-size: 13px; color: var(--gray-500);">2 Business Days</p>
            </div>
            <div style="background: #fff; padding: 24px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                <div style="font-size: 36px; color: var(--red); margin-bottom: 12px;"><i class="fas fa-plane"></i></div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Next-Day Air</h4>
                <p style="font-size: 13px; color: var(--gray-500);">1 Business Day</p>
            </div>
            <div style="background: #fff; padding: 24px; border-radius: 12px; text-align: center; border: 1px solid var(--gray-200);">
                <div style="font-size: 36px; color: var(--red); margin-bottom: 12px;"><i class="fas fa-store"></i></div>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Will-Call Pickup</h4>
                <p style="font-size: 13px; color: var(--gray-500);">Ready in 2 Hours</p>
            </div>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
            <div>
                <div style="background: #fff; border-radius: 12px; padding: 32px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <h3 style="font-size: 20px; font-weight: 700; color: var(--black); margin-bottom: 20px;">
                        <i class="fas fa-shipping-fast" style="color: var(--red); margin-right: 8px;"></i> Shipping Options
                    </h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 16px;">
                        <div style="padding: 16px; background: var(--gray-50); border-radius: 8px; border: 1px solid var(--gray-200);">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <h4 style="font-size: 15px; font-weight: 700; color: var(--black);">Standard Ground</h4>
                                <span style="font-size: 13px; font-weight: 600; color: #16a34a; background: #dcfce7; padding: 4px 10px; border-radius: 20px;">
                                    <i class="fas fa-tag" style="margin-right: 4px;"></i> Free on orders $50+
                                </span>
                            </div>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                Delivery within 3-5 business days to most locations. Perfect for non-urgent orders. Free standard shipping on qualifying orders over $50.
                            </p>
                        </div>
                        
                        <div style="padding: 16px; background: var(--gray-50); border-radius: 8px; border: 1px solid var(--gray-200);">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <h4 style="font-size: 15px; font-weight: 700; color: var(--black);">Express Shipping</h4>
                                <span style="font-size: 13px; font-weight: 600; color: #dc2626; background: #fee2e2; padding: 4px 10px; border-radius: 20px;">
                                    <i class="fas fa-clock" style="margin-right: 4px;"></i> 2 Business Days
                                </span>
                            </div>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                Get your order in 2 business days. Ideal for time-sensitive projects and urgent maintenance needs.
                            </p>
                        </div>
                        
                        <div style="padding: 16px; background: var(--gray-50); border-radius: 8px; border: 1px solid var(--gray-200);">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <h4 style="font-size: 15px; font-weight: 700; color: var(--black);">Will-Call Pickup</h4>
                                <span style="font-size: 13px; font-weight: 600; color: #7c3aed; background: #f3e8ff; padding: 4px 10px; border-radius: 20px;">
                                    <i class="fas fa-store" style="margin-right: 4px;"></i> Pick Up In-Store
                                </span>
                            </div>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                Order online and pick up at any of our 6 distribution centers. Most orders ready within 2 hours during business hours.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div style="background: linear-gradient(135deg, var(--gray-50), #fff); border-radius: 12px; padding: 28px; border: 1px solid var(--gray-200);">
                    <h4 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 16px;">
                        <i class="fas fa-info-circle" style="color: var(--red); margin-right: 8px;"></i> Important Notes
                    </h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 10px; font-size: 14px; color: var(--gray-600); line-height: 1.5;">
                            <i class="fas fa-check-circle" style="color: #16a34a; margin-top: 2px; flex-shrink: 0;"></i>
                            <span>Orders placed before 3:00 PM CT ship the same business day</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 10px; font-size: 14px; color: var(--gray-600); line-height: 1.5;">
                            <i class="fas fa-check-circle" style="color: #16a34a; margin-top: 2px; flex-shrink: 0;"></i>
                            <span>Free standard shipping on orders over $50 (continental US only)</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 10px; font-size: 14px; color: var(--gray-600); line-height: 1.5;">
                            <i class="fas fa-check-circle" style="color: #16a34a; margin-top: 2px; flex-shrink: 0;"></i>
                            <span>Hazardous materials require special shipping handling</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 10px; font-size: 14px; color: var(--gray-600); line-height: 1.5;">
                            <i class="fas fa-check-circle" style="color: #16a34a; margin-top: 2px; flex-shrink: 0;"></i>
                            <span>International shipping available to over 150 countries</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div>
                <div style="background: #fff; border-radius: 12px; padding: 32px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <h3 style="font-size: 20px; font-weight: 700; color: var(--black); margin-bottom: 20px;">
                        <i class="fas fa-question-circle" style="color: var(--red); margin-right: 8px;"></i> Shipping FAQs
                    </h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 16px;">
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">How can I track my order?</h4>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                Once your order ships, you'll receive an email with tracking information. You can also track your order by signing into your account and visiting the <a href="order-status.php" style="color: var(--red); font-weight: 600;">Order Status</a> page.
                            </p>
                        </div>
                        
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">What if my order is damaged or missing items?</h4>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                Please contact customer service within 30 days of delivery if you receive damaged goods or missing items. We'll arrange for replacements or a refund.
                            </p>
                        </div>
                        
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Do you ship to PO boxes?</h4>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                Yes, standard ground shipping is available to PO boxes. Express and next-day shipping require a physical street address.
                            </p>
                        </div>
                        
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Can I change my shipping address after ordering?</h4>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                Contact us immediately if you need to change your shipping address. Address changes can only be made before the order ships.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div style="background: var(--gray-50); border-radius: 12px; padding: 28px; border: 1px solid var(--gray-200);">
                    <h4 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 12px;">Need Help?</h4>
                    <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                        If you have questions about your shipment or need to arrange special delivery, our customer service team is ready to help.
                    </p>
                    <div style="display: flex; gap: 12px;">
                        <a href="contact.php" class="btn btn-primary" style="flex: 1; justify-content: center;">
                            <i class="fas fa-envelope"></i> Contact Us
                        </a>
                        <a href="tel:1-800-SYNTECO" class="btn btn-outline" style="flex: 1; justify-content: center;">
                            <i class="fas fa-phone"></i> Call Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
