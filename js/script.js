// ===== STICKY HEADER ON SCROLL =====
(function initStickyHeader() {
  const searchBar = document.querySelector('.search-bar');
  const header = document.querySelector('.site-header');
  const announcementBar = document.querySelector('.announcement-bar');

  if (!searchBar) return;

  let ticking = false;
  let lastScrollY = 0;
  let isSticky = false;

  function handleScroll() {
    const scrollY = window.pageYOffset;

    if (Math.abs(scrollY - lastScrollY) < 10) return;
    lastScrollY = scrollY;

    if (!ticking) {
      window.requestAnimationFrame(function() {
        if (scrollY > 150 && !isSticky) {
          enableSticky();
        } else if (scrollY <= 150 && isSticky) {
          disableSticky();
        }
        ticking = false;
      });
      ticking = true;
    }
  }

  function enableSticky() {
    isSticky = true;
    document.body.classList.add('has-sticky-header');
    header.classList.add('sticky');
    searchBar.classList.add('sticky');
  }

  function disableSticky() {
    isSticky = false;
    document.body.classList.remove('has-sticky-header');
    header.classList.remove('sticky');
    searchBar.classList.remove('sticky');
  }

  document.addEventListener('click', function(e) {
    if (!e.target.closest('#searchCategory')) {
      var dropdown = document.getElementById('categoryDropdown');
      if (dropdown) dropdown.classList.remove('show');
    }
  });

  window.addEventListener('scroll', handleScroll, { passive: true });
})();

// ===== MEGA MENU =====
(function() {
  const categoriesBtn = document.getElementById('allCategoriesBtn');
  const megaMenu = document.getElementById('megaMenu');
  const megaMenuOverlay = document.getElementById('megaMenuOverlay');
  const categoriesNav = document.querySelector('.categories-nav-wrapper');

  if (!categoriesBtn || !megaMenu) return;

  let menuOpen = false;
  let closeTimeout = null;

  function openMegaMenu() {
    if (closeTimeout) {
      clearTimeout(closeTimeout);
      closeTimeout = null;
    }
    menuOpen = true;
    megaMenu.classList.add('show');
    megaMenuOverlay.classList.add('show');
    const icon = categoriesBtn.querySelector('i:last-child');
    if (icon) icon.style.transform = 'rotate(180deg)';
  }

  function closeMegaMenu() {
    menuOpen = false;
    megaMenu.classList.remove('show');
    megaMenuOverlay.classList.remove('show');
    const icon = categoriesBtn.querySelector('i:last-child');
    if (icon) icon.style.transform = '';
  }

  function toggleMegaMenu() {
    if (menuOpen) {
      closeMegaMenu();
    } else {
      openMegaMenu();
    }
  }

  // Click on button toggles menu
  categoriesBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    e.preventDefault();
    toggleMegaMenu();
  });

  // Close when clicking overlay
  if (megaMenuOverlay) {
    megaMenuOverlay.addEventListener('click', function(e) {
      e.stopPropagation();
      closeMegaMenu();
    });
  }

  // Close on Escape
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && menuOpen) {
      closeMegaMenu();
    }
  });

  // Close when clicking outside
  document.addEventListener('click', function(e) {
    if (menuOpen && !categoriesNav.contains(e.target)) {
      closeMegaMenu();
    }
  });

  // Prevent menu from closing when moving mouse inside
  megaMenu.addEventListener('mouseenter', function() {
    if (closeTimeout) {
      clearTimeout(closeTimeout);
      closeTimeout = null;
    }
  });

  megaMenu.addEventListener('mouseleave', function() {
    // Optional: auto-close after delay when leaving menu
  });
})();

// ===== SEARCH CATEGORY DROPDOWN =====
const searchCategory = document.getElementById('searchCategory');
const categoryDropdown = document.getElementById('categoryDropdown');

if (searchCategory && categoryDropdown) {
  searchCategory.addEventListener('click', function(e) {
    e.stopPropagation();
    categoryDropdown.classList.toggle('show');
  });

  categoryDropdown.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const span = searchCategory.querySelector('span');
      if (span) {
        categoryDropdown.querySelectorAll('a').forEach(function(a) { a.classList.remove('active'); });
        link.classList.add('active');
        span.textContent = link.textContent;
        if (span.textContent !== 'All Products') {
          showToast('Searching in: ' + span.textContent, 'info');
        }
      }
      categoryDropdown.classList.remove('show');
    });
  });
}

document.addEventListener('click', function() {
  if (categoryDropdown?.classList.contains('show')) {
    categoryDropdown.classList.remove('show');
  }
});

