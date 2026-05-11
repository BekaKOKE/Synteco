<?php
require_once __DIR__ . '/../config/database.php';

function getCategories(PDO $pdo): array {
    $existing = $pdo->query('SELECT DISTINCT category FROM products WHERE category IS NOT NULL AND category != "" ORDER BY category')->fetchAll(PDO::FETCH_COLUMN);
    $preset = [
        'Abrasives',
        'Adhesives, Sealants and Tape',
        'Cleaning & Janitorial',
        'Electrical',
        'Electronics & Batteries',
        'Fasteners',
        'Fleet & Vehicle Maintenance',
        'Furnishings, Appliances & Hospitality',
        'HVAC and Refrigeration',
        'Hardware',
        'Hydraulics',
        'Lab Supplies',
        'Lighting',
        'Lubrication',
        'Machining',
        'Material Handling',
        'Motors',
        'Office Supplies',
        'Outdoor Equipment',
        'Packaging & Shipping',
        'Paints, Equipment and Supplies',
        'Pipe, Hose, Tube & Fittings',
        'Plumbing',
        'Pneumatics',
        'Power Transmission',
        'Pumps',
        'Raw Materials',
        'Safety',
        'Security',
        'Test Instruments',
        'Tools',
        'Welding',
        // Safety subcategories
        'Eye & Face Protection',
        'Arc Flash Protection',
        'Head Protection',
        'Confined Space',
        'Eyewash Equipment & Safety Showers',
        'Protective Clothing',
        'Signs & Facility Identification Products',
        'Emergency Preparedness Products',
        'Joint & Back Support',
        'Hand & Arm Protection',
        'Floor Mats',
        'Antislip Tapes, Treads & Stair Nosings',
        'Safety Storage',
        'Fire Protection',
        'Workwear',
        'First Aid & Wound Care',
        'Hearing Protection',
        'Fall Protection',
        'Footwear & Footwear Accessories',
        'Traffic Safety',
        'Gas Detection',
        'Lockout Tagout',
        'Medical Supplies & Equipment',
        'Respiratory Protection',
        'Safety Alarms & Warning Lights',
        'Sorbents, Spill Control & Spill Containment',
        'Hydration Products',
        'Water Safety',
        // Security subcategories
        'Access Barriers & Crowd Control',
        'Asset Tracking & Protection',
        'Folding Security Gates',
        'ID Cards, Printers & Supplies',
        'Key Control & Duplication',
        'Locks',
        'Mailboxes & Mailbox Accessories',
        'Metal Detectors, Scanners & Accessories',
        'Safes',
        'Security & Access Doors',
        'Security Alarms & Warnings',
        'Security Seals',
        'Video Surveillance',
    ];
    $all = array_unique(array_merge($existing, $preset));
    sort($all);
    return $all;
}

function renderCategoryOptions(PDO $pdo, string $selected = ''): void {
    $categories = getCategories($pdo);
    foreach ($categories as $cat) {
        $sel = $cat === $selected ? 'selected' : '';
        echo '<option value="' . htmlspecialchars($cat) . '" ' . $sel . '>' . htmlspecialchars($cat) . '</option>';
    }
}

function validateProductInput(array &$data, array &$errors): void {
    $data['name'] = trim($data['name'] ?? '');
    $data['description'] = trim($data['description'] ?? '');
    $data['price'] = trim($data['price'] ?? '');
    $data['category'] = trim($data['category'] ?? '');
    $data['stock'] = trim($data['stock'] ?? '');

    if ($data['name'] === '') {
        $errors[] = 'Product name is required.';
    }
    if ($data['price'] === '' || !is_numeric($data['price']) || (float)$data['price'] < 0) {
        $errors[] = 'A valid price is required.';
    }
    if ($data['stock'] === '' || !ctype_digit($data['stock'])) {
        $errors[] = 'A valid stock quantity is required.';
    }
}

function uploadProductImage(?string $currentImage, array &$errors): ?string {
    if (empty($_FILES['image']['name'])) {
        return $currentImage;
    }

    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

    if (!in_array($ext, $allowed)) {
        $errors[] = 'Image must be jpg, jpeg, png, gif, or webp.';
        return $currentImage;
    }

    if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        $errors[] = 'Image upload failed.';
        return $currentImage;
    }

    $newName = uniqid('prod_', true) . '.' . $ext;
    $dest = __DIR__ . '/../uploads/' . $newName;

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $dest)) {
        $errors[] = 'Failed to save image.';
        return $currentImage;
    }

    if ($currentImage && file_exists(__DIR__ . '/../uploads/' . $currentImage)) {
        unlink(__DIR__ . '/../uploads/' . $currentImage);
    }

    return $newName;
}

function showToast(): void {
    echo '<script>(function(){var t=document.querySelector(".toast");if(t)setTimeout(function(){t.remove()},3000)})();</script>';
}
