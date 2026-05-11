<?php
require_once __DIR__ . '/includes/categories.php';
require_once __DIR__ . '/config/database.php';

$cartItems = getCartItems();
$cartCount = getCartCount();
$cartTotal = getCartTotal();

$pageTitle = 'Shopping Cart - Synteco Industrial Supply';
$pageDescription = 'Review your shopping cart at Synteco.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

  <div class="category-hero" style="padding:32px 0;">
    <div class="container">
      <div class="breadcrumb">
        <a href="index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <span>Shopping Cart</span>
      </div>
      <h1>Shopping Cart</h1>
      <p><?php echo $cartCount; ?> item<?php echo $cartCount !== 1 ? 's' : ''; ?> in your cart</p>
    </div>
  </div>

  <div class="category-body">
    <div class="container">

      <?php if (empty($cartItems)): ?>
      <div class="empty-state">
        <i class="fas fa-shopping-cart"></i>
        <p>Your cart is empty</p>
        <p style="margin-top:8px;font-size:14px;color:var(--gray-500);">Browse our categories to find the products you need.</p>
        <a href="category.php?slug=tools" class="btn-back"><i class="fas fa-arrow-left"></i> Start Shopping</a>
      </div>
      <?php else: ?>

      <div class="cart-layout">
        <!-- ===== CART ITEMS ===== -->
        <div class="cart-items-section">
          <div class="cart-table-header">
            <span class="cart-col-product">Product</span>
            <span class="cart-col-price">Price</span>
            <span class="cart-col-qty">Quantity</span>
            <span class="cart-col-total">Total</span>
            <span class="cart-col-action"></span>
          </div>

          <div class="cart-items" id="cartItems">
            <?php foreach ($cartItems as $item): ?>
            <div class="cart-item" data-id="<?php echo $item['id']; ?>">
              <div class="cart-col-product">
                <div class="cart-item-image">
                  <?php if ($item['image']): ?>
                  <img src="uploads/<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                  <?php else: ?>
                  <i class="fas fa-box" style="font-size:32px;color:var(--gray-300);"></i>
                  <?php endif; ?>
                </div>
                <div class="cart-item-info">
                  <a href="product.php?id=<?php echo $item['id']; ?>" class="cart-item-name"><?php echo htmlspecialchars($item['name']); ?></a>
                  <span class="cart-item-sku">Item #: <?php echo $item['id']; ?></span>
                </div>
              </div>
              <div class="cart-col-price">
                <span class="cart-item-price">$<?php echo number_format($item['price'], 2); ?></span>
              </div>
              <div class="cart-col-qty">
                <div class="cart-qty-selector">
                  <button class="qty-btn" onclick="updateCartQty(<?php echo $item['id']; ?>, -1)">-</button>
                  <input type="number" class="cart-qty-input" value="<?php echo $item['quantity']; ?>" min="1" max="999" onchange="updateCartQtyDirect(<?php echo $item['id']; ?>, this.value)">
                  <button class="qty-btn" onclick="updateCartQty(<?php echo $item['id']; ?>, 1)">+</button>
                </div>
              </div>
              <div class="cart-col-total">
                <span class="cart-item-line-total">$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></span>
              </div>
              <div class="cart-col-action">
                <button class="cart-remove-btn" onclick="removeCartItem(<?php echo $item['id']; ?>)" title="Remove"><i class="fas fa-trash"></i></button>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <div class="cart-actions-bottom">
            <a href="category.php?slug=tools" class="btn btn-outline"><i class="fas fa-arrow-left"></i> Continue Shopping</a>
            <button class="btn btn-outline" onclick="clearCartItems()" style="color:var(--red);border-color:var(--red);"><i class="fas fa-trash"></i> Clear Cart</button>
          </div>
        </div>

        <!-- ===== CART SUMMARY ===== -->
        <div class="cart-summary">
          <h3>Order Summary</h3>
          <div class="summary-row">
            <span>Items (<?php echo $cartCount; ?>)</span>
            <span>$<?php echo number_format($cartTotal, 2); ?></span>
          </div>
          <div class="summary-row">
            <span>Shipping</span>
            <span>Calculated at checkout</span>
          </div>
          <div class="summary-divider"></div>
          <div class="summary-row summary-total">
            <span>Estimated Total</span>
            <span>$<?php echo number_format($cartTotal, 2); ?></span>
          </div>
          <a href="checkout.php" class="btn btn-primary btn-lg btn-block" style="justify-content:center;margin-top:20px;">
            <i class="fas fa-lock"></i> Proceed to Checkout
          </a>
          <div class="summary-payments">
            <i class="fab fa-cc-visa"></i>
            <i class="fab fa-cc-mastercard"></i>
            <i class="fab fa-cc-amex"></i>
            <i class="fab fa-cc-paypal"></i>
          </div>
        </div>
      </div>

      <?php endif; ?>
    </div>
  </div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
