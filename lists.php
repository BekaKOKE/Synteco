<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'My Lists - Synteco';
$pageDescription = 'Manage your saved product lists at Synteco. Create and organize lists for quick reordering and project planning.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>My Lists</span>
        </div>
        <h1 style="font-size: 42px;">My Lists</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Save products, organize projects, and reorder with ease.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px; max-width: 1000px; margin-left: auto; margin-right: auto;">
            <div>
                <h2 style="font-size: 22px; font-weight: 800; color: var(--black);">Your Saved Lists</h2>
                <p style="font-size: 13px; color: var(--gray-600);">Organize products for quick access and reordering</p>
            </div>
            <button class="btn btn-primary" onclick="showToast('Create new list feature coming soon!', 'info');"><i class="fas fa-plus"></i> New List</button>
        </div>

        <div style="max-width: 1000px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 40px;">
                <div style="background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 12px; padding: 24px; cursor: pointer;" onclick="showToast('Opening list: Maintenance Supplies', 'info');">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                        <div>
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px;">
                                <i class="fas fa-list-alt" style="font-size: 20px; color: var(--red);"></i>
                                <h3 style="font-size: 16px; font-weight: 700; color: var(--black);">Maintenance Supplies</h3>
                            </div>
                            <p style="font-size: 12px; color: var(--gray-600);">Regularly used MRO items</p>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-size: 24px; font-weight: 900; color: var(--red);">24</div>
                            <div style="font-size: 11px; color: var(--gray-500);">items</div>
                        </div>
                    </div>
                    <div style="display: flex; gap: 10px;">
                        <button class="btn btn-primary" style="flex: 1; padding: 8px 12px; font-size: 12px;"><i class="fas fa-cart-plus"></i> Add All to Cart</button>
                        <button class="btn btn-outline" style="padding: 8px 12px; font-size: 12px;"><i class="fas fa-share-alt"></i></button>
                        <button class="btn btn-outline" style="padding: 8px 12px; font-size: 12px;"><i class="fas fa-ellipsis-h"></i></button>
                    </div>
                </div>

                <div style="background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 12px; padding: 24px; cursor: pointer;" onclick="showToast('Opening list: Q1 Safety Restock', 'info');">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                        <div>
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px;">
                                <i class="fas fa-hard-hat" style="font-size: 20px; color: var(--red);"></i>
                                <h3 style="font-size: 16px; font-weight: 700; color: var(--black);">Q1 Safety Restock</h3>
                            </div>
                            <p style="font-size: 12px; color: var(--gray-600);">PPE and safety supplies</p>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-size: 24px; font-weight: 900; color: var(--red);">18</div>
                            <div style="font-size: 11px; color: var(--gray-500);">items</div>
                        </div>
                    </div>
                    <div style="display: flex; gap: 10px;">
                        <button class="btn btn-primary" style="flex: 1; padding: 8px 12px; font-size: 12px;"><i class="fas fa-cart-plus"></i> Add All to Cart</button>
                        <button class="btn btn-outline" style="padding: 8px 12px; font-size: 12px;"><i class="fas fa-share-alt"></i></button>
                        <button class="btn btn-outline" style="padding: 8px 12px; font-size: 12px;"><i class="fas fa-ellipsis-h"></i></button>
                    </div>
                </div>

                <div style="background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 12px; padding: 24px; cursor: pointer;" onclick="showToast('Opening list: Plant Upgrade Project', 'info');">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                        <div>
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px;">
                                <i class="fas fa-industry" style="font-size: 20px; color: var(--red);"></i>
                                <h3 style="font-size: 16px; font-weight: 700; color: var(--black);">Plant Upgrade Project</h3>
                            </div>
                            <p style="font-size: 12px; color: var(--gray-600);">Electrical and lighting retrofit</p>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-size: 24px; font-weight: 900; color: var(--red);">42</div>
                            <div style="font-size: 11px; color: var(--gray-500);">items</div>
                        </div>
                    </div>
                    <div style="display: flex; gap: 10px;">
                        <button class="btn btn-primary" style="flex: 1; padding: 8px 12px; font-size: 12px;"><i class="fas fa-cart-plus"></i> Add All to Cart</button>
                        <button class="btn btn-outline" style="padding: 8px 12px; font-size: 12px;"><i class="fas fa-share-alt"></i></button>
                        <button class="btn btn-outline" style="padding: 8px 12px; font-size: 12px;"><i class="fas fa-ellipsis-h"></i></button>
                    </div>
                </div>

                <div style="background: #fff; border: 2px dashed var(--gray-300); border-radius: 12px; padding: 24px; display: flex; flex-direction: column; align-items: center; justify-content: center; cursor: pointer;" onclick="showToast('Create new list feature coming soon!', 'info');">
                    <div style="width: 48px; height: 48px; background: var(--gray-100); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
                        <i class="fas fa-plus" style="font-size: 20px; color: var(--gray-500);"></i>
                    </div>
                    <h4 style="font-size: 14px; font-weight: 600; color: var(--gray-600); margin-bottom: 4px;">Create New List</h4>
                    <p style="font-size: 12px; color: var(--gray-500);">Organize products for your projects</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>Why Use Lists?</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 900px; margin: 0 auto;">
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <i class="fas fa-bolt" style="font-size: 36px; color: var(--red); margin-bottom: 16px;"></i>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Quick Reordering</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">Add entire lists to your cart with one click. Perfect for regularly ordered supplies.</p>
            </div>
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <i class="fas fa-share-alt" style="font-size: 36px; color: var(--red); margin-bottom: 16px;"></i>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Easy Sharing</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">Share lists with team members, send to purchasing, or get quotes on specific items.</p>
            </div>
            <div style="background: #fff; padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <i class="fas fa-project-diagram" style="font-size: 36px; color: var(--red); margin-bottom: 16px;"></i>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Project Organization</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">Create separate lists for different projects, departments, or maintenance schedules.</p>
            </div>
        </div>
    </div>
</div>

<div style="padding: 40px 0; background: #fff;">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto; text-align: center;">
            <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 12px;">Not Signed In?</h3>
            <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 20px;">
                Sign in to access your saved lists and create new ones.
            </p>
            <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                <a href="login.php" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Sign In</a>
                <a href="register.php" class="btn btn-outline"><i class="fas fa-user-plus"></i> Create Account</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
