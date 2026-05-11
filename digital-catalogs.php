<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Digital Catalogs - Synteco';
$pageDescription = 'Browse Synteco digital product catalogs. View and download our comprehensive industrial supply catalogs.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Digital Catalogs</span>
        </div>
        <h1 style="font-size: 42px;">Digital Catalogs</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Browse, search, and download our product catalogs online.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Featured Catalogs</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto 60px;">
            <div style="background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200); overflow: hidden;">
                <div style="height: 180px; background: linear-gradient(135deg, #1a1a1a 0%, #c62828 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff;">
                    <i class="fas fa-book" style="font-size: 48px; margin-bottom: 12px; opacity: 0.9;"></i>
                    <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 4px;">Main Catalog</h3>
                    <p style="font-size: 12px; opacity: 0.8;">2026 Edition</p>
                </div>
                <div style="padding: 20px;">
                    <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">
                        Our comprehensive full-line catalog featuring over 50,000 industrial products.
                    </p>
                    <div style="display: flex; gap: 8px;">
                        <button class="btn btn-primary" style="flex: 1; padding: 8px 12px; font-size: 12px;" onclick="showToast('Catalog viewer opening...', 'info');">
                            <i class="fas fa-eye"></i> View Online
                        </button>
                        <button class="btn btn-outline" style="flex: 1; padding: 8px 12px; font-size: 12px;" onclick="showToast('Download started...', 'info');">
                            <i class="fas fa-download"></i> PDF
                        </button>
                    </div>
                </div>
            </div>

            <div style="background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200); overflow: hidden;">
                <div style="height: 180px; background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff;">
                    <i class="fas fa-hard-hat" style="font-size: 48px; margin-bottom: 12px; opacity: 0.9;"></i>
                    <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 4px;">Safety & PPE</h3>
                    <p style="font-size: 12px; opacity: 0.8;">2026 Edition</p>
                </div>
                <div style="padding: 20px;">
                    <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">
                        Complete safety catalog featuring PPE, fall protection, respiratory, and facility safety.
                    </p>
                    <div style="display: flex; gap: 8px;">
                        <button class="btn btn-primary" style="flex: 1; padding: 8px 12px; font-size: 12px;" onclick="showToast('Catalog viewer opening...', 'info');">
                            <i class="fas fa-eye"></i> View Online
                        </button>
                        <button class="btn btn-outline" style="flex: 1; padding: 8px 12px; font-size: 12px;" onclick="showToast('Download started...', 'info');">
                            <i class="fas fa-download"></i> PDF
                        </button>
                    </div>
                </div>
            </div>

            <div style="background: var(--gray-50); border-radius: 12px; border: 1px solid var(--gray-200); overflow: hidden;">
                <div style="height: 180px; background: linear-gradient(135deg, #0d47a1 0%, #1565c0 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff;">
                    <i class="fas fa-tools" style="font-size: 48px; margin-bottom: 12px; opacity: 0.9;"></i>
                    <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 4px;">Tools & Equipment</h3>
                    <p style="font-size: 12px; opacity: 0.8;">2026 Edition</p>
                </div>
                <div style="padding: 20px;">
                    <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">
                        Hand tools, power tools, tool storage, and equipment from all major brands.
                    </p>
                    <div style="display: flex; gap: 8px;">
                        <button class="btn btn-primary" style="flex: 1; padding: 8px 12px; font-size: 12px;" onclick="showToast('Catalog viewer opening...', 'info');">
                            <i class="fas fa-eye"></i> View Online
                        </button>
                        <button class="btn btn-outline" style="flex: 1; padding: 8px 12px; font-size: 12px;" onclick="showToast('Download started...', 'info');">
                            <i class="fas fa-download"></i> PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-header">
            <h2>All Catalogs</h2>
        </div>
        <div style="max-width: 800px; margin: 0 auto;">
            <div style="display: flex; align-items: center; padding: 16px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px; border: 1px solid var(--gray-200);">
                <i class="fas fa-bolt" style="font-size: 24px; color: var(--red); margin-right: 16px;"></i>
                <div style="flex: 1;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 2px;">Electrical & Lighting Catalog</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Wire, cable, controls, lighting, and more | 2026 Edition</p>
                </div>
                <div style="display: flex; gap: 8px;">
                    <button class="btn btn-outline" style="padding: 6px 10px; font-size: 11px;" onclick="showToast('Opening catalog...', 'info');"><i class="fas fa-eye"></i> View</button>
                    <button class="btn btn-outline" style="padding: 6px 10px; font-size: 11px;" onclick="showToast('Downloading...', 'info');"><i class="fas fa-download"></i> PDF</button>
                </div>
            </div>

            <div style="display: flex; align-items: center; padding: 16px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px; border: 1px solid var(--gray-200);">
                <i class="fas fa-snowflake" style="font-size: 24px; color: var(--red); margin-right: 16px;"></i>
                <div style="flex: 1;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 2px;">HVAC & Refrigeration Catalog</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Heating, cooling, ventilation, refrigeration | 2026 Edition</p>
                </div>
                <div style="display: flex; gap: 8px;">
                    <button class="btn btn-outline" style="padding: 6px 10px; font-size: 11px;" onclick="showToast('Opening catalog...', 'info');"><i class="fas fa-eye"></i> View</button>
                    <button class="btn btn-outline" style="padding: 6px 10px; font-size: 11px;" onclick="showToast('Downloading...', 'info');"><i class="fas fa-download"></i> PDF</button>
                </div>
            </div>

            <div style="display: flex; align-items: center; padding: 16px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px; border: 1px solid var(--gray-200);">
                <i class="fas fa-cogs" style="font-size: 24px; color: var(--red); margin-right: 16px;"></i>
                <div style="flex: 1;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 2px;">Hardware & Fasteners Catalog</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Fasteners, anchors, hardware, material handling | 2026 Edition</p>
                </div>
                <div style="display: flex; gap: 8px;">
                    <button class="btn btn-outline" style="padding: 6px 10px; font-size: 11px;" onclick="showToast('Opening catalog...', 'info');"><i class="fas fa-eye"></i> View</button>
                    <button class="btn btn-outline" style="padding: 6px 10px; font-size: 11px;" onclick="showToast('Downloading...', 'info');"><i class="fas fa-download"></i> PDF</button>
                </div>
            </div>

            <div style="display: flex; align-items: center; padding: 16px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px; border: 1px solid var(--gray-200);">
                <i class="fas fa-spray-can" style="font-size: 24px; color: var(--red); margin-right: 16px;"></i>
                <div style="flex: 1;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 2px;">Cleaning & Janitorial Catalog</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Cleaning supplies, paper products, facility maintenance | 2026 Edition</p>
                </div>
                <div style="display: flex; gap: 8px;">
                    <button class="btn btn-outline" style="padding: 6px 10px; font-size: 11px;" onclick="showToast('Opening catalog...', 'info');"><i class="fas fa-eye"></i> View</button>
                    <button class="btn btn-outline" style="padding: 6px 10px; font-size: 11px;" onclick="showToast('Downloading...', 'info');"><i class="fas fa-download"></i> PDF</button>
                </div>
            </div>

            <div style="display: flex; align-items: center; padding: 16px; background: var(--gray-50); border-radius: 8px; border: 1px solid var(--gray-200);">
                <i class="fas fa-wrench" style="font-size: 24px; color: var(--red); margin-right: 16px;"></i>
                <div style="flex: 1;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 2px;">Plumbing & Piping Catalog</h4>
                    <p style="font-size: 12px; color: var(--gray-600);">Pipe, fittings, valves, plumbing supplies | 2026 Edition</p>
                </div>
                <div style="display: flex; gap: 8px;">
                    <button class="btn btn-outline" style="padding: 6px 10px; font-size: 11px;" onclick="showToast('Opening catalog...', 'info');"><i class="fas fa-eye"></i> View</button>
                    <button class="btn btn-outline" style="padding: 6px 10px; font-size: 11px;" onclick="showToast('Downloading...', 'info');"><i class="fas fa-download"></i> PDF</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 40px 0; background: var(--gray-100);">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto; text-align: center;">
            <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 12px;">Prefer a Printed Catalog?</h3>
            <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 20px;">
                Request a physical copy to be mailed to your business address.
            </p>
            <a href="catalog-request.php" class="btn btn-primary btn-lg"><i class="fas fa-envelope"></i> Request Printed Catalog</a>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
