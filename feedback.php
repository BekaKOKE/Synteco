<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Feedback - Synteco';
$pageDescription = 'Share your feedback with Synteco. Help us improve your shopping experience.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Feedback</span>
        </div>
        <h1 style="font-size: 42px;">Share Your Feedback</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Your opinion matters. Help us serve you better.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
            
            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">We Value Your Input</h2>
                <p style="font-size: 14px; line-height: 1.8; color: var(--gray-600); margin-bottom: 24px;">
                    At Synteco, we're constantly working to improve our products, services, and shopping experience. Your feedback helps us understand what we're doing well and where we can improve.
                </p>

                <div style="margin-bottom: 32px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 16px;">What Can You Tell Us?</h3>
                    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <span style="background: var(--gray-50); padding: 10px 16px; border-radius: 20px; font-size: 12px; font-weight: 600; border: 1px solid var(--gray-200);"><i class="fas fa-smile" style="color: #2e7d32; margin-right: 6px;"></i>Positive Experience</span>
                        <span style="background: var(--gray-50); padding: 10px 16px; border-radius: 20px; font-size: 12px; font-weight: 600; border: 1px solid var(--gray-200);"><i class="fas fa-frown" style="color: #c62828; margin-right: 6px;"></i>Areas to Improve</span>
                        <span style="background: var(--gray-50); padding: 10px 16px; border-radius: 20px; font-size: 12px; font-weight: 600; border: 1px solid var(--gray-200);"><i class="fas fa-lightbulb" style="color: #f9a825; margin-right: 6px;"></i>New Ideas</span>
                        <span style="background: var(--gray-50); padding: 10px 16px; border-radius: 20px; font-size: 12px; font-weight: 600; border: 1px solid var(--gray-200);"><i class="fas fa-box" style="color: #1976d2; margin-right: 6px;"></i>Product Requests</span>
                        <span style="background: var(--gray-50); padding: 10px 16px; border-radius: 20px; font-size: 12px; font-weight: 600; border: 1px solid var(--gray-200);"><i class="fas fa-globe" style="color: #7b1fa2; margin-right: 6px;"></i>Website Feedback</span>
                    </div>
                </div>

                <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 28px; border-radius: 12px; color: #fff;">
                    <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 16px;">Need Immediate Help?</h4>
                    <p style="font-size: 14px; opacity: 0.9; margin-bottom: 20px;">
                        If you have an urgent issue with an order, please contact our customer service team directly.
                    </p>
                    <div style="display: flex; gap: 16px;">
                        <a href="help.php" class="btn btn-primary" style="background: #fff; color: var(--black); border-color: #fff;"><i class="fas fa-headset"></i> Help Center</a>
                        <a href="contact.php" class="btn btn-outline" style="border-color: rgba(255,255,255,0.4); color: #fff;"><i class="fas fa-envelope"></i> Contact Us</a>
                    </div>
                </div>
            </div>

            <div>
                <div style="background: var(--gray-50); padding: 32px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 24px;">Feedback Form</h3>
                    <form>
                        <div style="margin-bottom: 20px;">
                            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">How would you rate your overall experience?</label>
                            <div style="display: flex; gap: 8px;">
                                <button type="button" style="width: 48px; height: 48px; border: 2px solid var(--gray-200); border-radius: 8px; background: #fff; font-size: 20px; cursor: pointer;" onclick="this.style.background='#fff8e1'; this.style.borderColor='#f9a825';">1</button>
                                <button type="button" style="width: 48px; height: 48px; border: 2px solid var(--gray-200); border-radius: 8px; background: #fff; font-size: 20px; cursor: pointer;" onclick="this.style.background='#fff8e1'; this.style.borderColor='#f9a825';">2</button>
                                <button type="button" style="width: 48px; height: 48px; border: 2px solid var(--gray-200); border-radius: 8px; background: #fff; font-size: 20px; cursor: pointer;" onclick="this.style.background='#fff8e1'; this.style.borderColor='#f9a825';">3</button>
                                <button type="button" style="width: 48px; height: 48px; border: 2px solid var(--gray-200); border-radius: 8px; background: #fff; font-size: 20px; cursor: pointer;" onclick="this.style.background='#fff8e1'; this.style.borderColor='#f9a825';">4</button>
                                <button type="button" style="width: 48px; height: 48px; border: 2px solid var(--gray-200); border-radius: 8px; background: #fff; font-size: 20px; cursor: pointer;" onclick="this.style.background='#fff8e1'; this.style.borderColor='#f9a825';">5</button>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-top: 4px;">
                                <span style="font-size: 11px; color: var(--gray-500);">Poor</span>
                                <span style="font-size: 11px; color: var(--gray-500);">Excellent</span>
                            </div>
                        </div>

                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">Feedback Category</label>
                            <select class="search-input" style="width: 100%;">
                                <option>Select a category</option>
                                <option>Website Experience</option>
                                <option>Product Quality</option>
                                <option>Customer Service</option>
                                <option>Shipping & Delivery</option>
                                <option>Pricing</option>
                                <option>Product Selection</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">Your Feedback *</label>
                            <textarea class="search-input" style="width: 100%; min-height: 120px; resize: vertical;" placeholder="Tell us what's on your mind..."></textarea>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                            <div>
                                <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">Name</label>
                                <input type="text" class="search-input" style="width: 100%;" placeholder="Your name">
                            </div>
                            <div>
                                <label style="display: block; font-size: 13px; font-weight: 600; color: var(--gray-700); margin-bottom: 6px;">Email</label>
                                <input type="email" class="search-input" style="width: 100%;" placeholder="your@email.com">
                            </div>
                        </div>

                        <div style="margin-bottom: 16px;">
                            <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; color: var(--gray-600); cursor: pointer;">
                                <input type="checkbox"> Anonymous feedback (we won't contact you)
                            </label>
                        </div>

                        <button type="button" class="btn btn-primary btn-lg" style="width: 100%;" onclick="showToast('Thank you for your feedback! Your input helps us improve.', 'success');">
                            <i class="fas fa-paper-plane"></i> Submit Feedback
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