// ===== SEARCH =====
const searchInput = document.getElementById('searchInput');
const searchBtn = document.getElementById('searchBtn');

function performSearch(query) {
  query = query.trim();
  if (!query) {
    searchInput?.focus();
    return;
  }
  window.location.href = 'search.php?q=' + encodeURIComponent(query);
}

// ===== QUANTITY ADJUSTMENT (PDP) =====
function adjustQty(delta) {
  var input = document.getElementById('qty');
  if (!input) return;
  var val = parseInt(input.value) || 1;
  val += delta;
  if (val < 1) val = 1;
  if (val > 999) val = 999;
  input.value = val;
}

// ===== ADD TO CART FROM PRODUCT PAGE =====
function addToCartFromProduct(btn, productId, name, price) {
  var qtyInput = document.getElementById('qty');
  var qty = qtyInput ? parseInt(qtyInput.value) || 1 : 1;

  if (productId) {
    fetch('ajax/cart_add.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: 'id=' + productId + '&qty=' + qty
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
      if (data.success && data.cart) {
        cartItems = data.count || 0;
        cartAmount = data.total || 0;
        updateCartDisplay();
        showToast(name + ' (Qty: ' + qty + ') added to cart!', 'success');
        if (btn) {
          btn.innerHTML = '<i class="fas fa-check"></i> Added!';
          btn.style.background = '#2e7d32';
          btn.disabled = true;
          setTimeout(function() {
            btn.innerHTML = '<i class="fas fa-cart-plus"></i> Add to Cart';
            btn.style.background = '';
            btn.disabled = false;
          }, 2000);
        }
      } else {
        showToast(data.error || 'Failed to add to cart', 'error');
      }
    })
    .catch(function() {
      fallbackAddToCartFromProduct(btn, name, price, qty);
    });
  } else {
    fallbackAddToCartFromProduct(btn, name, price, qty);
  }
}

function fallbackAddToCartFromProduct(btn, name, price, qty) {
  if (btn) {
    btn.innerHTML = '<i class="fas fa-check"></i> Added!';
    btn.style.background = '#2e7d32';
    btn.disabled = true;
    setTimeout(function() {
      btn.innerHTML = '<i class="fas fa-cart-plus"></i> Add to Cart';
      btn.style.background = '';
      btn.disabled = false;
    }, 2000);
  }

  cartItems += qty;
  cartAmount += (price || 0) * qty;
  updateCartDisplay();
  showToast(name + ' (Qty: ' + qty + ') added to cart!', 'success');
}

// ===== ADD TO LIST (WISHLIST) =====
function addToList(productId) {
  var lists = JSON.parse(localStorage.getItem('synteco_lists') || '[]');

  if (!lists.some(function(l) { return l.id === 'default'; })) {
    lists.push({ id: 'default', name: 'My List', products: [] });
  }

  var defaultList = lists.find(function(l) { return l.id === 'default'; });
  if (defaultList && !defaultList.products.includes(productId)) {
    defaultList.products.push(productId);
    localStorage.setItem('synteco_lists', JSON.stringify(lists));
    showToast('Added to My List!', 'success');
  } else if (defaultList && defaultList.products.includes(productId)) {
    showToast('Already in My List', 'info');
  }
}

// Remove duplicate category handling at end of file
(function() {
  var scripts = document.querySelectorAll('script');
  scripts.forEach(function(script) {
    if (script.textContent.includes('categoriesBtn.addEventListener')) {
      console.log('Duplicate event listener found');
    }
  });
})();

if (searchBtn && searchInput) {
  searchBtn.addEventListener('click', function() { performSearch(searchInput.value); });
  searchInput.addEventListener('keydown', function(e) {
    if (e.key === 'Enter') performSearch(searchInput.value);
  });
}

// ===== CART =====
let cartItems = 0;
let cartAmount = 0;

// Initialize cart from PHP session on page load
(function initCartFromSession() {
  fetch('ajax/cart_get.php')
    .then(function(res) { return res.json(); })
    .then(function(data) {
      if (data.success && data.cart) {
        cartItems = data.count || 0;
        cartAmount = data.total || 0;
        updateCartDisplay();
      }
    })
    .catch(function() {});
})();

function updateCartDisplay() {
  const cartCountEl = document.querySelector('.cart-count');
  const cartTotalEl = document.querySelector('.cart-text small');

  if (cartCountEl) {
    cartCountEl.textContent = cartItems;
    cartCountEl.classList.remove('bump');
    void cartCountEl.offsetWidth;
    cartCountEl.classList.add('bump');
  }
  if (cartTotalEl) {
    cartTotalEl.textContent = '$' + cartAmount.toFixed(2);
  }
}

