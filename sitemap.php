<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Sitemap - Synteco';
$pageDescription = 'Complete site map of Synteco website - find all pages and resources.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Sitemap</span>
        </div>
        <h1 style="font-size: 42px;">Site Map</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Find every page on our website quickly and easily.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="max-width: 1100px; margin: 0 auto;">
            
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px;">
                
                <div>
                    <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                        <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--gray-200);">
                            <i class="fas fa-home" style="color: var(--red); margin-right: 8px;"></i>Main Navigation
                        </h3>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="padding: 8px 0;"><a href="index.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Home</a></li>
                            <li style="padding: 8px 0;"><a href="category.php?slug=tools" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Product Catalog</a></li>
                            <li style="padding: 8px 0;"><a href="all-industries.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">All Industries</a></li>
                            <li style="padding: 8px 0;"><a href="find-branch.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Find a Branch</a></li>
                            <li style="padding: 8px 0;"><a href="keepstock.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">KeepStock Program</a></li>
                            <li style="padding: 8px 0;"><a href="help.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Help Center</a></li>
                        </ul>
                    </div>

                    <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                        <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--gray-200);">
                            <i class="fas fa-user" style="color: var(--red); margin-right: 8px;"></i>My Account
                        </h3>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="padding: 8px 0;"><a href="login.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Sign In</a></li>
                            <li style="padding: 8px 0;"><a href="register.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Register</a></li>
                            <li style="padding: 8px 0;"><a href="forgot-password.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Forgot Password</a></li>
                            <li style="padding: 8px 0;"><a href="my-account.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">My Account Dashboard</a></li>
                            <li style="padding: 8px 0;"><a href="order-history.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Order History</a></li>
                            <li style="padding: 8px 0;"><a href="order-status.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Order Status</a></li>
                            <li style="padding: 8px 0;"><a href="lists.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">My Lists</a></li>
                            <li style="padding: 8px 0;"><a href="quotes.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">My Quotes</a></li>
                        </ul>
                    </div>

                    <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                        <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--gray-200);">
                            <i class="fas fa-shopping-cart" style="color: var(--red); margin-right: 8px;"></i>Shopping
                        </h3>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="padding: 8px 0;"><a href="cart.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Shopping Cart</a></li>
                            <li style="padding: 8px 0;"><a href="checkout.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Checkout</a></li>
                            <li style="padding: 8px 0;"><a href="search.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Search Results</a></li>
                        </ul>
                    </div>
                </div>

                <div>
                    <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                        <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--gray-200);">
                            <i class="fas fa-info-circle" style="color: var(--red); margin-right: 8px;"></i>Company Information
                        </h3>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="padding: 8px 0;"><a href="about.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">About Synteco</a></li>
                            <li style="padding: 8px 0;"><a href="careers.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Careers</a></li>
                            <li style="padding: 8px 0;"><a href="corporate.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Corporate Responsibility</a></li>
                            <li style="padding: 8px 0;"><a href="diversity.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Inclusion & Diversity</a></li>
                            <li style="padding: 8px 0;"><a href="supplier.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Become a Supplier</a></li>
                            <li style="padding: 8px 0;"><a href="investors.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Investor Relations</a></li>
                            <li style="padding: 8px 0;"><a href="press.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Press Room</a></li>
                            <li style="padding: 8px 0;"><a href="education.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Technical Education</a></li>
                        </ul>
                    </div>

                    <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                        <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--gray-200);">
                            <i class="fas fa-life-ring" style="color: var(--red); margin-right: 8px;"></i>Customer Support
                        </h3>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="padding: 8px 0;"><a href="contact.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Contact Us</a></li>
                            <li style="padding: 8px 0;"><a href="help.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Help Center</a></li>
                            <li style="padding: 8px 0;"><a href="shipping.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Shipping Information</a></li>
                            <li style="padding: 8px 0;"><a href="returns.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Return Policy</a></li>
                            <li style="padding: 8px 0;"><a href="payment.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Payment Options</a></li>
                            <li style="padding: 8px 0;"><a href="catalog-request.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Catalog Request</a></li>
                            <li style="padding: 8px 0;"><a href="feedback.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Feedback</a></li>
                        </ul>
                    </div>

                    <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                        <h3 style="font-size: 16px; font-weight: 800; color: var(--black); margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--gray-200);">
                            <i class="fas fa-gavel" style="color: var(--red); margin-right: 8px;"></i>Legal & Policies
                        </h3>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="padding: 8px 0;"><a href="terms-access.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Terms of Access</a></li>
                            <li style="padding: 8px 0;"><a href="terms-sale.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Terms of Sale</a></li>
                            <li style="padding: 8px 0;"><a href="privacy.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">Privacy Policy</a></li>
                            <li style="padding: 8px 0;"><a href="ads.php" style="color: var(--gray-600); font-size: 14px; text-decoration: none;">About Our Ads</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
