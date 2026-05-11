<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Returns & Exchanges - Synteco Industrial Supply';
$pageDescription = 'Learn about Synteco return policy and how to return or exchange products.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Returns & Exchanges</span>
        </div>
        <h1 style="font-size: 42px;">Returns & Exchanges</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Easy returns and exchanges. Hassle-free process for all your industrial supplies.
        </p>
    </div>
</div>

<div class="value-props" style="padding: 48px 0; background: #fff;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 40px; text-align: center; display: block;">
            <h2>Our Return Policy</h2>
            <p style="font-size: 16px; color: var(--gray-600); margin-top: 12px; max-width: 600px; margin-left: auto; margin-right: auto;">
                We want you to be completely satisfied with your purchase. If you're not happy, we'll make it right.
            </p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
            <div style="text-align: center; padding: 32px 24px; background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200);">
                <div style="width: 72px; height: 72px; background: #fff5f5; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-calendar-check" style="font-size: 32px; color: var(--red);"></i>
                </div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 8px;">30-Day Returns</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                    Most items can be returned within 30 days of delivery for a full refund or exchange.
                </p>
            </div>
            
            <div style="text-align: center; padding: 32px 24px; background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200);">
                <div style="width: 72px; height: 72px; background: #fff5f5; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-box-open" style="font-size: 32px; color: var(--red);"></i>
                </div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Original Packaging</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                    Items should be in their original packaging, unused, and in resalable condition.
                </p>
            </div>
            
            <div style="text-align: center; padding: 32px 24px; background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200);">
                <div style="width: 72px; height: 72px; background: #fff5f5; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-ban" style="font-size: 32px; color: var(--red);"></i>
                </div>
                <h3 style="font-size: 18px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Non-Returnable Items</h3>
                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                    Some items like custom orders, cut-to-length products, and hazardous materials are non-returnable.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="category-body" style="background: var(--gray-100);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
            
            <div>
                <div style="background: #fff; border-radius: 12px; padding: 32px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <h3 style="font-size: 20px; font-weight: 700; color: var(--black); margin-bottom: 20px;">
                        <i class="fas fa-list-ol" style="color: var(--red); margin-right: 8px;"></i> How to Return an Item
                    </h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 20px;">
                        <div style="display: flex; gap: 16px;">
                            <div style="width: 36px; height: 36px; background: var(--red); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 700; flex-shrink: 0;">1</div>
                            <div>
                                <h4 style="font-size: 15px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Contact Customer Service</h4>
                                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                    Call us at 1-800-SYNTECO or <a href="contact.php" style="color: var(--red); font-weight: 600;">send us a message</a> to request a return authorization (RA) number.
                                </p>
                            </div>
                        </div>
                        
                        <div style="display: flex; gap: 16px;">
                            <div style="width: 36px; height: 36px; background: var(--red); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 700; flex-shrink: 0;">2</div>
                            <div>
                                <h4 style="font-size: 15px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Package Your Item</h4>
                                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                    Package the item securely in its original packaging. Include all manuals, accessories, and your RA number.
                                </p>
                            </div>
                        </div>
                        
                        <div style="display: flex; gap: 16px;">
                            <div style="width: 36px; height: 36px; background: var(--red); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 700; flex-shrink: 0;">3</div>
                            <div>
                                <h4 style="font-size: 15px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Ship It Back</h4>
                                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                    Use the prepaid shipping label we'll email you, or ship to the address provided with your RA.
                                </p>
                            </div>
                        </div>
                        
                        <div style="display: flex; gap: 16px;">
                            <div style="width: 36px; height: 36px; background: var(--red); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 700; flex-shrink: 0;">4</div>
                            <div>
                                <h4 style="font-size: 15px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Get Refund or Exchange</h4>
                                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                    Once we receive and process your return (usually 3-5 business days), we'll issue a refund to your original payment method or send your exchange.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div style="background: #fff; border-radius: 12px; padding: 32px; border: 1px solid var(--gray-200);">
                    <h3 style="font-size: 20px; font-weight: 700; color: var(--black); margin-bottom: 20px;">
                        <i class="fas fa-ban" style="color: var(--red); margin-right: 8px;"></i> Non-Returnable Items
                    </h3>
                    
                    <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 16px; line-height: 1.6;">
                        The following items are non-returnable due to safety, regulatory, or custom nature:
                    </p>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                        <div style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; background: var(--gray-50); border-radius: 6px; border: 1px solid var(--gray-200);">
                            <i class="fas fa-times-circle" style="color: #dc2626;"></i>
                            <span style="font-size: 13px; color: var(--gray-700);">Custom/special orders</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; background: var(--gray-50); border-radius: 6px; border: 1px solid var(--gray-200);">
                            <i class="fas fa-times-circle" style="color: #dc2626;"></i>
                            <span style="font-size: 13px; color: var(--gray-700);">Cut-to-length products</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; background: var(--gray-50); border-radius: 6px; border: 1px solid var(--gray-200);">
                            <i class="fas fa-times-circle" style="color: #dc2626;"></i>
                            <span style="font-size: 13px; color: var(--gray-700);">Hazardous materials</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; background: var(--gray-50); border-radius: 6px; border: 1px solid var(--gray-200);">
                            <i class="fas fa-times-circle" style="color: #dc2626;"></i>
                            <span style="font-size: 13px; color: var(--gray-700);">Personal protective equipment</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; background: var(--gray-50); border-radius: 6px; border: 1px solid var(--gray-200);">
                            <i class="fas fa-times-circle" style="color: #dc2626;"></i>
                            <span style="font-size: 13px; color: var(--gray-700);">Opened chemicals</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; background: var(--gray-50); border-radius: 6px; border: 1px solid var(--gray-200);">
                            <i class="fas fa-times-circle" style="color: #dc2626;"></i>
                            <span style="font-size: 13px; color: var(--gray-700);">Clearance/closeout items</span>
                        </div>
                    </div>
                    
                    <p style="font-size: 12px; color: var(--gray-500); margin-top: 16px; line-height: 1.6;">
                        If you're unsure whether an item is returnable, please contact customer service and we'll be happy to help.
                    </p>
                </div>
            </div>
            
            <div>
                <div style="background: #fff; border-radius: 12px; padding: 32px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <h3 style="font-size: 20px; font-weight: 700; color: var(--black); margin-bottom: 20px;">
                        <i class="fas fa-question-circle" style="color: var(--red); margin-right: 8px;"></i> Frequently Asked Questions
                    </h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 16px;">
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">How long does it take to get a refund?</h4>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                Once we receive and inspect your returned item (usually 3-5 business days after delivery to us), we'll process your refund. Refunds to credit cards typically appear within 3-10 business days, depending on your bank.
                            </p>
                        </div>
                        
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Can I exchange an item instead of getting a refund?</h4>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                Yes! When you request your return authorization, let us know you'd prefer an exchange. We'll ship the new item once we receive the returned product, or in some cases, we can ship the exchange immediately.
                            </p>
                        </div>
                        
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Do I have to pay for return shipping?</h4>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                If the return is due to our error (wrong item, defective product, etc.), we'll provide a prepaid shipping label. For other returns, return shipping costs are the responsibility of the customer, unless the item qualifies for our free return policy.
                            </p>
                        </div>
                        
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">What if my item arrived damaged?</h4>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                Contact us immediately if your order arrives damaged. Take photos of the packaging and damaged items, and we'll arrange for a replacement or refund at no cost to you.
                            </p>
                        </div>
                        
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 6px;">What if I'm past the 30-day return window?</h4>
                            <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6;">
                                Contact our customer service team. While our standard policy is 30 days, we may be able to make exceptions in certain cases, especially for defective items covered by manufacturer warranties.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div style="background: linear-gradient(135deg, var(--red), var(--red-dark)); border-radius: 12px; padding: 28px; color: #fff;">
                    <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 12px;">
                        <i class="fas fa-headset" style="margin-right: 8px;"></i> Need Help?
                    </h3>
                    <p style="font-size: 14px; color: rgba(255,255,255,0.85); line-height: 1.6; margin-bottom: 20px;">
                        Our customer service team is ready to help with your return or exchange. Reach out by phone or email.
                    </p>
                    
                    <div style="display: flex; gap: 12px;">
                        <a href="tel:1-800-SYNTECO" style="display: flex; align-items: center; gap: 8px; padding: 12px 20px; background: rgba(255,255,255,0.15); color: #fff; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.2s;">
                            <i class="fas fa-phone"></i>
                            1-800-SYNTECO
                        </a>
                        <a href="contact.php" style="display: flex; align-items: center; gap: 8px; padding: 12px 20px; background: #fff; color: var(--red); border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.2s;">
                            <i class="fas fa-envelope"></i>
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