function addToCart(btn, name, price, productId) {
  // If no productId provided, try to get from data attribute
  if (!productId && btn) {
    const card = btn.closest('.cat-product-card');
    if (card && card.dataset.id) {
      productId = parseInt(card.dataset.id);
    }
  }

  // Use AJAX to add to cart if we have a product ID
  if (productId) {
    fetch('ajax/cart_add.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: 'id=' + productId + '&qty=1'
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
      if (data.success) {
        cartItems = data.count;
        cartAmount = data.total;
        updateCartDisplay();

        if (btn) {
          btn.innerHTML = '<i class="fas fa-check"></i> Added!';
          btn.style.background = '#2e7d32';
          btn.disabled = true;
          setTimeout(function() {
            btn.innerHTML = '<i class="fas fa-cart-plus"></i> Add to Cart';
            btn.style.background = '';
            btn.disabled = false;
          }, 1500);
        }

        showToast((name || 'Product') + ' added to cart! (' + cartItems + ' item' + (cartItems > 1 ? 's' : '') + ')', 'success');
      } else {
        showToast(data.error || 'Failed to add to cart', 'error');
      }
    })
    .catch(function() {
      // Fallback to old behavior if AJAX fails
      fallbackAddToCart(btn, name, price);
    });
  } else {
    // Fallback for when we don't have product ID
    fallbackAddToCart(btn, name, price);
  }
}

function fallbackAddToCart(btn, name, price) {
  if (btn) {
    btn.innerHTML = '<i class="fas fa-check"></i> Added!';
    btn.style.background = '#2e7d32';
    btn.disabled = true;
    setTimeout(function() {
      btn.innerHTML = '<i class="fas fa-cart-plus"></i> Add to Cart';
      btn.style.background = '';
      btn.disabled = false;
    }, 1500);
  }

  cartItems += 1;
  cartAmount += price || 0;
  updateCartDisplay();
  showToast(name + ' added to cart! (' + cartItems + ' item' + (cartItems > 1 ? 's' : '') + ')', 'success');
}

// ===== ADD TO CART WITH QUANTITY (for modal) =====
function addToCartWithQty(btn, productId, name, price, qty) {
  qty = parseInt(qty) || 1;
  var finalQty = Math.max(1, qty);

  if (productId) {
    fetch('ajax/cart_add.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: 'id=' + productId + '&qty=' + finalQty
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
      if (data.success && data.cart) {
        cartItems = data.count || 0;
        cartAmount = data.total || 0;
        updateCartDisplay();
        showToast(name + ' (Qty: ' + finalQty + ') added to cart!', 'success');
      } else {
        showToast(data.error || 'Failed to add to cart', 'error');
      }
    })
    .catch(function() {
      cartItems += finalQty;
      cartAmount += (price || 0) * finalQty;
      updateCartDisplay();
      showToast(name + ' (Qty: ' + finalQty + ') added to cart!', 'success');
    });
  } else {
    cartItems += finalQty;
    cartAmount += (price || 0) * finalQty;
    updateCartDisplay();
    showToast(name + ' (Qty: ' + finalQty + ') added to cart!', 'success');
  }
}

// ===== VIEW TOGGLE (GRID/LIST) =====
(function() {
  const viewBtns = document.querySelectorAll('.view-btn');
  const productGrid = document.getElementById('productGrid');

  if (!viewBtns.length || !productGrid) return;

  viewBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      const view = btn.dataset.view;

      viewBtns.forEach(function(b) { b.classList.remove('active'); });
      btn.classList.add('active');

      if (view === 'list') {
        productGrid.classList.add('list-view');
      } else {
        productGrid.classList.remove('list-view');
      }

      localStorage.setItem('preferredView', view);
    });
  });

  const savedView = localStorage.getItem('preferredView');
  if (savedView) {
    const savedBtn = document.querySelector('.view-btn[data-view="' + savedView + '"]');
    if (savedBtn) savedBtn.click();
  }
})();

// ===== PRICE FILTER =====
(function() {
  const priceFilter = document.getElementById('priceFilter');
  if (!priceFilter) return;

  priceFilter.addEventListener('change', function() {
    const url = new URL(window.location.href);
    url.searchParams.set('price', this.value);
    url.searchParams.set('page', '1');
    window.location.href = url.toString();
  });

  const currentPrice = new URLSearchParams(window.location.search).get('price');
  if (currentPrice) {
    priceFilter.value = currentPrice;
  }
})();

