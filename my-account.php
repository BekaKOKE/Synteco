<?php
require_once __DIR__ . '/config/init.php';

requireCustomerLogin();

$customer = getCurrentCustomer();
$orders = getCustomerOrders($customer['id'], 10);
$registered = isset($_GET['registered']);

$pageTitle = 'My Account - Synteco Industrial Supply';
$pageDescription = 'Manage your Synteco account, view orders, and update your profile.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="account-page">
    <div class="container">
        <div class="account-layout">
            <aside class="account-sidebar">
                <div class="account-user-card">
                    <div class="account-avatar">
                        <?php echo strtoupper(substr($customer['first_name'] ?: $customer['username'], 0, 1)); ?>
                    </div>
                    <h4>
                        <?php 
                        if ($customer['first_name'] && $customer['last_name']) {
                            echo htmlspecialchars($customer['first_name'] . ' ' . $customer['last_name']);
                        } else {
                            echo htmlspecialchars($customer['username']);
                        }
                        ?>
                    </h4>
                    <p><?php echo htmlspecialchars($customer['email']); ?></p>
                </div>
                
                <nav class="account-nav">
                    <a href="my-account.php" class="active">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                    <a href="order-history.php">
                        <i class="fas fa-box"></i> Orders
                    </a>
                    <a href="my-account.php#addresses">
                        <i class="fas fa-map-marker-alt"></i> Addresses
                    </a>
                    <a href="my-account.php#profile">
                        <i class="fas fa-user-edit"></i> Profile
                    </a>
                    <a href="logout.php" onclick="return confirm('Are you sure you want to sign out?');">
                        <i class="fas fa-sign-out-alt"></i> Sign Out
                    </a>
                </nav>
            </aside>
            
            <main class="account-content">
                <div class="account-content-header">
                    <h2>Account Dashboard</h2>
                    <div>
                        <a href="category.php?slug=tools" class="btn btn-primary">
                            <i class="fas fa-shopping-bag"></i> Shop Now
                        </a>
                    </div>
                </div>
                
                <?php if ($registered): ?>
                <div class="auth-alert success" style="margin-bottom: 24px;">
                    <i class="fas fa-check-circle"></i>
                    <span><strong>Welcome to Synteco!</strong> Your account has been created successfully.</span>
                </div>
                <?php endif; ?>
                
                <div class="dashboard-cards">
                    <div class="dashboard-card">
                        <div class="dashboard-card-icon red">
                            <i class="fas fa-box"></i>
                        </div>
                        <h4><?php echo count($orders); ?></h4>
                        <p>Total Orders</p>
                    </div>
                    <div class="dashboard-card">
                        <div class="dashboard-card-icon blue">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h4><?php echo count(array_filter($orders, function($o) { return $o['status'] === 'processing' || $o['status'] === 'shipped'; })); ?></h4>
                        <p>In Progress</p>
                    </div>
                    <div class="dashboard-card">
                        <div class="dashboard-card-icon green">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <h4><?php 
                            $total = 0;
                            foreach ($orders as $o) {
                                if ($o['status'] !== 'cancelled') {
                                    $total += (float)$o['grand_total'];
                                }
                            }
                            echo '$' . number_format($total, 2);
                        ?></h4>
                        <p>Total Spent</p>
                    </div>
                    <div class="dashboard-card">
                        <div class="dashboard-card-icon purple">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4><?php echo $customer['account_type'] === 'standard' ? 'Standard' : ucfirst($customer['account_type']); ?></h4>
                        <p>Account Type</p>
                    </div>
                </div>
                
                <div style="margin-top: 32px;">
                    <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 16px; color: var(--black);">
                        <i class="fas fa-history" style="color: var(--red); margin-right: 8px;"></i> Recent Orders
                    </h3>
                    
                    <?php if (empty($orders)): ?>
                    <div class="empty-state" style="padding: 40px 20px; border-radius: 12px; background: var(--gray-50); border: 1px solid var(--gray-200); text-align: center;">
                        <i class="fas fa-box-open" style="font-size: 48px; color: var(--gray-300); margin-bottom: 16px;"></i>
                        <h4 style="font-size: 18px; font-weight: 700; margin-bottom: 8px; color: var(--gray-700);">No orders yet</h4>
                        <p style="font-size: 14px; color: var(--gray-500); margin-bottom: 20px;">Start shopping to see your order history here.</p>
                        <a href="category.php?slug=tools" class="btn btn-primary">
                            <i class="fas fa-shopping-cart"></i> Start Shopping
                        </a>
                    </div>
                    <?php else: ?>
                    
                    <?php foreach ($orders as $order): ?>
                    <div class="order-item">
                        <div class="order-header">
                            <div class="order-header-left">
                                <h4>Order #<?php echo htmlspecialchars($order['order_number'] ?? $order['id']); ?></h4>
                                <p>Placed on <?php echo date('F j, Y', strtotime($order['created_at'])); ?></p>
                            </div>
                            <span class="order-status <?php echo htmlspecialchars($order['status']); ?>">
                                <?php echo ucwords(str_replace('-', ' ', $order['status'])); ?>
                            </span>
                        </div>
                        <div class="order-footer">
                            <div class="order-footer-left">
                                <span>Total: <strong style="color: var(--black);">$<?php echo number_format((float)$order['grand_total'], 2); ?></strong></span>
                            </div>
                            <div>
                                <a href="order-history.php?id=<?php echo $order['id']; ?>" class="btn btn-outline" style="padding: 6px 14px; font-size: 13px;">
                                    <i class="fas fa-eye"></i> View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                    <div style="text-align: center; margin-top: 20px;">
                        <a href="order-history.php" class="form-link" style="font-size: 14px;">
                            View all orders <i class="fas fa-chevron-right" style="font-size: 11px; margin-left: 4px;"></i>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                
                <div id="profile" style="margin-top: 40px; padding-top: 20px; border-top: 1px solid var(--gray-200);">
                    <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 16px; color: var(--black);">
                        <i class="fas fa-user-edit" style="color: var(--red); margin-right: 8px;"></i> Account Information
                    </h3>
                    
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                        <div style="padding: 16px; background: var(--gray-50); border-radius: 8px;">
                            <label style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px;">Username</label>
                            <p style="font-size: 15px; font-weight: 600; color: var(--gray-900); margin-top: 4px;"><?php echo htmlspecialchars($customer['username']); ?></p>
                        </div>
                        <div style="padding: 16px; background: var(--gray-50); border-radius: 8px;">
                            <label style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px;">Email</label>
                            <p style="font-size: 15px; font-weight: 600; color: var(--gray-900); margin-top: 4px;"><?php echo htmlspecialchars($customer['email']); ?></p>
                        </div>
                        <?php if ($customer['first_name'] || $customer['last_name']): ?>
                        <div style="padding: 16px; background: var(--gray-50); border-radius: 8px;">
                            <label style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px;">Full Name</label>
                            <p style="font-size: 15px; font-weight: 600; color: var(--gray-900); margin-top: 4px;">
                                <?php echo htmlspecialchars(trim(($customer['first_name'] ?? '') . ' ' . ($customer['last_name'] ?? ''))); ?>
                            </p>
                        </div>
                        <?php endif; ?>
                        <?php if ($customer['company']): ?>
                        <div style="padding: 16px; background: var(--gray-50); border-radius: 8px;">
                            <label style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px;">Company</label>
                            <p style="font-size: 15px; font-weight: 600; color: var(--gray-900); margin-top: 4px;"><?php echo htmlspecialchars($customer['company']); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if ($customer['phone']): ?>
                        <div style="padding: 16px; background: var(--gray-50); border-radius: 8px;">
                            <label style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px;">Phone</label>
                            <p style="font-size: 15px; font-weight: 600; color: var(--gray-900); margin-top: 4px;"><?php echo htmlspecialchars($customer['phone']); ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
