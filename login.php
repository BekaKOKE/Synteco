<?php
require_once __DIR__ . '/config/init.php';

$error = '';
$success = '';
$redirect = $_GET['redirect'] ?? '';

if (isCustomerLoggedIn()) {
    header('Location: my-account.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCustomerCsrf($_POST['csrf_token'] ?? '')) {
        $error = 'Security token expired. Please try again.';
    } else {
        $login = trim($_POST['login'] ?? '');
        $password = $_POST['password'] ?? '';
        
        if (empty($login) || empty($password)) {
            $error = 'Please enter your username/email and password.';
        } else {
            $result = loginCustomer($login, $password);
            
            if ($result['success']) {
                if ($redirect) {
                    header('Location: ' . $redirect);
                } else {
                    header('Location: my-account.php');
                }
                exit;
            } else {
                $error = $result['error'];
            }
        }
    }
}

$pageTitle = 'Sign In - Synteco Industrial Supply';
$pageDescription = 'Sign in to your Synteco account for fast checkout, order tracking, and more.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="auth-page">
    <div class="container">
        <div class="auth-container">
            <div class="auth-card">
                <div class="auth-header">
                    <h1><i class="fas fa-user-circle" style="color: var(--red); margin-right: 8px;"></i> Sign In</h1>
                    <p>Sign in to your account for fast checkout and order tracking</p>
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
                <?php endif; ?>
                
                <form class="auth-form" method="POST" action="">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(customerCsrfToken()); ?>">
                    <?php if ($redirect): ?>
                    <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($redirect); ?>">
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <label for="login">Username or Email Address</label>
                        <div class="input-wrapper">
                            <i class="fas fa-user"></i>
                            <input type="text" id="login" name="login" placeholder="Enter username or email" required autocomplete="username" value="<?php echo htmlspecialchars($_POST['login'] ?? ''); ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" name="password" placeholder="Enter your password" required autocomplete="current-password">
                        </div>
                    </div>
                    
                    <div class="form-row-inline">
                        <label class="form-checkbox">
                            <input type="checkbox" name="remember">
                            <span>Remember me</span>
                        </label>
                        <a href="forgot-password.php" class="form-link">Forgot password?</a>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-sign-in-alt"></i> Sign In
                    </button>
                </form>
                
                <div class="auth-divider">
                    <span>New to Synteco?</span>
                </div>
                
                <div class="auth-footer">
                    <p>Don't have an account? <a href="register.php">Create an account</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