// ===== BRAND FILTER =====
(function() {
  const brandFilter = document.getElementById('brandFilter');
  if (!brandFilter) return;

  brandFilter.addEventListener('change', function() {
    const url = new URL(window.location.href);
    url.searchParams.set('brand', this.value);
    url.searchParams.set('page', '1');
    window.location.href = url.toString();
  });

  const currentBrand = new URLSearchParams(window.location.search).get('brand');
  if (currentBrand) {
    brandFilter.value = currentBrand;
  }
})();

// ===== IN STOCK FILTER =====
(function() {
  const stockCheckbox = document.getElementById('inStockFilter');
  if (!stockCheckbox) return;

  stockCheckbox.addEventListener('change', function() {
    const url = new URL(window.location.href);
    if (this.checked) {
      url.searchParams.set('in_stock', '1');
    } else {
      url.searchParams.delete('in_stock');
    }
    url.searchParams.set('page', '1');
    window.location.href = url.toString();
  });

  const params = new URLSearchParams(window.location.search);
  if (params.get('in_stock') === '1') {
    stockCheckbox.checked = true;
  }
})();

document.querySelector('[data-action="cart"]')?.addEventListener('click', function(e) {
  e.preventDefault();
  if (cartItems === 0) {
    showToast('Your cart is empty. Shop our categories below!', 'info');
  } else {
    showCartPanel();
  }
});

// ===== CART PANEL =====
function showCartPanel() {
  const overlay = document.createElement('div');
  overlay.className = 'modal-overlay show';
  overlay.innerHTML = '<div class="modal-box" style="text-align:left;">' +
    '<h3><i class="fas fa-shopping-cart" style="color:var(--red);margin-right:8px;"></i> Shopping Cart</h3>' +
    '<p style="margin:16px 0;padding:16px;background:var(--gray-100);border-radius:8px;">' +
      '<strong>' + cartItems + ' item' + (cartItems > 1 ? 's' : '') + '</strong> in your cart<br>' +
      '<span style="font-size:24px;font-weight:800;color:var(--red);">$' + cartAmount.toFixed(2) + '</span>' +
    '</p>' +
    '<p style="color:var(--gray-600);margin-bottom:20px;">Proceed to checkout to complete your order.</p>' +
    '<div style="display:flex;gap:10px;">' +
      '<a href="cart.php" class="btn btn-primary">View Cart & Checkout</a>' +
      '<button class="btn btn-outline modal-close">Continue Shopping</button>' +
    '</div>' +
  '</div>';

  document.body.appendChild(overlay);

  overlay.querySelectorAll('.modal-close').forEach(function(el) {
    el.addEventListener('click', function() {
      overlay.classList.remove('show');
      setTimeout(function() { overlay.remove(); }, 300);
    });
  });

  overlay.addEventListener('click', function(e) {
    if (e.target === overlay) {
      overlay.classList.remove('show');
      setTimeout(function() { overlay.remove(); }, 300);
    }
  });
}

// Close mega menu when clicking any link inside it
document.querySelectorAll('.mega-menu a').forEach(function(link) {
  link.addEventListener('click', function() { toggleMegaMenu(false); });
});

// ===== SORTING =====
function sortProducts(value) {
  const grid = document.getElementById('productGrid');
  if (!grid) return;
  const cards = Array.from(grid.querySelectorAll('.cat-product-card'));

  cards.sort(function(a, b) {
    switch (value) {
      case 'price-asc':
        return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
      case 'price-desc':
        return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
      case 'name-asc':
        return (a.dataset.name || '').localeCompare(b.dataset.name || '');
      case 'name-desc':
        return (b.dataset.name || '').localeCompare(a.dataset.name || '');
      case 'newest':
        return new Date(b.dataset.date) - new Date(a.dataset.date);
      default:
        return 0;
    }
  });

  cards.forEach(function(card) { grid.appendChild(card); });
  showToast('Products sorted: ' + value, 'info');
}

// ===== VIEW TOGGLE =====
document.querySelectorAll('.view-btn').forEach(function(btn) {
  btn.addEventListener('click', function() {
    document.querySelectorAll('.view-btn').forEach(function(b) { b.classList.remove('active'); });
    btn.classList.add('active');
    const grid = document.getElementById('productGrid');
    if (!grid) return;
    if (btn.dataset.view === 'list') {
      grid.classList.add('list-view');
    } else {
      grid.classList.remove('list-view');
    }
  });
});

