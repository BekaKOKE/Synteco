<?php
// ============================================================
// Synteco Bootstrap / Init
// ============================================================

// Prevent caching
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// Disable any output caching
ini_set('output_buffering', 0);

// Timezone
date_default_timezone_set('America/Chicago');

// Session
require_once __DIR__ . '/session.php';

// Database
require_once __DIR__ . '/database.php';

// Cart
require_once __DIR__ . '/../includes/cart_functions.php';

// Customer Authentication
require_once __DIR__ . '/../includes/customer_auth.php';

// Helper functions
function htmlEscape(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

function truncate(string $text, int $maxLength = 100): string {
    if (mb_strlen($text) <= $maxLength) return $text;
    return mb_substr($text, 0, $maxLength) . '...';
}

function formatPrice(float $price, string $currency = '$'): string {
    return $currency . number_format($price, 2);
}

function slugify(string $text): string {
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    $text = strtolower($text);
    return $text ?: 'n-a';
}
