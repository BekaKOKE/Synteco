<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Repair & Replacement - Synteco';
$pageDescription = 'Synteco repair and replacement services for tools, equipment, and industrial products.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Repair & Replacement</span>
        </div>
        <h1 style="font-size: 42px;">Repair & Replacement Services</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Keep your equipment running with expert repair services.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Our Services</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto 60px;">
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                <div style="font-size: 36px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-tools"></i></div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Tool Repair</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                    Professional repair services for power tools, hand tools, and equipment from all major brands.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 4px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Power tool repair</li>
                    <li style="padding: 4px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Calibration services</li>
                    <li style="padding: 4px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Warranty repairs</li>
                </ul>
            </div>
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                <div style="font-size: 36px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-exchange-alt"></i></div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Replacement Parts</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                    Access millions of genuine replacement parts for tools, equipment, and machinery.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 4px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>OEM parts</li>
                    <li style="padding: 4px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Aftermarket options</li>
                    <li style="padding: 4px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Fast shipping</li>
                </ul>
            </div>
            <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200);">
                <div style="font-size: 36px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-headset"></i></div>
                <h3 style="font-size: 16px; font-weight: 700; color: var(--black); margin-bottom: 8px;">Technical Support</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                    Expert assistance from our product specialists to help diagnose issues and find solutions.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 4px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Troubleshooting help</li>
                    <li style="padding: 4px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Product manuals</li>
                    <li style="padding: 4px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Warranty info</li>
                </ul>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
            
            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">How It Works</h2>
                <div style="margin-bottom: 24px;">
                    <div style="display: flex; gap: 16px; margin-bottom: 20px;">
                        <div style="width: 40px; height: 40px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #fff; font-weight: 800;">1</div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Contact Us</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Call or visit your local branch to discuss your repair needs.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; margin-bottom: 20px;">
                        <div style="width: 40px; height: 40px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #fff; font-weight: 800;">2</div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Get a Quote</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Receive a free repair assessment and cost estimate.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; margin-bottom: 20px;">
                        <div style="width: 40px; height: 40px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #fff; font-weight: 800;">3</div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Repair Service</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Our certified technicians repair your equipment using genuine parts.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px;">
                        <div style="width: 40px; height: 40px; background: var(--red); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #fff; font-weight: 800;">4</div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Back to Work</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Pick up or receive delivery of your repaired equipment.</p>
                        </div>
                    </div>
                </div>

                <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 24px; border-radius: 12px; color: #fff;">
                    <h4 style="font-size: 14px; font-weight: 700; margin-bottom: 12px;">Brands We Service</h4>
                    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.15); padding: 8px 14px; border-radius: 20px; font-size: 12px;">DeWalt</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 8px 14px; border-radius: 20px; font-size: 12px;">Milwaukee</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 8px 14px; border-radius: 20px; font-size: 12px;">Makita</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 8px 14px; border-radius: 20px; font-size: 12px;">Bosch</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 8px 14px; border-radius: 20px; font-size: 12px;">Hilti</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 8px 14px; border-radius: 20px; font-size: 12px;">Snap-on</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 8px 14px; border-radius: 20px; font-size: 12px;">+100 More</span>
                    </div>
                </div>
            </div>

            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Need Service?</h2>
                
                <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 16px;">Service Request Form</h4>
                    <form>
                        <div style="margin-bottom: 12px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Your Name</label>
                            <input type="text" class="search-input" style="width: 100%;" placeholder="Full name">
                        </div>
                        <div style="margin-bottom: 12px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Phone Number</label>
                            <input type="tel" class="search-input" style="width: 100%;" placeholder="(555) 123-4567">
                        </div>
                        <div style="margin-bottom: 12px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Service Type</label>
                            <select class="search-input" style="width: 100%;">
                                <option>Select service type</option>
                                <option>Tool Repair</option>
                                <option>Warranty Service</option>
                                <option>Calibration</option>
                                <option>Find Replacement Parts</option>
                                <option>Technical Support</option>
                            </select>
                        </div>
                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Description</label>
                            <textarea class="search-input" style="width: 100%; min-height: 80px;" placeholder="Describe your equipment and the issue..."></textarea>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg" style="width: 100%;" onclick="showToast('Service request submitted! We\'ll contact you within 1 business day.', 'success');">
                            <i class="fas fa-paper-plane"></i> Submit Request
                        </button>
                    </form>
                </div>

                <div style="background: var(--gray-50); padding: 20px; border-radius: 12px; border: 1px solid var(--gray-200);">
                    <div style="display: flex; gap: 12px; margin-bottom: 16px;">
                        <div style="flex: 1; text-align: center; padding: 12px; background: #fff; border-radius: 8px;">
                            <i class="fas fa-phone" style="font-size: 18px; color: var(--red); margin-bottom: 4px;"></i>
                            <div style="font-size: 11px; font-weight: 600; color: var(--black);">Call</div>
                            <div style="font-size: 12px; color: var(--gray-600);">1-800-SYNTECO</div>
                        </div>
                        <div style="flex: 1; text-align: center; padding: 12px; background: #fff; border-radius: 8px;">
                            <i class="fas fa-map-marker-alt" style="font-size: 18px; color: var(--red); margin-bottom: 4px;"></i>
                            <div style="font-size: 11px; font-weight: 600; color: var(--black);">Visit</div>
                            <a href="find-branch.php" style="font-size: 12px; color: var(--red); text-decoration: none;">Find a Branch</a>
                        </div>
                        <div style="flex: 1; text-align: center; padding: 12px; background: #fff; border-radius: 8px;">
                            <i class="fas fa-headset" style="font-size: 18px; color: var(--red); margin-bottom: 4px;"></i>
                            <div style="font-size: 11px; font-weight: 600; color: var(--black);">Help</div>
                            <a href="help.php" style="font-size: 12px; color: var(--red); text-decoration: none;">Help Center</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