// ===== PRODUCT QUICK VIEW MODAL =====
function showProductModal(productId) {
  const modal = document.getElementById('productModal');
  const body = document.getElementById('productModalBody');
  if (!modal || !body) return;

  modal.classList.add('show');
  body.innerHTML = '<div class="modal-loading"><i class="fas fa-spinner fa-spin"></i> Loading product details...</div>';

  // Fetch product details via AJAX
  fetch('ajax/product_details.php?id=' + productId)
    .then(function(res) { return res.json(); })
    .then(function(data) {
      if (data.error) {
        body.innerHTML = '<div class="empty-state"><i class="fas fa-exclamation-circle"></i><p>' + data.error + '</p></div>';
        return;
      }
      body.innerHTML = '<div class="product-quick-view">' +
        '<div class="quick-view-image">' +
          (data.image ? '<img src="uploads/' + data.image + '" alt="' + escapeHtml(data.name) + '">' : '<div style="height:200px;display:flex;align-items:center;justify-content:center;background:var(--gray-50);border-radius:8px;font-size:64px;color:var(--gray-300);"><i class="fas fa-box"></i></div>') +
        '</div>' +
        '<div class="quick-view-info">' +
          '<h2>' + escapeHtml(data.name) + '</h2>' +
          '<div class="prod-category">' + escapeHtml(data.category || '') + '</div>' +
          '<div class="prod-price" style="font-size:28px;margin:12px 0;">$' + parseFloat(data.price).toFixed(2) + '</div>' +
          '<div class="prod-stock">' +
            (parseInt(data.stock) > 0
              ? '<i class="fas fa-check-circle" style="color:#2e7d32;"></i> <span style="color:#2e7d32;font-weight:600;">In Stock (' + data.stock + ' available)</span>'
              : '<i class="fas fa-times-circle" style="color:#c62828;"></i> <span style="color:#c62828;font-weight:600;">Out of Stock</span>') +
          '</div>' +
          (data.description ? '<p style="margin:12px 0;color:var(--gray-600);line-height:1.5;">' + escapeHtml(data.description) + '</p>' : '') +
          '<div class="quick-view-qty" style="margin-top:16px;display:flex;align-items:center;gap:10px;">' +
            '<label style="font-weight:600;">Qty:</label>' +
            '<div style="display:flex;align-items:center;border:1px solid var(--gray-300);border-radius:6px;overflow:hidden;">' +
              '<button type="button" onclick="var i=document.getElementById(\'modalQty\');i.value=Math.max(1,parseInt(i.value)-1);" style="padding:8px 12px;border:none;background:var(--gray-100);cursor:pointer;">-</button>' +
              '<input type="number" id="modalQty" value="1" min="1" style="width:50px;text-align:center;border:none;padding:8px;">' +
              '<button type="button" onclick="var i=document.getElementById(\'modalQty\');i.value=parseInt(i.value)+1;" style="padding:8px 12px;border:none;background:var(--gray-100);cursor:pointer;">+</button>' +
            '</div>' +
          '</div>' +
          '<div style="margin-top:20px;display:flex;gap:10px;">' +
            '<button class="btn btn-primary btn-lg" onclick="var qty=document.getElementById(\'modalQty\').value;addToCartWithQty(this,' + data.id + ',\'' + escapeHtml(data.name) + '\', ' + data.price + ',qty);closeProductModal();"><i class="fas fa-cart-plus"></i> Add to Cart</button>' +
            '<button class="btn btn-outline btn-lg modal-close-btn-alt" onclick="closeProductModal()">Close</button>' +
          '</div>' +
        '</div>' +
      '</div>';
    })
    .catch(function() {
      body.innerHTML = '<div class="empty-state"><i class="fas fa-exclamation-circle"></i><p>Failed to load product details.</p></div>';
    });
}

function closeProductModal() {
  const modal = document.getElementById('productModal');
  if (modal) {
    modal.classList.remove('show');
  }
}

function escapeHtml(str) {
  if (!str) return '';
  var div = document.createElement('div');
  div.appendChild(document.createTextNode(str));
  return div.innerHTML;
}

// ===== VIEW DIGITAL CATALOGS BUTTON =====
document.querySelector('.hero-cta .btn-outline-light')?.addEventListener('click', function(e) {
  e.preventDefault();
  document.getElementById('digitalCatalogs')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
  setTimeout(function() { showToast('Browse our digital catalogs', 'info'); }, 500);
});

// ===== ANNOUNCEMENT BAR LEARN MORE =====
document.querySelector('.announcement-text a')?.addEventListener('click', function(e) {
  e.preventDefault();
  showModal('Improved Ordering Experience');
});

