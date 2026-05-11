<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Contact Us - Synteco Industrial Supply';
$pageDescription = 'Contact Synteco for customer support, sales inquiries, and general questions. We\'re here to help.';
$currentSlug = '';

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        $success = 'Thank you for your message! Our team will get back to you within 1-2 business days.';
    }
}

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Contact Us</span>
        </div>
        <h1 style="font-size: 42px;">Contact Us</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Have questions? We're here to help. Reach out to our team by phone, email, or online form.
        </p>
    </div>
</div>

<div class="category-body" style="background: var(--gray-100);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 360px; gap: 32px; align-items: start;">
            
            <div>
                <?php if ($success): ?>
                <div class="auth-alert success" style="margin-bottom: 24px;">
                    <i class="fas fa-check-circle"></i>
                    <span><?php echo htmlspecialchars($success); ?></span>
                </div>
                <?php endif; ?>
                
                <?php if ($error): ?>
                <div class="auth-alert error" style="margin-bottom: 24px;">
                    <i class="fas fa-exclamation-circle"></i>
                    <span><?php echo htmlspecialchars($error); ?></span>
                </div>
                <?php endif; ?>
                
                <div style="background: #fff; border-radius: 12px; padding: 32px; border: 1px solid var(--gray-200);">
                    <h3 style="font-size: 20px; font-weight: 700; color: var(--black); margin-bottom: 24px;">Send Us a Message</h3>
                    
                    <form method="POST" action="" class="auth-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name <span style="color: var(--red);">*</span></label>
                                <div class="input-wrapper">
                                    <i class="fas fa-user"></i>
                                    <input type="text" id="name" name="name" placeholder="Your full name" required value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address <span style="color: var(--red);">*</span></label>
                                <div class="input-wrapper">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" id="email" name="email" placeholder="your@email.com" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <div class="input-wrapper">
                                    <i class="fas fa-phone"></i>
                                    <input type="tel" id="phone" name="phone" placeholder="(555) 555-5555" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject <span style="color: var(--red);">*</span></label>
                                <div class="input-wrapper">
                                    <i class="fas fa-tag"></i>
                                    <select id="subject" name="subject" required style="width: 100%; padding: 12px 14px 12px 44px; border: 2px solid var(--gray-200); border-radius: 8px; font-size: 15px; outline: none; font-family: inherit; cursor: pointer;">
                                        <option value="">Select a subject</option>
                                        <option value="order" <?php echo ($_POST['subject'] ?? '') === 'order' ? 'selected' : ''; ?>>Order Inquiry</option>
                                        <option value="return" <?php echo ($_POST['subject'] ?? '') === 'return' ? 'selected' : ''; ?>>Returns & Exchanges</option>
                                        <option value="product" <?php echo ($_POST['subject'] ?? '') === 'product' ? 'selected' : ''; ?>>Product Question</option>
                                        <option value="billing" <?php echo ($_POST['subject'] ?? '') === 'billing' ? 'selected' : ''; ?>>Billing & Pricing</option>
                                        <option value="account" <?php echo ($_POST['subject'] ?? '') === 'account' ? 'selected' : ''; ?>>Account Help</option>
                                        <option value="quote" <?php echo ($_POST['subject'] ?? '') === 'quote' ? 'selected' : ''; ?>>Request a Quote</option>
                                        <option value="other" <?php echo ($_POST['subject'] ?? '') === 'other' ? 'selected' : ''; ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message <span style="color: var(--red);">*</span></label>
                            <textarea id="message" name="message" placeholder="How can we help you?" required rows="6" style="width: 100%; padding: 12px 14px; border: 2px solid var(--gray-200); border-radius: 8px; font-size: 15px; outline: none; font-family: inherit; resize: vertical; min-height: 150px;"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; justify-content: center;">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
            
            <div>
                <div style="background: #fff; border-radius: 12px; padding: 28px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 20px;">
                        <i class="fas fa-headset" style="color: var(--red); margin-right: 8px;"></i> Contact Information
                    </h3>
                    
                    <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid var(--gray-100);">
                        <div style="display: flex; align-items: flex-start; gap: 12px;">
                            <div style="font-size: 20px; color: var(--red); margin-top: 2px;"><i class="fas fa-phone"></i></div>
                            <div>
                                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Phone</h4>
                                <p style="font-size: 14px; color: var(--gray-600);">1-800-SYNTECO</p>
                                <p style="font-size: 12px; color: var(--gray-500); margin-top: 4px;">Mon-Fri: 6:00 AM - 9:00 PM CT<br>Sat: 7:00 AM - 5:00 PM CT</p>
                            </div>
                        </div>
                    </div>
                    
                    <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid var(--gray-100);">
                        <div style="display: flex; align-items: flex-start; gap: 12px;">
                            <div style="font-size: 20px; color: var(--red); margin-top: 2px;"><i class="fas fa-envelope"></i></div>
                            <div>
                                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Email</h4>
                                <p style="font-size: 14px; color: var(--gray-600);">customer.service@synteco.com</p>
                                <p style="font-size: 12px; color: var(--gray-500); margin-top: 4px;">Response within 1-2 business days</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <div style="display: flex; align-items: flex-start; gap: 12px;">
                            <div style="font-size: 20px; color: var(--red); margin-top: 2px;"><i class="fas fa-building"></i></div>
                            <div>
                                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Corporate Headquarters</h4>
                                <p style="font-size: 14px; color: var(--gray-600);">123 Industrial Blvd<br>Chicago, IL 60601</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div style="background: #fff; border-radius: 12px; padding: 28px; border: 1px solid var(--gray-200);">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 16px;">
                        <i class="fas fa-map-marker-alt" style="color: var(--red); margin-right: 8px;"></i> Find a Branch
                    </h3>
                    <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 16px; line-height: 1.6;">
                        Visit any of our 6 distribution centers nationwide for will-call pickup, counter sales, and expert assistance.
                    </p>
                    <a href="find-branch.php" class="btn btn-outline" style="width: 100%; justify-content: center;">
                        <i class="fas fa-search-location"></i> Find Nearest Branch
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
