-- ============================================================
-- Synteco Industrial Supply — Enterprise Database Schema
-- Inspired by Grainger.com architecture
-- ============================================================

CREATE DATABASE IF NOT EXISTS synteco_db
    DEFAULT CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE synteco_db;

-- ============================================================
-- Branches (warehouses/stores)
-- ============================================================
CREATE TABLE IF NOT EXISTS branches (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(100) NOT NULL,
    code        VARCHAR(20)  NOT NULL UNIQUE,
    address     VARCHAR(255) DEFAULT NULL,
    city        VARCHAR(100) DEFAULT NULL,
    state       VARCHAR(50)  DEFAULT NULL,
    zip         VARCHAR(20)  DEFAULT NULL,
    phone       VARCHAR(20)  DEFAULT NULL,
    is_active   TINYINT(1)   NOT NULL DEFAULT 1,
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Categories (Nested Set Model for unlimited depth)
-- ============================================================
CREATE TABLE IF NOT EXISTS categories (
    id            INT AUTO_INCREMENT PRIMARY KEY,
    parent_id     INT            DEFAULT NULL,
    name          VARCHAR(100)   NOT NULL,
    slug          VARCHAR(100)   NOT NULL UNIQUE,
    lft           INT            NOT NULL DEFAULT 0,
    rgt           INT            NOT NULL DEFAULT 0,
    level         INT            NOT NULL DEFAULT 0,
    description   TEXT           DEFAULT NULL,
    icon          VARCHAR(50)    DEFAULT NULL,
    image         VARCHAR(255)   DEFAULT NULL,
    product_count INT            NOT NULL DEFAULT 0,
    sort_order    INT            NOT NULL DEFAULT 0,
    status        TINYINT(1)     NOT NULL DEFAULT 1,
    created_at    TIMESTAMP      DEFAULT CURRENT_TIMESTAMP,
    updated_at    TIMESTAMP      DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_parent (parent_id),
    INDEX idx_nested (lft, rgt),
    INDEX idx_level (level),
    INDEX idx_slug (slug),
    INDEX idx_status (status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Brands
-- ============================================================
CREATE TABLE IF NOT EXISTS brands (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(100) NOT NULL,
    slug        VARCHAR(100) NOT NULL UNIQUE,
    logo        VARCHAR(255) DEFAULT NULL,
    description TEXT         DEFAULT NULL,
    status      TINYINT(1)   NOT NULL DEFAULT 1,
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Products (Core Table)
-- ============================================================
CREATE TABLE IF NOT EXISTS products (
    id                INT AUTO_INCREMENT PRIMARY KEY,
    sku               VARCHAR(50)   NOT NULL UNIQUE,
    name              VARCHAR(255)  NOT NULL,
    slug              VARCHAR(255)  NOT NULL,
    short_description VARCHAR(500)  DEFAULT NULL,
    description       TEXT          DEFAULT NULL,
    manufacturer      VARCHAR(255)  DEFAULT NULL,
    manufacturer_sku  VARCHAR(100)  DEFAULT NULL,
    brand_id          INT           DEFAULT NULL,
    category_id       INT           DEFAULT NULL,
    unit_of_measure   VARCHAR(20)   DEFAULT 'Each',
    weight            DECIMAL(10,4) DEFAULT NULL,
    weight_unit       VARCHAR(10)   DEFAULT 'lbs',
    dimensions        VARCHAR(100)  DEFAULT NULL,
    country_of_origin VARCHAR(100)  DEFAULT NULL,
    upc               VARCHAR(50)   DEFAULT NULL,
    status            VARCHAR(20)   NOT NULL DEFAULT 'active',
    is_featured       TINYINT(1)    NOT NULL DEFAULT 0,
    created_at        TIMESTAMP     DEFAULT CURRENT_TIMESTAMP,
    updated_at        TIMESTAMP     DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_sku (sku),
    INDEX idx_slug (slug),
    INDEX idx_category (category_id),
    INDEX idx_brand (brand_id),
    INDEX idx_status (status),
    INDEX idx_featured (is_featured),
    INDEX idx_manufacturer (manufacturer),
    FULLTEXT idx_fulltext (name, sku, description, short_description),
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL,
    FOREIGN KEY (brand_id) REFERENCES brands(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Attribute Definitions (Flexible EAV Schema)
-- ============================================================
CREATE TABLE IF NOT EXISTS attribute_definitions (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    name            VARCHAR(100) NOT NULL,
    slug            VARCHAR(100) NOT NULL UNIQUE,
    type            VARCHAR(50)  NOT NULL DEFAULT 'text',
    unit            VARCHAR(50)  DEFAULT NULL,
    options         TEXT         DEFAULT NULL,
    filterable      TINYINT(1)   NOT NULL DEFAULT 0,
    show_in_pdp     TINYINT(1)   NOT NULL DEFAULT 1,
    show_in_list    TINYINT(1)   NOT NULL DEFAULT 0,
    sort_order      INT          NOT NULL DEFAULT 0,
    category_id     INT          DEFAULT NULL,
    created_at      TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_category_attr (category_id),
    INDEX idx_filterable (filterable),
    INDEX idx_slug (slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Product Attribute Values (EAV)
-- ============================================================
CREATE TABLE IF NOT EXISTS product_attributes (
    id           INT AUTO_INCREMENT PRIMARY KEY,
    product_id   INT NOT NULL,
    attribute_id INT NOT NULL,
    value        TEXT NOT NULL,
    UNIQUE KEY unique_attr (product_id, attribute_id),
    INDEX idx_product (product_id),
    INDEX idx_attribute (attribute_id),
    INDEX idx_value (value(255)),
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    FOREIGN KEY (attribute_id) REFERENCES attribute_definitions(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Product Images
-- ============================================================
CREATE TABLE IF NOT EXISTS product_images (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    product_id  INT          NOT NULL,
    url         VARCHAR(255) NOT NULL,
    alt_text    VARCHAR(255) DEFAULT NULL,
    sort_order  INT          NOT NULL DEFAULT 0,
    is_primary  TINYINT(1)   NOT NULL DEFAULT 0,
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_product_img (product_id),
    INDEX idx_primary (product_id, is_primary),
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Inventory (Multi-Warehouse)
-- ============================================================
CREATE TABLE IF NOT EXISTS inventory (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    product_id  INT NOT NULL,
    branch_id   INT NOT NULL,
    quantity    INT NOT NULL DEFAULT 0,
    reserved    INT NOT NULL DEFAULT 0,
    reorder_point INT DEFAULT NULL,
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY unique_inv (product_id, branch_id),
    INDEX idx_product_inv (product_id),
    INDEX idx_branch_inv (branch_id),
    INDEX idx_low_stock (product_id, branch_id, quantity),
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    FOREIGN KEY (branch_id) REFERENCES branches(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Customer Groups (for tiered pricing)
-- ============================================================
CREATE TABLE IF NOT EXISTS customer_groups (
    id            INT AUTO_INCREMENT PRIMARY KEY,
    name          VARCHAR(100) NOT NULL UNIQUE,
    description   TEXT         DEFAULT NULL,
    markup_percent DECIMAL(5,2) NOT NULL DEFAULT 0.00,
    is_default    TINYINT(1)   NOT NULL DEFAULT 0,
    created_at    TIMESTAMP    DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Prices (Customer-Group & Quantity-Break Pricing)
-- ============================================================
CREATE TABLE IF NOT EXISTS prices (
    id                INT AUTO_INCREMENT PRIMARY KEY,
    product_id        INT            NOT NULL,
    customer_group_id INT            NOT NULL,
    price             DECIMAL(12,2)  NOT NULL DEFAULT 0.00,
    list_price        DECIMAL(12,2)  DEFAULT NULL,
    cost_price        DECIMAL(12,2)  DEFAULT NULL,
    min_quantity      INT            NOT NULL DEFAULT 1,
    max_quantity      INT            DEFAULT NULL,
    effective_date    DATE           DEFAULT NULL,
    expiry_date       DATE           DEFAULT NULL,
    created_at        TIMESTAMP      DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_product_price (product_id),
    INDEX idx_group_price (customer_group_id),
    UNIQUE KEY unique_price (product_id, customer_group_id, min_quantity),
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    FOREIGN KEY (customer_group_id) REFERENCES customer_groups(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Users (Customer Accounts)
-- ============================================================
CREATE TABLE IF NOT EXISTS users (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    email           VARCHAR(100) NOT NULL UNIQUE,
    password        VARCHAR(255) NOT NULL,
    first_name      VARCHAR(100) DEFAULT NULL,
    last_name       VARCHAR(100) DEFAULT NULL,
    company         VARCHAR(255) DEFAULT NULL,
    phone           VARCHAR(20)  DEFAULT NULL,
    customer_group_id INT        DEFAULT NULL,
    account_type    VARCHAR(20)  NOT NULL DEFAULT 'standard',
    is_verified     TINYINT(1)   NOT NULL DEFAULT 0,
    status          VARCHAR(20)  NOT NULL DEFAULT 'active',
    last_login      TIMESTAMP    NULL DEFAULT NULL,
    created_at      TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    updated_at      TIMESTAMP    DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_company (company),
    INDEX idx_status (status),
    FOREIGN KEY (customer_group_id) REFERENCES customer_groups(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- User Addresses
-- ============================================================
CREATE TABLE IF NOT EXISTS addresses (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    user_id     INT          NOT NULL,
    label       VARCHAR(50)  DEFAULT 'Default',
    company     VARCHAR(255) DEFAULT NULL,
    street      VARCHAR(255) NOT NULL,
    street2     VARCHAR(255) DEFAULT NULL,
    city        VARCHAR(100) NOT NULL,
    state       VARCHAR(50)  NOT NULL,
    zip         VARCHAR(20)  NOT NULL,
    country     VARCHAR(100) NOT NULL DEFAULT 'US',
    is_default  TINYINT(1)   NOT NULL DEFAULT 0,
    is_billing  TINYINT(1)   NOT NULL DEFAULT 1,
    is_shipping TINYINT(1)   NOT NULL DEFAULT 1,
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_user_addr (user_id),
    INDEX idx_default (user_id, is_default),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Admins (Admin Authentication)
-- ============================================================
CREATE TABLE IF NOT EXISTS admins (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    username    VARCHAR(50)  NOT NULL UNIQUE,
    email       VARCHAR(100) NOT NULL UNIQUE,
    password    VARCHAR(255) NOT NULL,
    role        VARCHAR(50)  NOT NULL DEFAULT 'admin',
    is_active   TINYINT(1)   NOT NULL DEFAULT 1,
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Shopping Cart
-- ============================================================
CREATE TABLE IF NOT EXISTS cart (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    user_id     INT          DEFAULT NULL,
    session_id  VARCHAR(100) DEFAULT NULL,
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_user_cart (user_id),
    INDEX idx_session (session_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS cart_items (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    cart_id     INT            NOT NULL,
    product_id  INT            NOT NULL,
    quantity    INT            NOT NULL DEFAULT 1,
    price       DECIMAL(12,2)  NOT NULL,
    created_at  TIMESTAMP      DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_cart (cart_id),
    INDEX idx_product_cart (product_id),
    UNIQUE KEY unique_cart_product (cart_id, product_id),
    FOREIGN KEY (cart_id) REFERENCES cart(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Orders
-- ============================================================
CREATE TABLE IF NOT EXISTS orders (
    id                INT AUTO_INCREMENT PRIMARY KEY,
    order_number      VARCHAR(50)  NOT NULL UNIQUE,
    user_id           INT          DEFAULT NULL,
    status            VARCHAR(50)  NOT NULL DEFAULT 'pending',
    subtotal          DECIMAL(12,2) NOT NULL DEFAULT 0.00,
    shipping_total    DECIMAL(12,2) NOT NULL DEFAULT 0.00,
    tax_total         DECIMAL(12,2) NOT NULL DEFAULT 0.00,
    grand_total       DECIMAL(12,2) NOT NULL DEFAULT 0.00,
    shipping_address_id INT        DEFAULT NULL,
    billing_address_id  INT        DEFAULT NULL,
    payment_method    VARCHAR(50)  DEFAULT NULL,
    payment_status    VARCHAR(50)  NOT NULL DEFAULT 'pending',
    po_number         VARCHAR(100) DEFAULT NULL,
    notes             TEXT         DEFAULT NULL,
    created_at        TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    updated_at        TIMESTAMP    DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_user_order (user_id),
    INDEX idx_status (status),
    INDEX idx_order_number (order_number),
    INDEX idx_created (created_at),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS order_items (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    order_id        INT            NOT NULL,
    product_id      INT            DEFAULT NULL,
    sku             VARCHAR(50)    DEFAULT NULL,
    name            VARCHAR(255)   NOT NULL,
    quantity        INT            NOT NULL,
    unit_price      DECIMAL(12,2)  NOT NULL,
    line_total      DECIMAL(12,2)  NOT NULL,
    created_at      TIMESTAMP      DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_order (order_id),
    INDEX idx_product_order (product_id),
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Quotes (B2B Quote System)
-- ============================================================
CREATE TABLE IF NOT EXISTS quotes (
    id            INT AUTO_INCREMENT PRIMARY KEY,
    quote_number  VARCHAR(50)  NOT NULL UNIQUE,
    user_id       INT          DEFAULT NULL,
    status        VARCHAR(50)  NOT NULL DEFAULT 'draft',
    subtotal      DECIMAL(12,2) DEFAULT 0.00,
    notes         TEXT         DEFAULT NULL,
    valid_until   DATE         DEFAULT NULL,
    created_at    TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    updated_at    TIMESTAMP    DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_user_quote (user_id),
    INDEX idx_status (status),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS quote_items (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    quote_id    INT            NOT NULL,
    product_id  INT            DEFAULT NULL,
    sku         VARCHAR(50)    DEFAULT NULL,
    name        VARCHAR(255)   NOT NULL,
    quantity    INT            NOT NULL DEFAULT 1,
    unit_price  DECIMAL(12,2)  DEFAULT NULL,
    created_at  TIMESTAMP      DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_quote (quote_id),
    FOREIGN KEY (quote_id) REFERENCES quotes(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Approval Workflows (B2B Order Approvals)
-- ============================================================
CREATE TABLE IF NOT EXISTS approval_workflows (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    company_id      INT          NOT NULL,
    name            VARCHAR(255) NOT NULL,
    min_amount      DECIMAL(12,2) DEFAULT NULL,
    max_amount      DECIMAL(12,2) DEFAULT NULL,
    approver_order  INT          NOT NULL DEFAULT 1,
    created_at      TIMESTAMP    DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Default admin user (password: admin123)
-- ============================================================
INSERT IGNORE INTO admins (username, email, password)
VALUES ('admin', 'admin@synteco.com',
        '$2y$10$.IkTtkG9Pc/7NCp3YcmkPuVc80E1AShRVj05Tv5ipVEHMTWVi./vW');

-- ============================================================
-- Default branch
-- ============================================================
INSERT IGNORE INTO branches (id, name, code, address, city, state, zip, phone)
VALUES (1, 'Main Distribution Center', 'MAIN', '123 Industrial Blvd', 'Chicago', 'IL', '60601', '1-800-SYNTECO');

-- ============================================================
-- Default customer groups
-- ============================================================
INSERT IGNORE INTO customer_groups (id, name, description, markup_percent, is_default) VALUES
(1, 'General', 'Standard pricing for all customers', 0.00, 1),
(2, 'Wholesale', 'Wholesale pricing for high-volume buyers', -5.00, 0),
(3, 'Enterprise', 'Enterprise pricing with negotiated rates', -10.00, 0),
(4, 'Government', 'Government and public sector pricing', -8.00, 0);

-- ============================================================
-- Migrate old products table data to new structure
-- ============================================================
-- This handles the case where old products exist in a flat table
-- We'll use a temporary approach: create a view for backward compat
-- and a stored procedure for migration

-- Create a default category for migrated products
SET @defaultCatId = NULL;
SELECT id INTO @defaultCatId FROM categories WHERE slug = 'uncategorized';
IF @defaultCatId IS NULL THEN
    INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order, description)
    VALUES (NULL, 'Uncategorized', 'uncategorized', 1, 2, 0, 999, 'Migrated products');
END IF;
