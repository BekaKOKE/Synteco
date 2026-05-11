<?php
require_once __DIR__ . '/includes/categories.php';
require_once __DIR__ . '/config/database.php';

$cartItems = getCartItems();
$cartCount = getCartCount();
$cartTotal = getCartTotal();

if (empty($cartItems)) {
    header('Location: cart.php');
    exit;
}

$pageTitle = 'Checkout - Synteco Industrial Supply';
$pageDescription = 'Complete your order at Synteco Industrial Supply.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

  <div class="category-hero" style="padding:32px 0;">
    <div class="container">
      <div class="breadcrumb">
        <a href="index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <a href="cart.php">Cart</a>
        <i class="fas fa-chevron-right"></i>
        <span>Checkout</span>
      </div>
      <h1>Checkout</h1>
      <p>Complete your order of <?php echo $cartCount; ?> item<?php echo $cartCount !== 1 ? 's' : ''; ?></p>
    </div>
  </div>

  <div class="category-body">
    <div class="container">
      <div class="checkout-layout">

        <!-- ===== CHECKOUT FORM ===== -->
        <div class="checkout-form">
          <div class="checkout-section">
            <h3><i class="fas fa-user"></i> Contact Information</h3>
            <div class="form-row">
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" placeholder="your@email.com" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" placeholder="(555) 555-5555">
              </div>
            </div>
          </div>

          <div class="checkout-section">
            <h3><i class="fas fa-truck"></i> Shipping Address</h3>
            <div class="form-row">
              <div class="form-group">
                <label for="firstName">First Name *</label>
                <input type="text" id="firstName" required>
              </div>
              <div class="form-group">
                <label for="lastName">Last Name *</label>
                <input type="text" id="lastName" required>
              </div>
            </div>
            <div class="form-group">
              <label for="company">Company</label>
              <input type="text" id="company" placeholder="Company name (optional)">
            </div>
            <div class="form-group">
              <label for="address">Address *</label>
              <input type="text" id="address" placeholder="Street address" required>
            </div>
            <div class="form-group">
              <label for="address2">Apartment, Suite, etc.</label>
              <input type="text" id="address2" placeholder="Optional">
            </div>
            <div class="form-row form-row-3">
              <div class="form-group">
                <label for="city">City *</label>
                <input type="text" id="city" required>
              </div>
              <div class="form-group">
                <label for="state">State *</label>
                <select id="state" required>
                  <option value="">Select</option>
                  <option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="FL">Florida</option>
                  <option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option>
                  <option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option>
                  <option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option>
                  <option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option>
                  <option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option>
                  <option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
                </select>
              </div>
              <div class="form-group">
                <label for="zip">ZIP Code *</label>
                <input type="text" id="zip" required>
              </div>
            </div>
          </div>

          <div class="checkout-section">
            <h3><i class="fas fa-credit-card"></i> Payment Method</h3>
            <div class="payment-options">
              <label class="payment-option">
                <input type="radio" name="payment" value="credit-card" checked>
                <span><i class="fas fa-credit-card"></i> Credit Card</span>
              </label>
              <label class="payment-option">
                <input type="radio" name="payment" value="invoice">
                <span><i class="fas fa-file-invoice"></i> Invoice / Credit Account</span>
              </label>
              <label class="payment-option">
                <input type="radio" name="payment" value="po">
                <span><i class="fas fa-file"></i> Purchase Order</span>
              </label>
            </div>
            <div class="form-group" id="poField" style="display:none;">
              <label for="poNumber">PO Number</label>
              <input type="text" id="poNumber" placeholder="Enter PO number">
            </div>
          </div>

          <button class="btn btn-primary btn-lg btn-block" onclick="placeOrder()" style="justify-content:center;font-size:18px;padding:18px;">
            <i class="fas fa-lock"></i> Place Order — $<?php echo number_format($cartTotal, 2); ?>
          </button>
        </div>

        <!-- ===== ORDER SUMMARY SIDEBAR ===== -->
        <div class="checkout-summary">
          <h3>Order Summary</h3>
          <?php foreach ($cartItems as $item): ?>
          <div class="checkout-summary-item">
            <div class="checkout-summary-img">
              <?php if ($item['image']): ?>
              <img src="uploads/<?php echo htmlspecialchars($item['image']); ?>" alt="">
              <?php else: ?>
              <i class="fas fa-box"></i>
              <?php endif; ?>
            </div>
            <div class="checkout-summary-info">
              <span class="checkout-summary-name"><?php echo htmlspecialchars($item['name']); ?></span>
              <span class="checkout-summary-qty">Qty: <?php echo $item['quantity']; ?></span>
            </div>
            <span class="checkout-summary-price">$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></span>
          </div>
          <?php endforeach; ?>

          <div class="checkout-summary-divider"></div>
          <div class="checkout-summary-row">
            <span>Subtotal</span>
            <span>$<?php echo number_format($cartTotal, 2); ?></span>
          </div>
          <div class="checkout-summary-row">
            <span>Shipping</span>
            <span>Calculated at checkout</span>
          </div>
          <div class="checkout-summary-divider"></div>
          <div class="checkout-summary-row checkout-summary-total">
            <span>Total</span>
            <span>$<?php echo number_format($cartTotal, 2); ?></span>
          </div>
        </div>

      </div>
    </div>
  </div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