// ===== DATA-ACTION HANDLER =====
function handleAction(action) {
  var actions = {
    'account': { msg: 'My Account page', modal: true },
    'order-history': { msg: 'Order History page', modal: true },
    'lists': { msg: 'Your Lists page', modal: true },
    'quotes': { msg: 'Special Order Quotes page', modal: true },
    'register': { msg: 'Registration page', modal: true },
    'signin': { msg: 'Sign In page', modal: true },
    'cart': { msg: 'Shopping Cart' },
    'categories': function() { var el = document.getElementById('featuredCategories'); if (el) el.scrollIntoView({ behavior: 'smooth' }); },
    'shipping': { msg: 'Shipping Information page', modal: true },
    'contact': { msg: 'Contact Us page', modal: true },
    'catalog': function() { toggleMegaMenu(); },
    'all-categories': function() { window.location.href = 'category.php?slug=tools'; },
    'shop-all': function() { window.location.href = 'category.php?slug=tools'; },
    'browse-catalogs': { msg: 'Digital Catalogs page', modal: true },
    'all-industries': { msg: 'All Industries page', modal: true },
    'find-branch': { msg: 'Find a Branch page', modal: true },
    'app-store': { msg: 'App Store page' },
    'google-play': { msg: 'Google Play page' },
    'about': { msg: 'About Synteco page', modal: true },
    'careers': { msg: 'Careers page', modal: true },
    'corporate': { msg: 'Corporate Responsibility page', modal: true },
    'diversity': { msg: 'Inclusion & Diversity page', modal: true },
    'supplier': { msg: 'Become a Supplier page', modal: true },
    'investors': { msg: 'Investor Relations page', modal: true },
    'press': { msg: 'Press Room page', modal: true },
    'education': { msg: 'Technical Education page', modal: true },
    'catalog-request': { msg: 'Catalog Request page', modal: true },
    'feedback': { msg: 'Feedback page', modal: true },
    'help': { msg: 'Help Center page', modal: true },
    'returns': { msg: 'Return Policy page', modal: true },
    'order-status': { msg: 'Order Status page', modal: true },
    'payment': { msg: 'Payment Options page', modal: true },
    'reorder': { msg: 'Auto-Reorder page', modal: true },
    'invoices': { msg: 'Invoice Options page', modal: true },
    'repair': { msg: 'Repair & Replacement page', modal: true },
    'special-orders': { msg: 'Special Orders page', modal: true },
    'keepstock': { msg: 'KeepStock Program page', modal: true },
    'clearance': { msg: 'Clearance Center page', modal: true },
    'digital-catalogs': { msg: 'Digital Catalogs page', modal: true },
    'hot-buys': { msg: 'Hot Buys page', modal: true },
    'rebates': { msg: 'Rebates page', modal: true },
    'repair-parts': { msg: 'Repair Parts page', modal: true },
    'webinars': { msg: 'Webinars page', modal: true },
    'knowhow': { msg: 'Synteco KnowHow page', modal: true },
    'facebook': { msg: 'Facebook page' },
    'twitter': { msg: 'Twitter page' },
    'youtube': { msg: 'YouTube page' },
    'linkedin': { msg: 'LinkedIn page' },
    'instagram': { msg: 'Instagram page' },
    'terms-access': { msg: 'Terms of Access page', modal: true },
    'terms-sale': { msg: 'Terms of Sale page', modal: true },
    'privacy': { msg: 'Privacy Policy page', modal: true },
    'ads': { msg: 'About Our Ads page', modal: true },
    'sitemap': { msg: 'Sitemap page', modal: true }
  };

  var actionDef = actions[action];
  if (!actionDef) return;

  if (typeof actionDef === 'function') {
    actionDef();
    return;
  }

  if (actionDef.modal) {
    showModal(actionDef.msg);
  } else {
    showToast(actionDef.msg, 'info');
  }
}

// ===== CATCH ALL DATA-ACTION CLICKS =====
document.addEventListener('click', function(e) {
  var el = e.target.closest('[data-action]');
  if (!el) return;
  var action = el.getAttribute('data-action');
  if (e.defaultPrevented) return;
  if (action === 'cart') return;
  e.preventDefault();
  handleAction(action);
});

// ===== INDUSTRY CARD CLICKS =====
document.querySelectorAll('.industry-card').forEach(function(card) {
  card.addEventListener('click', function(e) {
    e.preventDefault();
    var name = this.querySelector('span')?.textContent || 'Industry';
    showToast('Exploring: ' + name + ' Solutions', 'info');
  });
});

// ===== HEADER NAV LINKS =====
document.querySelectorAll('.header-nav a').forEach(function(link) {
  link.addEventListener('click', function(e) {
    e.preventDefault();
    var text = link.textContent.trim();
    if (text === 'Catalog') {
      toggleMegaMenu();
    } else if (text === 'Find a Branch') {
      handleAction('find-branch');
    } else if (text === 'KeepStock') {
      handleAction('keepstock');
    } else if (text === 'Help') {
      handleAction('help');
    } else {
      showToast(text + ' page', 'info');
    }
  });
});

