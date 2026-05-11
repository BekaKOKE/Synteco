<?php
require_once __DIR__ . '/../config/session.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}
$pageTitle = $pageTitle ?? 'Dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> — Synteco Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/admin.css">
</head>
<body>
<div class="admin-wrapper">
    <aside class="sidebar">
        <div class="sidebar-brand">
            <a href="dashboard.php">SYNTECO <small>Admin</small></a>
        </div>
        <nav class="sidebar-nav">
            <a href="dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) === 'dashboard.php' ? 'active' : '' ?>">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="products.php" class="<?= strpos($_SERVER['PHP_SELF'], 'products') !== false ? 'active' : '' ?>">
                <i class="fas fa-boxes"></i> Products
            </a>
            <a href="product_create.php" class="<?= strpos($_SERVER['PHP_SELF'], 'product_create') !== false ? 'active' : '' ?>">
                <i class="fas fa-plus-circle"></i> Add Product
            </a>
            <a href="seed_db.php" class="<?= strpos($_SERVER['PHP_SELF'], 'seed_db') !== false ? 'active' : '' ?>">
                <i class="fas fa-database"></i> Seed Data
            </a>
            <a href="../index.php" target="_blank" class="logout-link" style="border-top:1px solid rgba(255,255,255,0.08);margin-top:8px;padding-top:12px;">
                <i class="fas fa-external-link-alt"></i> View Site
            </a>
            <a href="logout.php" class="logout-link">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </nav>
        <div class="sidebar-user">
            <i class="fas fa-user-circle"></i>
            <?= htmlspecialchars($_SESSION['admin_username'] ?? 'Admin') ?>
        </div>
    </aside>
    <main class="main-content">
        <header class="topbar">
            <h1><?= htmlspecialchars($pageTitle) ?></h1>
        </header>
        <div class="content-body">
