<?php
require_once __DIR__ . '/config/init.php';

$error = '';
$success = '';

if (isCustomerLoggedIn()) {
    header('Location: my-account.php');
    exit;
}

$pageTitle = 'Forgot Password - Synteco Industrial Supply';
$pageDescription = 'Reset your Synteco account password.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="auth-page">
    <div class="container">
        <div class="auth-container">
            <div class="auth-card">
                <div class="auth-header">
                    <h1><i class="fas fa-key" style="color: var(--red); margin-right: 8px;"></i> Forgot Password</h1>
                    <p>Enter your email address and we'll send you a link to reset your password.</p>
                </div>
                
                <?php if ($error): ?>
                <div class="auth-alert error">
                    <i class="fas fa-exclamation-circle"></i>
                    <span><?php echo htmlspecialchars($error); ?></span>
                </div>
                <?php endif; ?>
                
                <?php if ($success): ?>
                <div class="auth-alert success">
                    <i class="fas fa-check-circle"></i>
                    <span><?php echo htmlspecialchars($success); ?></span>
                </div>
                <?php else: ?>
                
                <form class="auth-form" method="POST" action="">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(customerCsrfToken()); ?>">
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" name="email" placeholder="Enter your email address" required autocomplete="email">
                        </div>
                    </div>
                    
                    <div class="auth-alert info" style="margin-bottom: 24px;">
                        <i class="fas fa-info-circle"></i>
                        <span><strong>Note:</strong> Password reset requires email configuration. Please contact support if you need assistance.</span>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg" disabled>
                        <i class="fas fa-paper-plane"></i> Send Reset Link
                    </button>
                    
                    <p style="text-align: center; margin-top: 16px; font-size: 12px; color: var(--gray-500);">
                        <i class="fas fa-wrench"></i> Feature coming soon - requires email server configuration
                    </p>
                </form>
                
                <?php endif; ?>
                
                <div class="auth-divider">
                    <span>Remember your password?</span>
                </div>
                
                <div class="auth-footer">
                    <p><a href="login.php" class="form-link"><i class="fas fa-arrow-left"></i> Back to Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
