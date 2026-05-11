<?php
require_once __DIR__ . '/config/init.php';

requireCustomerLogin();

$customer = getCurrentCustomer();
$orderId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$orders = getCustomerOrders($customer['id'], 50);
$singleOrder = null;

if ($orderId > 0) {
    $singleOrder = getCustomerOrderById($customer['id'], $orderId);
}

$pageTitle = 'Order History - Synteco Industrial Supply';
$pageDescription = 'View and track your Synteco orders.';
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
                    <a href="my-account.php">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                    <a href="order-history.php" class="active">
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
                    <?php if ($singleOrder): ?>
                    <h2>
                        <a href="order-history.php" style="color: var(--gray-500); margin-right: 12px;">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        Order #<?php echo htmlspecialchars($singleOrder['order_number'] ?? $singleOrder['id']); ?>
                    </h2>
                    <span class="order-status <?php echo htmlspecialchars($singleOrder['status']); ?>" style="font-size: 14px;">
                        <?php echo ucwords(str_replace('-', ' ', $singleOrder['status'])); ?>
                    </span>
                    <?php else: ?>
                    <h2><i class="fas fa-history" style="color: var(--red); margin-right: 8px;"></i> Order History</h2>
                    <?php endif; ?>
                </div>
                
                <?php if ($singleOrder): ?>
                
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 24px;">
                    <div style="padding: 16px; background: var(--gray-50); border-radius: 8px;">
                        <label style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px;">Order Date</label>
                        <p style="font-size: 15px; font-weight: 600; color: var(--gray-900); margin-top: 4px;">
                            <?php echo date('F j, Y g:i A', strtotime($singleOrder['created_at'])); ?>
                        </p>
                    </div>
                    <div style="padding: 16px; background: var(--gray-50); border-radius: 8px;">
                        <label style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px;">Payment Method</label>
                        <p style="font-size: 15px; font-weight: 600; color: var(--gray-900); margin-top: 4px;">
                            <?php echo ucwords(str_replace('-', ' ', $singleOrder['payment_method'] ?? 'Credit Card')); ?>
                        </p>
                    </div>
                    <div style="padding: 16px; background: var(--gray-50); border-radius: 8px;">
                        <label style="font-size: 12px; color: var(--gray-500); text-transform: uppercase; letter-spacing: 0.5px;">Order Total</label>
                        <p style="font-size: 18px; font-weight: 800; color: var(--red); margin-top: 4px;">
                            $<?php echo number_format((float)$singleOrder['grand_total'], 2); ?>
                        </p>
                    </div>
                </div>
                
                <div style="margin-top: 24px;">
                    <h3 style="font-size: 16px; font-weight: 700; margin-bottom: 16px; color: var(--black);">Order Items</h3>
                    
                    <?php if (!empty($singleOrder['items'])): ?>
                    <div style="background: var(--gray-50); border-radius: 12px; overflow: hidden;">
                        <?php foreach ($singleOrder['items'] as $item): ?>
                        <div style="display: flex; gap: 16px; padding: 16px; border-bottom: 1px solid var(--gray-200);">
                            <div style="width: 60px; height: 60px; background: #fff; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid var(--gray-200);">
                                <i class="fas fa-box" style="font-size: 24px; color: var(--gray-300);"></i>
                            </div>
                            <div style="flex: 1;">
                                <h4 style="font-size: 14px; font-weight: 600; color: var(--black); margin-bottom: 4px;"><?php echo htmlspecialchars($item['name']); ?></h4>
                                <p style="font-size: 12px; color: var(--gray-500);">
                                    SKU: <?php echo htmlspecialchars($item['sku'] ?? 'N/A'); ?> | 
                                    Qty: <?php echo (int)$item['quantity']; ?>
                                </p>
                            </div>
                            <div style="text-align: right;">
                                <p style="font-size: 14px; font-weight: 700; color: var(--black);">$<?php echo number_format((float)$item['unit_price'], 2); ?> each</p>
                                <p style="font-size: 16px; font-weight: 800; color: var(--red); margin-top: 4px;">$<?php echo number_format((float)$item['line_total'], 2); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php else: ?>
                    <div class="empty-state" style="padding: 24px;">
                        <p style="font-size: 14px; color: var(--gray-500);">No items found for this order.</p>
                    </div>
                    <?php endif; ?>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-top: 24px;">
                    <?php if (!empty($singleOrder['shipping_street'])): ?>
                    <div style="padding: 20px; background: var(--gray-50); border-radius: 12px;">
                        <h4 style="font-size: 14px; font-weight: 700; margin-bottom: 12px; color: var(--black);">
                            <i class="fas fa-truck" style="color: var(--red); margin-right: 6px;"></i> Shipping Address
                        </h4>
                        <p style="font-size: 14px; line-height: 1.6; color: var(--gray-700);">
                            <?php echo htmlspecialchars($singleOrder['shipping_street']); ?><br>
                            <?php if ($singleOrder['shipping_street2']): ?>
                            <?php echo htmlspecialchars($singleOrder['shipping_street2']); ?><br>
                            <?php endif; ?>
                            <?php echo htmlspecialchars($singleOrder['shipping_city']); ?>, 
                            <?php echo htmlspecialchars($singleOrder['shipping_state']); ?> 
                            <?php echo htmlspecialchars($singleOrder['shipping_zip']); ?>
                        </p>
                    </div>
                    <?php endif; ?>
                    
                    <div style="padding: 20px; background: var(--gray-50); border-radius: 12px;">
                        <h4 style="font-size: 14px; font-weight: 700; margin-bottom: 12px; color: var(--black);">
                            <i class="fas fa-receipt" style="color: var(--red); margin-right: 6px;"></i> Order Summary
                        </h4>
                        <div style="display: flex; justify-content: space-between; padding: 6px 0; font-size: 14px; color: var(--gray-600);">
                            <span>Subtotal</span>
                            <span>$<?php echo number_format((float)$singleOrder['subtotal'], 2); ?></span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 6px 0; font-size: 14px; color: var(--gray-600);">
                            <span>Shipping</span>
                            <span>$<?php echo number_format((float)$singleOrder['shipping_total'], 2); ?></span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 6px 0; font-size: 14px; color: var(--gray-600);">
                            <span>Tax</span>
                            <span>$<?php echo number_format((float)$singleOrder['tax_total'], 2); ?></span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 12px 0 0; margin-top: 8px; border-top: 1px solid var(--gray-300); font-size: 16px; font-weight: 800; color: var(--black);">
                            <span>Total</span>
                            <span style="color: var(--red);">$<?php echo number_format((float)$singleOrder['grand_total'], 2); ?></span>
                        </div>
                    </div>
                </div>
                
                <?php else: ?>
                
                <?php if (empty($orders)): ?>
                <div class="empty-state" style="padding: 60px 20px; border-radius: 12px; background: var(--gray-50); border: 1px solid var(--gray-200); text-align: center;">
                    <i class="fas fa-box-open" style="font-size: 64px; color: var(--gray-300); margin-bottom: 20px;"></i>
                    <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 8px; color: var(--gray-700);">No orders yet</h3>
                    <p style="font-size: 14px; color: var(--gray-500); margin-bottom: 24px; max-width: 400px; margin-left: auto; margin-right: auto;">
                        Once you place an order, it will appear here. Start shopping to see your order history.
                    </p>
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
                            <p>Placed on <?php echo date('F j, Y g:i A', strtotime($order['created_at'])); ?></p>
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
                
                <?php endif; ?>
                <?php endif; ?>
            </main>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
