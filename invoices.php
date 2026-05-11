<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Invoice Options - Synteco';
$pageDescription = 'Synteco invoice management options including online access, email delivery, and EDI integration.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Invoice Options</span>
        </div>
        <h1 style="font-size: 42px;">Invoice Management</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Flexible invoice delivery and payment options for your business.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Invoice Delivery Methods</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto 60px;">
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="width: 64px; height: 64px; background: #e3f2fd; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-envelope" style="font-size: 28px; color: #1976d2;"></i>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Email Delivery</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">PDF invoices sent to your email instantly. Easy to forward and archive.</p>
                <div style="margin-top: 16px;">
                    <span style="background: #e3f2fd; color: #1976d2; padding: 6px 12px; border-radius: 20px; font-size: 11px; font-weight: 600;">Most Popular</span>
                </div>
            </div>
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="width: 64px; height: 64px; background: #e8f5e9; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-desktop" style="font-size: 28px; color: #2e7d32;"></i>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Online Portal</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">Access all invoices in your account dashboard. Download, print, or pay online.</p>
                <div style="margin-top: 16px;">
                    <span style="background: #e8f5e9; color: #2e7d32; padding: 6px 12px; border-radius: 20px; font-size: 11px; font-weight: 600;">Convenient</span>
                </div>
            </div>
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                <div style="width: 64px; height: 64px; background: #fff3e0; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                    <i class="fas fa-exchange-alt" style="font-size: 28px; color: #ef6c00;"></i>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">EDI Integration</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6;">Electronic Data Interchange for enterprise customers. Automated invoice processing.</p>
                <div style="margin-top: 16px;">
                    <span style="background: #fff3e0; color: #ef6c00; padding: 6px 12px; border-radius: 20px; font-size: 11px; font-weight: 600;">Enterprise</span>
                </div>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
            
            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Online Invoice Portal</h2>
                <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 24px;">
                    Manage all your invoices from your Synteco account dashboard. View, download, and pay invoices in one place.
                </p>

                <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 16px;">Portal Features</h4>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--gray-600);">
                            <i class="fas fa-check" style="color: #2e7d32;"></i> View open invoices
                        </div>
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--gray-600);">
                            <i class="fas fa-check" style="color: #2e7d32;"></i> Payment history
                        </div>
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--gray-600);">
                            <i class="fas fa-check" style="color: #2e7d32;"></i> Download PDFs
                        </div>
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--gray-600);">
                            <i class="fas fa-check" style="color: #2e7d32;"></i> Online payments
                        </div>
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--gray-600);">
                            <i class="fas fa-check" style="color: #2e7d32;"></i> Export to CSV/Excel
                        </div>
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--gray-600);">
                            <i class="fas fa-check" style="color: #2e7d32;"></i> Spending reports
                        </div>
                    </div>
                </div>

                <a href="my-account.php" class="btn btn-primary btn-lg"><i class="fas fa-user"></i> Access My Invoices</a>
            </div>

            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Payment Methods</h2>
                <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 24px;">
                    Pay your invoices using your preferred method. Multiple payment options available.
                </p>

                <div style="margin-bottom: 24px;">
                    <div style="display: flex; gap: 16px; padding: 16px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px;">
                        <i class="fas fa-credit-card" style="font-size: 20px; color: var(--red); flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Credit Card</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Pay online with Visa, Mastercard, Amex, or Discover</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; padding: 16px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px;">
                        <i class="fas fa-university" style="font-size: 20px; color: var(--red); flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Bank Transfer / ACH</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Electronic funds transfer for business accounts</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; padding: 16px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px;">
                        <i class="fas fa-file-invoice" style="font-size: 20px; color: var(--red); flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Check</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Mail payments to our payment processing center</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; padding: 16px; background: var(--gray-50); border-radius: 8px;">
                        <i class="fas fa-exchange-alt" style="font-size: 20px; color: var(--red); flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">EDI Payments</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Automated payment processing for enterprise customers</p>
                        </div>
                    </div>
                </div>

                <div style="background: linear-gradient(135deg, #fff8e1 0%, #ffecb3 100%); padding: 20px; border-radius: 12px; border-left: 4px solid #f9a825;">
                    <h4 style="font-size: 14px; font-weight: 700; color: #5d4037; margin-bottom: 8px;"><i class="fas fa-info-circle" style="margin-right: 6px;"></i>Questions About Invoices?</h4>
                    <p style="font-size: 12px; color: #5d4037; margin-bottom: 12px;">
                        Contact our Accounts Receivable department for invoice-related questions.
                    </p>
                    <a href="contact.php" class="btn btn-outline" style="border-color: #f9a825; color: #5d4037; font-size: 12px; padding: 8px 14px;"><i class="fas fa-phone"></i> Contact AR Dept</a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
