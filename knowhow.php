<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/includes/content_pages.php';

$pageTitle = 'Synteco KnowHow - Industrial Expertise';
$pageDescription = 'Synteco KnowHow - expert articles, buying guides, and technical resources for industrial professionals.';
$currentSlug = '';

require_once __DIR__ . '/includes/frontend_header.php';
?>

<div class="category-hero" style="background: linear-gradient(135deg, #00695c 0%, #00897b 100%);">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Synteco KnowHow</span>
        </div>
        <h1 style="font-size: 42px;">Synteco KnowHow<sup style="font-size: 18px;">&reg;</sup></h1>
        <p style="font-size: 18px; max-width: 600px; margin-top: 12px;">
            Expert articles, buying guides, and technical resources for industrial professionals.
        </p>
    </div>
</div>

<div style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-header">
            <h2>Featured Articles</h2>
        </div>

        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 32px; max-width: 1000px; margin: 0 auto 60px;">
            <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer;" onclick="showToast('Opening article...', 'info');">
                <div style="height: 220px; background: linear-gradient(135deg, #1a1a1a 0%, #c62828 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff;">
                    <i class="fas fa-hard-hat" style="font-size: 56px; margin-bottom: 16px; opacity: 0.9;"></i>
                    <span style="font-size: 12px; opacity: 0.8; text-transform: uppercase; letter-spacing: 1px;">Safety Guide</span>
                </div>
                <div style="padding: 24px;">
                    <h3 style="font-size: 20px; font-weight: 800; color: var(--black); margin-bottom: 12px;">The Complete Guide to Industrial PPE Selection</h3>
                    <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                        Learn how to select the right personal protective equipment for your workplace. This comprehensive guide covers head protection, eye and face protection, hand protection, respiratory protection, and more.
                    </p>
                    <div style="display: flex; gap: 16px; align-items: center;">
                        <span style="font-size: 12px; color: var(--gray-500);"><i class="fas fa-calendar" style="margin-right: 4px;"></i>Jan 15, 2026</span>
                        <span style="font-size: 12px; color: var(--gray-500);"><i class="fas fa-clock" style="margin-right: 4px;"></i>12 min read</span>
                        <span style="font-size: 12px; color: var(--red);">Read More <i class="fas fa-arrow-right" style="margin-left: 4px;"></i></span>
                    </div>
                </div>
            </div>

            <div>
                <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer; margin-bottom: 20px;" onclick="showToast('Opening article...', 'info');">
                    <div style="height: 100px; background: linear-gradient(135deg, #1565c0 0%, #0d47a1 100%); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-bolt" style="font-size: 32px; color: rgba(255,255,255,0.9);"></i>
                    </div>
                    <div style="padding: 14px;">
                        <h4 style="font-size: 13px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Understanding Wire Gauge Sizes</h4>
                        <p style="font-size: 11px; color: var(--gray-600); margin-bottom: 8px;">A practical guide to selecting the right wire size for your electrical projects.</p>
                        <span style="font-size: 11px; color: var(--gray-500);">8 min read</span>
                    </div>
                </div>

                <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer; margin-bottom: 20px;" onclick="showToast('Opening article...', 'info');">
                    <div style="height: 100px; background: linear-gradient(135deg, #e65100 0%, #ff6f00 100%); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-tools" style="font-size: 32px; color: rgba(255,255,255,0.9);"></i>
                    </div>
                    <div style="padding: 14px;">
                        <h4 style="font-size: 13px; font-weight: 700; color: var(--black); margin-bottom: 6px;">Corded vs Cordless Tools: Which is Right for You?</h4>
                        <p style="font-size: 11px; color: var(--gray-600); margin-bottom: 8px;">Compare power, runtime, and convenience to make the right choice.</p>
                        <span style="font-size: 11px; color: var(--gray-500);">6 min read</span>
                    </div>
                </div>

                <div style="background: #fff; border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; cursor: pointer;" onclick="showToast('Opening article...', 'info');">
                    <div style="height: 100px; background: linear-gradient(135deg, #7b1fa2 0%, #8e24aa 100%); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-snowflake" style="font-size: 32px; color: rgba(255,255,255,0.9);"></i>
                    </div>
                    <div style="padding: 14px;">
                        <h4 style="font-size: 13px; font-weight: 700; color: var(--black); margin-bottom: 6px;">HVAC Filter MERV Ratings Explained</h4>
                        <p style="font-size: 11px; color: var(--gray-600); margin-bottom: 8px;">What MERV rating means and how to choose the right filter.</p>
                        <span style="font-size: 11px; color: var(--gray-500);">5 min read</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-header">
            <h2>Browse by Category</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; max-width: 1000px; margin: 0 auto;">
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <i class="fas fa-hard-hat" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Safety</h4>
                <p style="font-size: 12px; color: var(--gray-600);">24 articles</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <i class="fas fa-bolt" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Electrical</h4>
                <p style="font-size: 12px; color: var(--gray-600);">18 articles</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <i class="fas fa-tools" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Tools</h4>
                <p style="font-size: 12px; color: var(--gray-600);">31 articles</p>
            </div>
            <div style="background: var(--gray-50); padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); text-align: center; cursor: pointer;">
                <i class="fas fa-snowflake" style="font-size: 32px; color: var(--red); margin-bottom: 12px;"></i>
                <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">HVAC</h4>
                <p style="font-size: 12px; color: var(--gray-600);">15 articles</p>
            </div>
        </div>
    </div>
