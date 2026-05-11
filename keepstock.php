<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'KeepStock Program - Synteco';
$pageDescription = 'Synteco KeepStock inventory management program. Onsite vending, consignment, and automated inventory solutions.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>KeepStock Program</span>
        </div>
        <h1 style="font-size: 42px;">KeepStock Program</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Intelligent inventory management for your facility.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>KeepStock Solutions</h2>
            <p>Choose the inventory management solution that fits your business</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1100px; margin: 0 auto 60px;">
            <div style="background: var(--gray-50); padding: 32px; border-radius: 12px; border: 2px solid var(--gray-200);">
                <div style="font-size: 40px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-box"></i></div>
                <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 8px;">StockRoom</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 20px;">
                    Onsite inventory cabinets and locker systems with 24/7 controlled access. Perfect for facilities needing secure, tracked access.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0 0 24px;">
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Secure locker & drawer systems</li>
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Employee badge access</li>
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Usage tracking & reporting</li>
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Automatic replenishment</li>
                </ul>
                <div style="padding-top: 16px; border-top: 1px solid var(--gray-200);">
                    <span style="font-size: 11px; color: var(--gray-500);">Best for:</span>
                    <div style="display: flex; gap: 6px; flex-wrap: wrap; margin-top: 6px;">
                        <span style="background: #e3f2fd; color: #1976d2; padding: 4px 10px; border-radius: 20px; font-size: 11px;">Manufacturing</span>
                        <span style="background: #e3f2fd; color: #1976d2; padding: 4px 10px; border-radius: 20px; font-size: 11px;">Healthcare</span>
                        <span style="background: #e3f2fd; color: #1976d2; padding: 4px 10px; border-radius: 20px; font-size: 11px;">Government</span>
                    </div>
                </div>
            </div>

            <div style="background: linear-gradient(180deg, var(--gray-50) 0%, #fff 100%); padding: 32px; border-radius: 12px; border: 2px solid var(--red); position: relative;">
                <div style="position: absolute; top: -12px; left: 50%; transform: translateX(-50%); background: var(--red); color: #fff; padding: 4px 16px; border-radius: 20px; font-size: 11px; font-weight: 700;">
                    MOST POPULAR
                </div>
                <div style="font-size: 40px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-store"></i></div>
                <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 8px;">OnSite</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 20px;">
                    Full-service onsite store managed by Synteco personnel. Dedicated inventory management at your facility.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0 0 24px;">
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Dedicated Synteco staff</li>
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Full product assortment</li>
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Same-day fulfillment</li>
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Cost optimization reports</li>
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Kitting & custom services</li>
                </ul>
                <div style="padding-top: 16px; border-top: 1px solid var(--gray-200);">
                    <span style="font-size: 11px; color: var(--gray-500);">Best for:</span>
                    <div style="display: flex; gap: 6px; flex-wrap: wrap; margin-top: 6px;">
                        <span style="background: #e8f5e9; color: #2e7d32; padding: 4px 10px; border-radius: 20px; font-size: 11px;">Large Facilities</span>
                        <span style="background: #e8f5e9; color: #2e7d32; padding: 4px 10px; border-radius: 20px; font-size: 11px;">High Usage</span>
                    </div>
                </div>
            </div>

            <div style="background: var(--gray-50); padding: 32px; border-radius: 12px; border: 2px solid var(--gray-200);">
                <div style="font-size: 40px; color: var(--red); margin-bottom: 16px;"><i class="fas fa-hand-holding"></i></div>
                <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 8px;">Consignment</h3>
                <p style="font-size: 13px; color: var(--gray-600); line-height: 1.6; margin-bottom: 20px;">
                    Inventory at your facility, paid only when used. Improve cash flow while ensuring product availability.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0 0 24px;">
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Pay only for what you use</li>
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>No upfront inventory cost</li>
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Usage-based billing</li>
                    <li style="padding: 6px 0; font-size: 12px; color: var(--gray-600);"><i class="fas fa-check" style="color: #2e7d32; margin-right: 6px;"></i>Regular inventory audits</li>
                </ul>
                <div style="padding-top: 16px; border-top: 1px solid var(--gray-200);">
                    <span style="font-size: 11px; color: var(--gray-500);">Best for:</span>
                    <div style="display: flex; gap: 6px; flex-wrap: wrap; margin-top: 6px;">
                        <span style="background: #fff3e0; color: #ef6c00; padding: 4px 10px; border-radius: 20px; font-size: 11px;">Cash Flow Focus</span>
                        <span style="background: #fff3e0; color: #ef6c00; padding: 4px 10px; border-radius: 20px; font-size: 11px;">Growing Business</span>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start; max-width: 1100px; margin: 0 auto;">
            
            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Benefits of KeepStock</h2>
                
                <div style="margin-bottom: 24px;">
                    <div style="display: flex; gap: 16px; padding: 16px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px;">
                        <i class="fas fa-dollar-sign" style="font-size: 24px; color: var(--red); flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Reduce Costs</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Eliminate stockouts, overstock, and emergency purchases. Typical savings: 10-25%.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; padding: 16px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px;">
                        <i class="fas fa-clock" style="font-size: 24px; color: var(--red); flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Save Time</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">24/7 access means less downtime. Automated replenishment frees your team.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; padding: 16px; background: var(--gray-50); border-radius: 8px; margin-bottom: 12px;">
                        <i class="fas fa-chart-bar" style="font-size: 24px; color: var(--red); flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Full Visibility</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Track who's using what, when, and where. Detailed usage reporting and cost allocation.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; padding: 16px; background: var(--gray-50); border-radius: 8px;">
                        <i class="fas fa-shield-alt" style="font-size: 24px; color: var(--red); flex-shrink: 0; margin-top: 2px;"></i>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Control & Compliance</h4>
                            <p style="font-size: 12px; color: var(--gray-600);">Secure access controls. Ensure only authorized personnel access critical supplies.</p>
                        </div>
                    </div>
                </div>

                <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 24px; border-radius: 12px; color: #fff;">
                    <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 12px;">Trusted by Industry Leaders</h4>
                    <p style="font-size: 13px; opacity: 0.9; margin-bottom: 16px;">
                        KeepStock programs serve Fortune 500 companies, healthcare systems, government facilities, and manufacturing plants across the nation.
                    </p>
                    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.15); padding: 8px 14px; border-radius: 6px; font-size: 11px; font-weight: 600;">Manufacturing</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 8px 14px; border-radius: 6px; font-size: 11px; font-weight: 600;">Healthcare</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 8px 14px; border-radius: 6px; font-size: 11px; font-weight: 600;">Government</span>
                        <span style="background: rgba(255,255,255,0.15); padding: 8px 14px; border-radius: 6px; font-size: 11px; font-weight: 600;">Education</span>
                    </div>
                </div>
            </div>

            <div>
                <h2 style="font-size: 24px; font-weight: 800; color: var(--black); margin-bottom: 20px;">Request a Free Assessment</h2>
                <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 24px;">
                    Let our KeepStock specialists analyze your current inventory needs and design a custom solution.
                </p>
                
                <div style="background: var(--gray-50); padding: 28px; border-radius: 12px; border: 1px solid var(--gray-200); margin-bottom: 24px;">
                    <form>
                        <div style="margin-bottom: 12px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Company Name *</label>
                            <input type="text" class="search-input" style="width: 100%;" placeholder="Your company">
                        </div>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 12px;">
                            <div>
                                <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Contact Name *</label>
                                <input type="text" class="search-input" style="width: 100%;" placeholder="Your name">
                            </div>
                            <div>
                                <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Phone *</label>
                                <input type="tel" class="search-input" style="width: 100%;" placeholder="(555) 123-4567">
                            </div>
                        </div>
                        <div style="margin-bottom: 12px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Email *</label>
                            <input type="email" class="search-input" style="width: 100%;" placeholder="you@company.com">
                        </div>
                        <div style="margin-bottom: 12px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Number of Employees</label>
                            <select class="search-input" style="width: 100%;">
                                <option>Select range</option>
                                <option>1-50</option>
                                <option>51-200</option>
                                <option>201-500</option>
                                <option>501-1000</option>
                                <option>1000+</option>
                            </select>
                        </div>
                        <div style="margin-bottom: 12px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Solution Interested In</label>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
                                <label style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--gray-600); cursor: pointer;">
                                    <input type="checkbox"> StockRoom
                                </label>
                                <label style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--gray-600); cursor: pointer;">
                                    <input type="checkbox"> OnSite
                                </label>
                                <label style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--gray-600); cursor: pointer;">
                                    <input type="checkbox"> Consignment
                                </label>
                                <label style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--gray-600); cursor: pointer;">
                                    <input type="checkbox"> Not Sure
                                </label>
                            </div>
                        </div>
                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px;">Tell Us About Your Needs</label>
                            <textarea class="search-input" style="width: 100%; min-height: 80px;" placeholder="What inventory challenges are you facing?"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg" style="width: 100%;" onclick="showToast('KeepStock assessment request submitted! A specialist will contact you within 1 business day.', 'success');">
                            <i class="fas fa-paper-plane"></i> Request Free Assessment
                        </button>
                    </form>
                </div>

                <div style="background: var(--gray-50); padding: 20px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center;">
                    <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 12px;">
                        Prefer to talk? Call our KeepStock specialists
                    </p>
                    <div style="font-size: 20px; font-weight: 900; color: var(--red);">
                        <i class="fas fa-phone" style="margin-right: 6px;"></i>1-800-KEEPSTOCK
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