// ===== MODAL SYSTEM =====
function showModal(pageName) {
  var existing = document.querySelector('.modal-overlay:not(#productModal)');
  if (existing) existing.remove();

  var overlay = document.createElement('div');
  overlay.className = 'modal-overlay show';
  overlay.innerHTML =
    '<div class="modal-box">' +
      '<i class="fas fa-industry"></i>' +
      '<h3>' + pageName + '</h3>' +
      '<p>This feature is coming soon! We\'re working hard to bring you the full Synteco experience. Thank you for your patience.</p>' +
      '<button class="btn btn-primary modal-close">Got it</button>' +
    '</div>';

  document.body.appendChild(overlay);

  overlay.querySelector('.modal-close').addEventListener('click', function() {
    overlay.classList.remove('show');
    setTimeout(function() { overlay.remove(); }, 300);
  });

  overlay.addEventListener('click', function(e) {
    if (e.target === overlay) {
      overlay.classList.remove('show');
      setTimeout(function() { overlay.remove(); }, 300);
    }
  });

  document.addEventListener('keydown', function escHandler(e) {
    if (e.key === 'Escape' && document.body.contains(overlay)) {
      overlay.classList.remove('show');
      setTimeout(function() { overlay.remove(); }, 300);
      document.removeEventListener('keydown', escHandler);
    }
  });
}

// ===== TOAST SYSTEM =====
function showToast(message, type) {
  if (!type) type = 'info';
  var container = document.querySelector('.toast-container');
  if (!container) {
    container = document.createElement('div');
    container.className = 'toast-container';
    document.body.appendChild(container);
  }

  var toast = document.createElement('div');
  toast.className = 'toast ' + type;
  var icon = type === 'success' ? 'fa-check-circle' : 'fa-info-circle';
  toast.innerHTML = '<i class="fas ' + icon + '"></i> ' + message;
  container.appendChild(toast);

  setTimeout(function() {
    toast.style.opacity = '0';
    toast.style.transform = 'translateX(100%)';
    toast.style.transition = 'all 0.3s ease';
    setTimeout(function() { toast.remove(); }, 300);
  }, 2500);
}

// ===== CLOSE MODAL ON OVERLAY CLICK =====
document.addEventListener('click', function(e) {
  var modal = document.getElementById('productModal');
  if (modal && e.target === modal) {
    closeProductModal();
  }
  
  var userDropdown = document.getElementById('userDropdown');
  var userBtn = document.getElementById('userMenuBtn');
  if (userDropdown && !userBtn?.contains(e.target) && !userDropdown.contains(e.target)) {
    userDropdown.classList.remove('show');
  }
});

// ===== ESC KEY TO CLOSE MODAL =====
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeProductModal();
    var userDropdown = document.getElementById('userDropdown');
    if (userDropdown) userDropdown.classList.remove('show');
  }
});

// ===== USER MENU DROPDOWN =====
(function() {
  var userBtn = document.getElementById('userMenuBtn');
  var userDropdown = document.getElementById('userDropdown');
  
  if (userBtn && userDropdown) {
    userBtn.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      userDropdown.classList.toggle('show');
    });
  }
})();

// ===== UPDATE ACTION HANDLERS FOR REAL PAGES =====
(function() {
  var actionOverrides = {
    'signin': 'login.php',
    'register': 'register.php',
    'forgot-password': 'forgot-password.php',
    'account': 'my-account.php',
    'order-history': 'order-history.php',
    'lists': 'lists.php',
    'quotes': 'quotes.php',
    'all-industries': 'all-industries.php',
    'about': 'about.php',
    'careers': 'careers.php',
    'corporate': 'corporate.php',
    'diversity': 'diversity.php',
    'supplier': 'supplier.php',
    'investors': 'investors.php',
    'press': 'press.php',
    'education': 'education.php',
    'contact': 'contact.php',
    'catalog-request': 'catalog-request.php',
    'feedback': 'feedback.php',
    'find-branch': 'find-branch.php',
    'help': 'help.php',
    'returns': 'returns.php',
    'shipping': 'shipping.php',
    'order-status': 'order-status.php',
    'payment': 'payment.php',
    'reorder': 'reorder.php',
    'invoices': 'invoices.php',
    'repair': 'repair.php',
    'special-orders': 'special-orders.php',
    'keepstock': 'keepstock.php',
    'clearance': 'clearance.php',
    'digital-catalogs': 'digital-catalogs.php',
    'browse-catalogs': 'digital-catalogs.php',
    'hot-buys': 'hot-buys.php',
    'rebates': 'rebates.php',
    'repair-parts': 'repair-parts.php',
    'webinars': 'webinars.php',
    'knowhow': 'knowhow.php',
    'terms-access': 'terms-access.php',
    'terms-sale': 'terms-sale.php',
    'privacy': 'privacy.php',
    'ads': 'ads.php',
    'sitemap': 'sitemap.php',
  };
  
  document.addEventListener('click', function(e) {
    var el = e.target.closest('[data-action]');
    if (!el) return;
    
    var action = el.getAttribute('data-action');
    if (actionOverrides[action]) {
      e.preventDefault();
      window.location.href = actionOverrides[action];
    }
  });
})();