</div>

<div style="padding: 60px 0; background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <h2>Buying Guides</h2>
            <p>Make informed purchasing decisions</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto;">
            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); cursor: pointer;" onclick="showToast('Opening buying guide...', 'info');">
                <div style="display: flex; gap: 16px; margin-bottom: 16px;">
                    <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #c62828 0%, #8e0000 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <i class="fas fa-wrench" style="font-size: 24px; color: #fff;"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Impact Wrench Buying Guide</h4>
                        <p style="font-size: 12px; color: var(--gray-600);">Corded vs cordless, torque ratings, and more</p>
                    </div>
                </div>
                <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                    <span style="font-size: 10px; background: var(--gray-100); color: var(--gray-600); padding: 2px 8px; border-radius: 4px;">Beginner</span>
                    <span style="font-size: 10px; color: var(--gray-500);">15 min read</span>
                </div>
            </div>

            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); cursor: pointer;" onclick="showToast('Opening buying guide...', 'info');">
                <div style="display: flex; gap: 16px; margin-bottom: 16px;">
                    <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #1565c0 0%, #0d47a1 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <i class="fas fa-battery-full" style="font-size: 24px; color: #fff;"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Battery Technology Guide</h4>
                        <p style="font-size: 12px; color: var(--gray-600);">Ah ratings, voltage, and battery chemistry</p>
                    </div>
                </div>
                <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                    <span style="font-size: 10px; background: var(--gray-100); color: var(--gray-600); padding: 2px 8px; border-radius: 4px;">Intermediate</span>
                    <span style="font-size: 10px; color: var(--gray-500);">10 min read</span>
                </div>
            </div>

            <div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid var(--gray-200); cursor: pointer;" onclick="showToast('Opening buying guide...', 'info');">
                <div style="display: flex; gap: 16px; margin-bottom: 16px;">
                    <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <i class="fas fa-hard-hat" style="font-size: 24px; color: #fff;"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 14px; font-weight: 700; color: var(--black); margin-bottom: 4px;">Safety Glasses Selection</h4>
                        <p style="font-size: 12px; color: var(--gray-600);">Ratings, coatings, and specialty options</p>
                    </div>
                </div>
                <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                    <span style="font-size: 10px; background: var(--gray-100); color: var(--gray-600); padding: 2px 8px; border-radius: 4px;">Essential</span>
                    <span style="font-size: 10px; color: var(--gray-500);">8 min read</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding: 40px 0; background: #fff;">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto; text-align: center; background: linear-gradient(135deg, #1a1a1a 0%, #333 100%); padding: 36px; border-radius: 12px; color: #fff;">
            <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 12px;">Can't Find What You Need?</h3>
            <p style="font-size: 14px; opacity: 0.9; margin-bottom: 20px;">
                Our product specialists are ready to answer your technical questions.
            </p>
            <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                <a href="help.php" class="btn btn-primary" style="background: #fff; color: var(--black); border-color: #fff;"><i class="fas fa-headset"></i> Help Center</a>
                <a href="contact.php" class="btn btn-outline" style="border-color: rgba(255,255,255,0.4); color: #fff;"><i class="fas fa-envelope"></i> Contact Us</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/frontend_footer.php'; ?>
