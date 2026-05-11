<?php
require_once __DIR__ . '/config/init.php';

$error = '';
$success = '';

if (isCustomerLoggedIn()) {
    header('Location: my-account.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCustomerCsrf($_POST['csrf_token'] ?? '')) {
        $error = 'Security token expired. Please try again.';
    } else {
        $email = trim($_POST['email'] ?? '');
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';
        $firstName = trim($_POST['first_name'] ?? '');
        $lastName = trim($_POST['last_name'] ?? '');
        $company = trim($_POST['company'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        
        if (empty($email) || empty($username) || empty($password)) {
            $error = 'Please fill in all required fields.';
        } elseif ($password !== $confirmPassword) {
            $error = 'Passwords do not match.';
        } else {
            $result = registerCustomer($email, $username, $password, $firstName, $lastName, $company, $phone);
            
            if ($result['success']) {
                header('Location: my-account.php?registered=1');
                exit;
            } else {
                $error = $result['error'];
            }
        }
    }
}

$pageTitle = 'Create Account - Synteco Industrial Supply';
$pageDescription = 'Create a Synteco account for fast checkout, order tracking, and exclusive business pricing.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="auth-page">
    <div class="container">
        <div class="auth-container" style="max-width: 540px;">
            <div class="auth-card">
                <div class="auth-header">
                    <h1><i class="fas fa-user-plus" style="color: var(--red); margin-right: 8px;"></i> Create Account</h1>
                    <p>Join Synteco for fast checkout, order tracking, and business pricing</p>
                </div>
                
                <?php if ($error): ?>
                <div class="auth-alert error">
                    <i class="fas fa-exclamation-circle"></i>
                    <span><?php echo htmlspecialchars($error); ?></span>
                </div>
                <?php endif; ?>
                
                <form class="auth-form" method="POST" action="">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(customerCsrfToken()); ?>">
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name">First Name <span style="color: var(--gray-400);">(Optional)</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-user"></i>
                                <input type="text" id="first_name" name="first_name" placeholder="First name" autocomplete="given-name" value="<?php echo htmlspecialchars($_POST['first_name'] ?? ''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name <span style="color: var(--gray-400);">(Optional)</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-user"></i>
                                <input type="text" id="last_name" name="last_name" placeholder="Last name" autocomplete="family-name" value="<?php echo htmlspecialchars($_POST['last_name'] ?? ''); ?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address <span style="color: var(--red);">*</span></label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" name="email" placeholder="your@email.com" required autocomplete="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="username">Username <span style="color: var(--red);">*</span></label>
                        <div class="input-wrapper">
                            <i class="fas fa-at"></i>
                            <input type="text" id="username" name="username" placeholder="Choose a username" required autocomplete="username" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>">
                        </div>
                        <div class="password-hint">Username must be 3+ characters (letters, numbers, underscores only)</div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="company">Company <span style="color: var(--gray-400);">(Optional)</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-building"></i>
                                <input type="text" id="company" name="company" placeholder="Company name" autocomplete="organization" value="<?php echo htmlspecialchars($_POST['company'] ?? ''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone <span style="color: var(--gray-400);">(Optional)</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-phone"></i>
                                <input type="tel" id="phone" name="phone" placeholder="(555) 555-5555" autocomplete="tel" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password <span style="color: var(--red);">*</span></label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" name="password" placeholder="Create a password" required autocomplete="new-password">
                        </div>
                        <div class="password-requirements">
                            <span><i class="fas fa-info-circle" style="color: var(--gray-400);"></i> Minimum 8 characters</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password <span style="color: var(--red);">*</span></label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required autocomplete="new-password">
                        </div>
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 24px;">
                        <label class="form-checkbox">
                            <input type="checkbox" name="terms" required>
                            <span>I agree to the <a href="#" data-action="terms-access" style="color: var(--red);">Terms of Access</a> and <a href="#" data-action="privacy" style="color: var(--red);">Privacy Policy</a></span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-user-plus"></i> Create Account
                    </button>
                </form>
                
                <div class="auth-divider">
                    <span>Already have an account?</span>
                </div>
                
                <div class="auth-footer">
                    <p>Already have an account? <a href="login.php">Sign in</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
