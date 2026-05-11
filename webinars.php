<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Webinars - Synteco';
$pageDescription = 'Synteco educational webinars and training videos. Learn from industry experts about industrial products and best practices.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #7b1fa2 0%, #8e24aa 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Webinars</span>
        </div>
        <h1 style="font-size: 42px;">Webinars & Training</h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Learn from industry experts. Free educational webinars and on-demand training.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Upcoming Live Webinars</h2>
            <p>Register for free live training sessions</p>
        </div>

        <div style="max-width: 900px; margin: 0 auto 60px;">
            <div style="background: linear-gradient(135deg, #fce4ec 0%, #f8bbd9 100%); border: 1px solid #f48fb1; border-radius: 12px; padding: 28px; margin-bottom: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                    <div>
                        <span style="font-size: 11px; background: #c62828; color: #fff; padding: 4px 10px; border-radius: 4px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Live</span>
                        <span style="font-size: 11px; background: var(--gray-200); color: var(--gray-700); padding: 4px 10px; border-radius: 4px; font-weight: 600; margin-left: 8px;">Safety</span>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 12px; color: var(--gray-600);">Wednesday, Feb 15</div>
                        <div style="font-size: 14px; font-weight: 700; color: var(--black);">2:00 PM - 3:00 PM CST</div>
                    </div>
                </div>
                <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 8px;">Lockout/Tagout (LOTO) Compliance & Best Practices</h3>
                <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">
                    Learn about OSHA requirements for controlling hazardous energy. This webinar covers proper LOTO procedures, device selection, and employee training requirements.
                </p>
                <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap;">
                    <div style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--gray-600);">
                        <i class="fas fa-user" style="color: var(--red);"></i> Presented by: OSHA Certified Trainer
                    </div>
                    <div style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--gray-600);">
                        <i class="fas fa-clock" style="color: var(--red);"></i> 60 minutes
                    </div>
                    <div style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--gray-600);">
                        <i class="fas fa-certificate" style="color: var(--red);"></i> Certificate Available
                    </div>
                </div>
                <div style="margin-top: 16px;">
                    <button class="btn btn-primary" onclick="showToast('Successfully registered for webinar! Confirmation email sent.', 'success');">
                        <i class="fas fa-calendar-plus"></i> Register Now - Free
                    </button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; padding: 28px; margin-bottom: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                    <div>
                        <span style="font-size: 11px; background: #1565c0; color: #fff; padding: 4px 10px; border-radius: 4px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Live</span>
                        <span style="font-size: 11px; background: var(--gray-200); color: var(--gray-700); padding: 4px 10px; border-radius: 4px; font-weight: 600; margin-left: 8px;">Electrical</span>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 12px; color: var(--gray-600);">Tuesday, Feb 21</div>
                        <div style="font-size: 14px; font-weight: 700; color: var(--black);">10:00 AM - 11:30 AM CST</div>
                    </div>
                </div>
                <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 8px;">NFPA 70E Electrical Safety Standards Update</h3>
                <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">
                    Stay current with the latest NFPA 70E standards for electrical safety in the workplace. Covers arc flash, shock protection, and PPE requirements.
                </p>
                <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap;">
                    <div style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--gray-600);">
                        <i class="fas fa-user" style="color: var(--red);"></i> Presented by: Electrical Safety Expert
                    </div>
                    <div style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--gray-600);">
                        <i class="fas fa-clock" style="color: var(--red);"></i> 90 minutes
                    </div>
                </div>
                <div style="margin-top: 16px;">
                    <button class="btn btn-outline" onclick="showToast('Successfully registered for webinar!', 'success');">
                        <i class="fas fa-calendar-plus"></i> Register Now
                    </button>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; padding: 28px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                    <div>
                        <span style="font-size: 11px; background: #2e7d32; color: #fff; padding: 4px 10px; border-radius: 4px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Live</span>
                        <span style="font-size: 11px; background: var(--gray-200); color: var(--gray-700); padding: 4px 10px; border-radius: 4px; font-weight: 600; margin-left: 8px;">Tools</span>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 12px; color: var(--gray-600);">Thursday, Mar 2</div>
                        <div style="font-size: 14px; font-weight: 700; color: var(--black);">1:00 PM - 2:30 PM CST</div>
                    </div>
                </div>
                <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 8px;">Cordless Tool Battery Technology & Maintenance</h3>
                <p style="font-size: 13px; color: var(--gray-600); margin-bottom: 16px;">
                    Learn how to maximize battery life, proper storage techniques, and troubleshooting common battery issues for cordless power tools.
                </p>
                <div style="margin-top: 16px;">
                    <button class="btn btn-outline" onclick="showToast('Successfully registered for webinar!', 'success');">
                        <i class="fas fa-calendar-plus"></i> Register Now
                    </button>
                </div>
            </div>
        </div>

        <div class="section-header">
            <h2>On-Demand Training Videos</h2>
            <p>Watch anytime, anywhere</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto;">
            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer;" onclick="showToast('Opening video player...', 'info');">
                <div style="height: 160px; background: linear-gradient(135deg, #c62828 0%, #8e0000 100%); display: flex; align-items: center; justify-content: center; position: relative;">
                    <i class="fas fa-play-circle" style="font-size: 48px; color: rgba(255,255,255,0.9);"></i>
                    <div style="position: absolute; bottom: 8px; right: 8px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 11px;">12:45</div>
                </div>
                <div style="padding: 16px;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Introduction to Personal Protective Equipment</h4>
                    <p style="font-size: 12px; color: var(--gray-600); margin-bottom: 8px;">Essential PPE for industrial workers - what you need to know.</p>
                    <div style="display: flex; gap: 8px; align-items: center;">
                        <span style="font-size: 10px; background: var(--gray-100); color: var(--gray-600); padding: 2px 8px; border-radius: 4px;">Safety</span>
                        <span style="font-size: 10px; color: var(--gray-500);"><i class="fas fa-eye" style="margin-right: 4px;"></i>4.2K views</span>
                    </div>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer;" onclick="showToast('Opening video player...', 'info');">
                <div style="height: 160px; background: linear-gradient(135deg, #1565c0 0%, #0d47a1 100%); display: flex; align-items: center; justify-content: center; position: relative;">
                    <i class="fas fa-play-circle" style="font-size: 48px; color: rgba(255,255,255,0.9);"></i>
                    <div style="position: absolute; bottom: 8px; right: 8px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 11px;">18:30</div>
                </div>
                <div style="padding: 16px;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">LED Lighting Installation Best Practices</h4>
                    <p style="font-size: 12px; color: var(--gray-600); margin-bottom: 8px;">Step-by-step guide to commercial LED lighting retrofits.</p>
                    <div style="display: flex; gap: 8px; align-items: center;">
                        <span style="font-size: 10px; background: var(--gray-100); color: var(--gray-600); padding: 2px 8px; border-radius: 4px;">Electrical</span>
                        <span style="font-size: 10px; color: var(--gray-500);"><i class="fas fa-eye" style="margin-right: 4px;"></i>2.8K views</span>
                    </div>
                </div>
            </div>

            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer;" onclick="showToast('Opening video player...', 'info');">
                <div style="height: 160px; background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%); display: flex; align-items: center; justify-content: center; position: relative;">
                    <i class="fas fa-play-circle" style="font-size: 48px; color: rgba(255,255,255,0.9);"></i>
                    <div style="position: absolute; bottom: 8px; right: 8px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 11px;">22:15</div>
                </div>
                <div style="padding: 16px;">
                    <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">HVAC Filter Maintenance & Replacement</h4>
                    <p style="font-size: 12px; color: var(--gray-600); margin-bottom: 8px;">Maximize HVAC efficiency with proper filter maintenance.</p>
                    <div style="display: flex; gap: 8px; align-items: center;">
                        <span style="font-size: 10px; background: var(--gray-100); color: var(--gray-600); padding: 2px 8px; border-radius: 4px;">HVAC</span>
                        <span style="font-size: 10px; color: var(--gray-500);"><i class="fas fa-eye" style="margin-right: 4px;"></i>1.9K views</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 40px 0; background: var(--gray-100);">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto; text-align: center;">
            <h3 style="font-size: 18px; font-weight: 800; color: var(--black); margin-bottom: 12px;">Get Webinar Notifications</h3>
            <p style="font-size: 14px; color: var(--gray-600); margin-bottom: 20px;">
                Sign up to be notified about upcoming webinars and new training content.
            </p>
            <a href="register.php" class="btn btn-primary btn-lg"><i class="fas fa-bell"></i> Sign Up for Alerts</a>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
