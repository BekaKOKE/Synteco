<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Help Center - Synteco Industrial Supply';
$pageDescription = 'Find answers to frequently asked questions and get support for your Synteco account.';
$currentSlug = '';

$faqs = getFaqs();

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Help Center</span>
        </div>
        <h1 style="font-size: 42px;">Help Center</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Find answers to frequently asked questions or contact our support team.
        </p>
    </div>
</div>

<div class="value-props" style="padding: 40px 0; background: #fff;">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto;">
            <div class="search-wrapper" style="box-shadow: 0 4px 16px rgba(0,0,0,0.1);">
                <div class="input-wrapper" style="flex: 1; display: flex;">
                    <i class="fas fa-search" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: var(--gray-400); z-index: 1; font-size: 18px;"></i>
                    <input type="text" placeholder="Search for help articles..." style="width: 100%; padding: 16px 16px 16px 48px; border: 2px solid var(--gray-200); border-radius: 8px 0 0 8px; font-size: 16px; outline: none; font-family: inherit;">
                </div>
                <button class="btn btn-primary" style="border-radius: 0 8px 8px 0; white-space: nowrap; padding: 0 24px;">
                    Search
                </button>
            </div>
        </div>
    </div>
</div>

<div class="category-body" style="background: var(--gray-100);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 320px; gap: 32px; align-items: start;">
            
            <div>
                <div class="section-header" style="margin-bottom: 24px;">
                    <h2>Frequently Asked Questions</h2>
                </div>
                
                <?php foreach ($faqs as $faqCat): ?>
                <div style="background: #fff; border-radius: 12px; padding: 24px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 20px; padding-bottom: 12px; border-bottom: 2px solid var(--red); display: inline-block;">
                        <?php echo htmlspecialchars($faqCat['category']); ?>
                    </h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 12px;">
                        <?php foreach ($faqCat['questions'] as $index => $faq): ?>
                        <div style="background: var(--gray-50); border-radius: 8px; overflow: hidden; border: 1px solid var(--gray-200);">
                            <div style="padding: 16px 20px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block'; this.querySelector('i').style.transform = this.nextElementSibling.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)';">
                                <span style="font-size: 14px; font-weight: 600; color: var(--gray-800);"><?php echo htmlspecialchars($faq['q']); ?></span>
                                <i class="fas fa-chevron-down" style="color: var(--gray-400); font-size: 12px; transition: transform 0.2s;"></i>
                            </div>
                            <div style="display: none; padding: 0 20px 16px 20px;">
                                <p style="font-size: 14px; color: var(--gray-600); line-height: 1.7;"><?php echo nl2br(htmlspecialchars($faq['a'])); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div>
                <div style="background: #fff; border-radius: 12px; padding: 28px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 20px;">
                        <i class="fas fa-headset" style="color: var(--red); margin-right: 8px;"></i> Need More Help?
                    </h3>
                    
                    <div style="margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid var(--gray-100);">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="font-size: 24px; color: var(--red);"><i class="fas fa-phone"></i></div>
                            <div>
                                <p style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px; font-weight: 600;">Phone</p>
                                <p style="font-size: 16px; font-weight: 700; color: var(--black);">1-800-SYNTECO</p>
                            </div>
                        </div>
                    </div>
                    
                    <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid var(--gray-100);">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="font-size: 24px; color: var(--red);"><i class="fas fa-clock"></i></div>
                            <div>
                                <p style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px; font-weight: 600;">Hours</p>
                                <p style="font-size: 13px; color: var(--gray-600);">Mon-Fri: 6AM - 9PM CT<br>Sat: 7AM - 5PM CT</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="contact.php" class="btn btn-primary" style="width: 100%; justify-content: center;">
                        <i class="fas fa-envelope"></i> Send Us a Message
                    </a>
                </div>
                
                <div style="background: #fff; border-radius: 12px; padding: 28px; border: 1px solid var(--gray-200);">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 16px;">
                        <i class="fas fa-link" style="color: var(--red); margin-right: 8px;"></i> Quick Links
                    </h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 4px;">
                        <a href="order-status.php" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 6px; font-size: 14px; color: var(--gray-700); text-decoration: none; transition: all 0.15s;">
                            <i class="fas fa-search" style="color: var(--gray-400); width: 16px;"></i>
                            Track an Order
                        </a>
                        <a href="shipping.php" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 6px; font-size: 14px; color: var(--gray-700); text-decoration: none; transition: all 0.15s;">
                            <i class="fas fa-truck" style="color: var(--gray-400); width: 16px;"></i>
                            Shipping Info
                        </a>
                        <a href="returns.php" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 6px; font-size: 14px; color: var(--gray-700); text-decoration: none; transition: all 0.15s;">
                            <i class="fas fa-undo" style="color: var(--gray-400); width: 16px;"></i>
                            Returns & Exchanges
                        </a>
                        <a href="payment.php" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 6px; font-size: 14px; color: var(--gray-700); text-decoration: none; transition: all 0.15s;">
                            <i class="fas fa-credit-card" style="color: var(--gray-400); width: 16px;"></i>
                            Payment Options
                        </a>
                        <a href="my-account.php" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 6px; font-size: 14px; color: var(--gray-700); text-decoration: none; transition: all 0.15s;">
                            <i class="fas fa-user-circle" style="color: var(--gray-400); width: 16px;"></i>
                            My Account
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