// ===== CART UPDATE/REMOVE (for cart.php) =====
function updateCartQty(productId, delta) {
  fetch('ajax/cart_get.php')
    .then(function(res) { return res.json(); })
    .then(function(data) {
      if (!data.success || !data.cart) return;

      var currentQty = 1;
      for (var key in data.cart) {
        if (data.cart[key].id == productId) {
          currentQty = data.cart[key].quantity;
          break;
        }
      }

      var newQty = currentQty + delta;
      if (newQty < 1) newQty = 1;
      if (newQty > 999) newQty = 999;

      updateCartQtyDirect(productId, newQty);
    });
}

function updateCartQtyDirect(productId, qty) {
  qty = parseInt(qty) || 1;
  if (qty < 1) qty = 1;

  fetch('ajax/cart_update.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'id=' + productId + '&qty=' + qty
  })
  .then(function(res) { return res.json(); })
  .then(function(data) {
    if (data.success) {
      location.reload();
    } else {
      showToast(data.error || 'Failed to update quantity', 'error');
    }
  })
  .catch(function() {
    showToast('Failed to update quantity', 'error');
  });
}

function removeCartItem(productId) {
  if (!confirm('Remove this item from your cart?')) return;

  fetch('ajax/cart_remove.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'id=' + productId
  })
  .then(function(res) { return res.json(); })
  .then(function(data) {
    if (data.success) {
      location.reload();
    } else {
      showToast(data.error || 'Failed to remove item', 'error');
    }
  })
  .catch(function() {
    showToast('Failed to remove item', 'error');
  });
}

function clearCartItems() {
  if (!confirm('Clear all items from your cart?')) return;

  fetch('ajax/cart_remove.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'clear=1'
  })
  .then(function(res) { return res.json(); })
  .then(function(data) {
    location.reload();
  })
  .catch(function() {
    location.reload();
  });
}

// ===== CHECKOUT - PLACE ORDER =====
function placeOrder() {
  var email = document.getElementById('email').value;
  var phone = document.getElementById('phone').value;
  var firstName = document.getElementById('firstName').value;
  var lastName = document.getElementById('lastName').value;
  var company = document.getElementById('company').value;
  var address = document.getElementById('address').value;
  var address2 = document.getElementById('address2').value;
  var city = document.getElementById('city').value;
  var state = document.getElementById('state').value;
  var zip = document.getElementById('zip').value;
  var payment = document.querySelector('input[name="payment"]:checked').value;
  var poNumber = document.getElementById('poNumber').value;

  if (!email || !firstName || !lastName || !address || !city || !state || !zip) {
    showToast('Please fill in all required fields', 'error');
    return;
  }

  var orderData = {
    email: email,
    phone: phone,
    first_name: firstName,
    last_name: lastName,
    company: company,
    address: address,
    address2: address2,
    city: city,
    state: state,
    zip: zip,
    payment: payment,
    po_number: poNumber
  };

  showToast('Processing order...', 'info');

  setTimeout(function() {
    showToast('Order placed successfully! Thank you for your order.', 'success');

    fetch('ajax/cart_remove.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: 'clear=1'
    })
    .then(function() {
      setTimeout(function() {
        window.location.href = 'order-history.php';
      }, 2000);
    });
  }, 1500);
}

// Toggle PO number field
document.addEventListener('DOMContentLoaded', function() {
  var paymentRadios = document.querySelectorAll('input[name="payment"]');
  var poField = document.getElementById('poField');

  if (paymentRadios && poField) {
    paymentRadios.forEach(function(radio) {
      radio.addEventListener('change', function() {
        if (this.value === 'po' || this.value === 'invoice') {
          poField.style.display = 'block';
        } else {
          poField.style.display = 'none';
        }
      });
    });
  }
});

console.log('Synteco Industrial Supply - Inspired by Grainger.com');
