<?php

// ============================================================
// Hardcoded Grainger-inspired categories (for fallback/initial use)
// ============================================================
function getAllCategories(): array {
    return [
        'abrasives' => ['name' => 'Abrasives', 'sub' => ['Grinding & Cutting Wheels', 'Sandpaper & Sheets', 'Wire Brushes & Wheels', 'Sharpening Stones', 'Coated Abrasives', 'Bonded Abrasives']],
        'adhesives' => ['name' => 'Adhesives, Sealants and Tape', 'sub' => ['Adhesives', 'Sealants', 'Tape', 'Epoxy', 'Caulk', 'Glue & Cement']],
        'cleaning' => ['name' => 'Cleaning & Janitorial', 'sub' => ['Cleaning Chemicals', 'Janitorial Supplies', 'Paper Products', 'Trash & Recycling', 'Mops & Brooms', 'Vacuum Cleaners']],
        'electrical' => ['name' => 'Electrical', 'sub' => ['Wire & Cable', 'Circuit Protection', 'Switches & Outlets', 'Transformers', 'Electrical Tools & Testers', 'Batteries & Chargers', 'Terminals & Connectors', 'Conduit & Fittings']],
        'electronics' => ['name' => 'Electronics & Batteries', 'sub' => ['Batteries', 'Battery Chargers', 'Power Supplies', 'Electronic Components', 'Sensors']],
        'fasteners' => ['name' => 'Fasteners', 'sub' => ['Screws', 'Bolts', 'Nuts & Washers', 'Anchors', 'Rivets', 'Hardware Kits', 'Threaded Rod', 'Locks']],
        'fleet' => ['name' => 'Fleet & Vehicle Maintenance', 'sub' => ['Automotive Fluids', 'Vehicle Parts', 'Tire Repair', 'Car Care', 'Fleet Tools']],
        'furnishings' => ['name' => 'Furnishings, Appliances & Hospitality', 'sub' => ['Furniture', 'Appliances', 'Hospitality Supplies', 'Locker Room', 'Breakroom Supplies']],
        'hvac' => ['name' => 'HVAC and Refrigeration', 'sub' => ['HVAC and Refrigeration', 'Heating Equipment', 'Air Conditioning', 'Refrigeration', 'Ventilation', 'Thermostats', 'Ductwork', 'HVAC Tools']],
        'hardware' => ['name' => 'Hardware', 'sub' => ['Door Hardware', 'Cabinet Hardware', 'Locks & Latches', 'Hinges', 'Castors & Wheels']],
        'hydraulics' => ['name' => 'Hydraulics', 'sub' => ['Hydraulic Cylinders', 'Hydraulic Pumps', 'Hydraulic Valves', 'Hydraulic Hoses', 'Hydraulic Filters']],
        'lab' => ['name' => 'Lab Supplies', 'sub' => ['Lab Equipment', 'Lab Glassware', 'Lab Safety', 'Test Kits', 'Measurement Instruments']],
        'lighting' => ['name' => 'Lighting', 'sub' => ['Bulbs & Lamps', 'Light Fixtures', 'Emergency Lighting', 'Lighting Controls', 'Outdoor Lighting', 'LED Lighting']],
        'lubrication' => ['name' => 'Lubrication', 'sub' => ['Grease', 'Oils', 'Lubricants', 'Lubrication Equipment', 'Penetrating Oils']],
        'machining' => ['name' => 'Machining', 'sub' => ['Cutting Tools', 'Drill Bits', 'End Mills', 'Tool Holders', 'Machining Fluids']],
        'material-handling' => ['name' => 'Material Handling', 'sub' => ['Carts & Trucks', 'Lifting Equipment', 'Storage & Shelving', 'Conveyors', 'Hoists & Cranes', 'Dock Equipment']],
        'motors' => ['name' => 'Motors', 'sub' => ['AC Motors', 'DC Motors', 'Motor Controls', 'Motor Mounts', 'Variable Frequency Drives']],
        'office' => ['name' => 'Office Supplies', 'sub' => ['Writing Supplies', 'Paper', 'Office Furniture', 'Breakroom', 'Technology Accessories']],
        'outdoor' => ['name' => 'Outdoor Equipment', 'sub' => ['Landscaping Tools', 'Snow Removal', 'Outdoor Power Equipment', 'Hose & Watering']],
        'packaging' => ['name' => 'Packaging & Shipping', 'sub' => ['Boxes & Cartons', 'Packaging Tape', 'Stretch Wrap', 'Kraft Paper', 'Labels & Tags', 'Shipping Supplies']],
        'paints' => ['name' => 'Paints, Equipment and Supplies', 'sub' => ['Paint & Coatings', 'Painting Tools', 'Paint Sprayers', 'Paint Brushes & Rollers', 'Thinners & Cleaners']],
        'pipe' => ['name' => 'Pipe, Hose, Tube & Fittings', 'sub' => ['Pipe', 'Hose', 'Tube', 'Fittings', 'Pipe Hangers & Supports', 'Valves']],
        'plumbing' => ['name' => 'Plumbing', 'sub' => ['Pipe & Fittings', 'Valves', 'Faucets & Fixtures', 'Water Heaters', 'Drain Cleaning', 'Tubing & Hose', 'Plumbing Tools', 'Pipe', 'Hose', 'Tube', 'Fittings']],
        'pneumatics' => ['name' => 'Pneumatics', 'sub' => ['Air Cylinders', 'Air Valves', 'Air Preparation', 'Pneumatic Tools', 'Air Hose & Fittings']],
        'power-transmission' => ['name' => 'Power Transmission', 'sub' => ['Belts', 'Pulleys', 'Sprockets & Chain', 'Couplings', 'Bearings', 'Gears']],
        'pumps' => ['name' => 'Pumps', 'sub' => ['Centrifugal Pumps', 'Submersible Pumps', 'Diaphragm Pumps', 'Pump Accessories', 'Peristaltic Pumps']],
        'raw-materials' => ['name' => 'Raw Materials', 'sub' => ['Metals', 'Plastics', 'Rubber', 'Wood', 'Composite Materials']],
        'safety' => ['name' => 'Safety', 'sub' => ['Eye & Face Protection', 'Head Protection', 'Hand & Arm Protection', 'Respiratory Protection', 'Fall Protection', 'Hearing Protection', 'Protective Clothing', 'Footwear & Footwear Accessories', 'First Aid & Wound Care', 'Fire Protection', 'Signs & Facility Identification Products', 'Lockout Tagout', 'Eyewash Equipment & Safety Showers', 'Emergency Preparedness Products', 'Traffic Safety', 'Confined Space', 'Arc Flash Protection', 'Gas Detection', 'Safety Storage', 'Sorbents, Spill Control & Spill Containment', 'Floor Mats', 'Antislip Tapes, Treads & Stair Nosings', 'Safety Training', 'Joint & Back Support', 'Workwear', 'Hydration Products', 'Medical Supplies & Equipment', 'Safety Alarms & Warning Lights', 'Water Safety']],
        'security' => ['name' => 'Security', 'sub' => ['Locks', 'Video Surveillance', 'Access Barriers & Crowd Control', 'Security Alarms & Warnings', 'Safes', 'ID Cards, Printers & Supplies', 'Key Control & Duplication', 'Folding Security Gates', 'Asset Tracking & Protection', 'Security & Access Doors', 'Security Seals', 'Mailboxes & Mailbox Accessories', 'Metal Detectors, Scanners & Accessories', 'Military, Tactical & Public Security Equipment']],
        'test-instruments' => ['name' => 'Test Instruments', 'sub' => ['Multimeters', 'Clamp Meters', 'Thermometers', 'Pressure Gauges', 'Calibration Tools', 'Inspection Cameras']],
        'tools' => ['name' => 'Tools', 'sub' => ['Hand Tools', 'Power Tools', 'Tool Storage', 'Measuring & Layout Tools', 'Cutting Tools', 'Striking & Demolition Tools', 'Saws', 'Drills & Drivers', 'Screwdrivers', 'Wrenches', 'Pliers', 'Hammers', 'Knives & Blades', 'Socket Sets', 'Grinding & Cutting Wheels', 'Sandpaper & Sheets', 'Sharpening Stones', 'Wire Brushes & Wheels']],
        'welding' => ['name' => 'Welding', 'sub' => ['Welding Equipment', 'Welding Supplies', 'Welding Safety', 'Welding Rods & Wire', 'Welding Accessories']],
    ];
}

function getCategoryInfo(string $slug): ?array {
    $cats = getAllCategories();
    return $cats[$slug] ?? null;
}

function getCategorySlugByName(string $name): ?string {
    $cats = getAllCategories();
    foreach ($cats as $slug => $info) {
        if (strtolower($info['name']) === strtolower($name)) {
            return $slug;
        }
        foreach ($info['sub'] as $sub) {
            if (strtolower($sub) === strtolower($name)) {
                return $slug;
            }
        }
    }
    return null;
}

// ============================================================
// DB-driven category helpers (for the new schema)
// ============================================================
function getDbCategories(PDO $pdo): array {
    $stmt = $pdo->query('SELECT id, parent_id, name, slug, lft, rgt, level, product_count FROM categories WHERE status = 1 ORDER BY lft ASC');
    return $stmt->fetchAll();
}

function getDbCategoryTree(PDO $pdo, ?int $parentId = null): array {
    if ($parentId === null) {
        $stmt = $pdo->query('SELECT id, parent_id, name, slug, lft, rgt, level, product_count FROM categories WHERE status = 1 AND level = 0 ORDER BY sort_order ASC, name ASC');
    } else {
        $stmt = $pdo->prepare('SELECT id, parent_id, name, slug, lft, rgt, level, product_count FROM categories WHERE status = 1 AND parent_id = ? ORDER BY sort_order ASC, name ASC');
        $stmt->execute([$parentId]);
    }
    return $stmt->fetchAll();
}

function getDbCategoryChildren(PDO $pdo, int $categoryId): array {
    $stmt = $pdo->prepare('SELECT id, parent_id, name, slug, lft, rgt, level, product_count FROM categories WHERE status = 1 AND parent_id = ? ORDER BY sort_order ASC, name ASC');
    $stmt->execute([$categoryId]);
    return $stmt->fetchAll();
}

function getDbCategoryBreadcrumbs(PDO $pdo, int $categoryId): array {
    $crumbs = [];
    $stmt = $pdo->prepare('SELECT parent_id, level FROM categories WHERE id = ?');
    $stmt->execute([$categoryId]);
    $cat = $stmt->fetch();
    if (!$cat) return $crumbs;

    $stmt = $pdo->prepare('SELECT id, name, slug, level FROM categories WHERE lft <= (SELECT lft FROM categories WHERE id = ?) AND rgt >= (SELECT rgt FROM categories WHERE id = ?) AND status = 1 ORDER BY level ASC');
    $stmt->execute([$categoryId, $categoryId]);
    return $stmt->fetchAll();
}

function getCategoryIcon(string $categoryName): string {
    $iconMap = [
        'Abrasives' => 'fa-gem',
        'Adhesives' => 'fa-paste',
        'Tape' => 'fa-border-top-left',
        'Epoxy' => 'fa-flask',
        'Caulk' => 'fa-syringe',
        'Cleaning' => 'fa-broom',
        'Janitorial' => 'fa-broom',
        'Vacuum' => 'fa-robot',
        'Mops' => 'fa-broom',
        'Electrical' => 'fa-bolt',
        'Wire' => 'fa-plug',
        'Cable' => 'fa-plug',
        'Conduit' => 'fa-pipe',
        'Circuit' => 'fa-microchip',
        'Switches' => 'fa-toggle-on',
        'Outlets' => 'fa-plug',
        'Batteries' => 'fa-battery-full',
        'Electronics' => 'fa-microchip',
        'Sensors' => 'fa-satellite-dish',
        'Power Supplies' => 'fa-battery-charging',
        'Fasteners' => 'fa-wrench',
        'Screws' => 'fa-screwdriver',
        'Bolts' => 'fa-cog',
        'Nuts' => 'fa-cog',
        'Washers' => 'fa-circle',
        'Anchors' => 'fa-anchor',
        'Rivets' => 'fa-compress',
        'Hardware' => 'fa-toolbox',
        'Fleet' => 'fa-truck',
        'Automotive' => 'fa-car',
        'Vehicle' => 'fa-car',
        'Tire' => 'fa-circle',
        'Furnishings' => 'fa-couch',
        'Furniture' => 'fa-couch',
        'Appliances' => 'fa-blender',
        'Hospitality' => 'fa-concierge-bell',
        'HVAC' => 'fa-fan',
        'Heating' => 'fa-temperature-high',
        'Cooling' => 'fa-temperature-low',
        'Air Conditioning' => 'fa-snowflake',
        'Refrigeration' => 'icicles',
        'Ventilation' => 'fa-wind',
        'Thermostats' => 'fa-thermometer-half',
        'Ductwork' => 'fa-warehouse',
        'Hydraulics' => 'fa-oil-can',
        'Cylinders' => 'fa-compress-arrows-alt',
        'Pumps' => 'fa-water',
        'Valves' => 'fa-door-closed',
        'Hoses' => 'fa-water',
        'Filters' => 'fa-filter',
        'Lab' => 'fa-flask',
        'Test Kits' => 'fa-vial',
        'Measurement' => 'fa-ruler-combined',
        'Glassware' => 'fa-prescription-bottle',
        'Lighting' => 'fa-lightbulb',
        'Bulbs' => 'fa-lightbulb',
        'Lamps' => 'fa-lightbulb',
        'Fixtures' => 'fa-ceiling-light',
        'Emergency' => 'fa-exclamation-triangle',
        'Controls' => 'fa-sliders-h',
        'LED' => 'fa-lightbulb',
        'Lubrication' => 'fa-oil-can',
        'Grease' => 'fa-oil-can',
        'Oils' => 'fa-oil-can',
        'Lubricants' => 'fa-spray-can',
        'Machining' => 'fa-industry',
        'Cutting' => 'fa-scissors',
        'Drill' => 'fa-drill',
        'End Mills' => 'fa-minus',
        'Tool Holders' => 'fa-toolbox',
        'Material Handling' => 'fa-dolly',
        'Carts' => 'fa-dolly',
        'Trucks' => 'fa-truck',
        'Lifting' => 'fa-arrow-up',
        'Storage' => 'fa-warehouse',
        'Shelving' => 'fa-border-all',
        'Conveyors' => 'fa-truck-loading',
        'Hoists' => 'fa-truck-container',
        'Cranes' => 'fa-truck-container',
        'Dock' => 'fa-warehouse',
        'Motors' => 'fa-cogs',
        'AC Motor' => 'fa-cogs',
        'DC Motor' => 'fa-cogs',
        'Motor Controls' => 'fa-toggle-on',
        'VFD' => 'fa-sliders-h',
        'Office' => 'fa-briefcase',
        'Writing' => 'fa-pen',
        'Paper' => 'fa-file',
        'Furniture' => 'fa-chair',
        'Breakroom' => 'fa-coffee',
        'Outdoor' => 'fa-tree',
        'Landscaping' => 'fa-leaf',
        'Snow' => 'fa-snowflake',
        'Power Equipment' => 'fa-tractor',
        'Hose' => 'fa-water',
        'Packaging' => 'fa-box',
        'Boxes' => 'fa-box',
        'Cartons' => 'fa-box',
        'Tape' => 'fa-tape',
        'Stretch Wrap' => 'fa-box',
        'Labels' => 'fa-tag',
        'Shipping' => 'fa-shipping-fast',
        'Paints' => 'fa-paint-roller',
        'Coatings' => 'fa-spray-can',
        'Painting' => 'fa-paint-brush',
        'Sprayers' => 'fa-spray-can',
        'Brushes' => 'fa-paint-brush',
        'Rollers' => 'fa-paint-roller',
        'Thinners' => 'fa-flask',
        'Cleaners' => 'fa-spray-can',
        'Pipe' => 'fa-pipe',
        'Tube' => 'fa-pipe',
        'Fittings' => 'fa-project-diagram',
        'Hangers' => 'fa-arrow-up',
        'Supports' => 'fa-arrow-up',
        'Plumbing' => 'fa-faucet',
        'Faucets' => 'fa-faucet',
        'Fixtures' => 'fa-bath',
        'Water Heaters' => 'fa-water',
        'Drain' => 'fa-pipe',
        'Tubing' => 'fa-pipe',
        'Pneumatics' => 'fa-wind',
        'Air Cylinders' => 'fa-compress',
        'Air Valves' => 'fa-wind',
        'Air Preparation' => 'fa-filter',
        'Pneumatic Tools' => 'fa-toolbox',
        'Power Transmission' => 'fa-cogs',
        'Belts' => 'fa-ellipsis-h',
        'Pulleys' => 'fa-circle',
        'Sprockets' => 'fa-cog',
        'Chain' => 'fa-link',
        'Couplings' => 'fa-link',
        'Bearings' => 'fa-circle',
        'Gears' => 'fa-cog',
        'Raw Materials' => 'fa-cube',
        'Metals' => 'fa-industry',
        'Plastics' => 'fa-cube',
        'Rubber' => 'fa-circle',
        'Wood' => 'fa-tree',
        'Composites' => 'fa-layer-group',
        'Safety' => 'fa-hard-hat',
        'Eye' => 'fa-eye',
        'Face' => 'fa-mask',
        'Head' => 'fa-hard-hat',
        'Hand' => 'fa-hand-paper',
        'Arm' => 'fa-hand-paper',
        'Respiratory' => 'fa-lungs',
        'Fall' => 'fa-shield-alt',
        'Hearing' => 'fa-deaf',
        'Protective Clothing' => 'fa-tshirt',
        'Footwear' => 'fa-shoe-prints',
        'First Aid' => 'fa-first-aid',
        'Wound' => 'fa-band-aid',
        'Fire' => 'fa-fire-extinguisher',
        'Signs' => 'fa-sign',
        'Lockout' => 'fa-lock',
        'Tagout' => 'fa-tag',
        'Confined Space' => 'fa-door-closed',
        'Arc Flash' => 'fa-bolt',
        'Gas Detection' => 'fa-wind',
        'Eyewash' => 'fa-eye',
        'Safety Showers' => 'fa-shower',
        'Safety Storage' => 'fa-warehouse',
        'Sorbents' => 'fa-sponge',
        'Spill' => 'fa-exclamation-triangle',
        'Floor Mats' => 'fa-border-all',
        'Antislip' => 'fa-border-all',
        'Traffic' => 'fa-traffic-light',
        'Emergency' => 'fa-exclamation-triangle',
        'Preparedness' => 'fa-box-open',
        'Training' => 'fa-chalkboard-teacher',
        'Joint' => 'fa-user-injured',
        'Back' => 'fa-user-injured',
        'Support' => 'fa-life-ring',
        'Workwear' => 'fa-tshirt',
        'Hydration' => 'fa-water',
        'Medical' => 'fa-user-md',
        'Alarms' => 'fa-bell',
        'Warning' => 'fa-exclamation-triangle',
        'Water Safety' => 'fa-swimming-pool',
        'Security' => 'fa-shield-alt',
        'Locks' => 'fa-lock',
        'Alarms' => 'fa-bell',
        'Surveillance' => 'fa-video',
        'Video' => 'fa-video',
        'Access' => 'fa-door-closed',
        'Barriers' => 'fa-ban',
        'Crowd Control' => 'fa-users',
        'Safes' => 'fa-vault',
        'ID Cards' => 'fa-id-card',
        'Printers' => 'fa-print',
        'Key Control' => 'fa-key',
        'Duplication' => 'fa-copy',
        'Security Gates' => 'fa-door-closed',
        'Asset Tracking' => 'fa-map-marker-alt',
        'Protection' => 'fa-shield-alt',
        'Security Seals' => 'fa-tag',
        'Mailboxes' => 'fa-mail-bulk',
        'Metal Detectors' => 'fa-search',
        'Scanners' => 'fa-barcode',
        'Military' => 'fa-shield-alt',
        'Tactical' => 'fa-crosshairs',
        'Public Security' => 'fa-shield-alt',
        'Test Instruments' => 'fa-ruler-combined',
        'Multimeters' => 'fa-tachometer-alt',
        'Clamp Meters' => 'fa-tachometer-alt',
        'Thermometers' => 'fa-thermometer-half',
        'Pressure Gauges' => 'fa-gauge',
        'Calibration' => 'fa-sliders-h',
        'Inspection' => 'fa-search',
        'Cameras' => 'fa-video',
        'Tools' => 'fa-tools',
        'Hand Tools' => 'fa-wrench',
        'Power Tools' => 'fa-bolt',
        'Tool Storage' => 'fa-toolbox',
        'Measuring' => 'fa-ruler-combined',
        'Layout' => 'fa-drafting-compass',
        'Cutting' => 'fa-cut',
        'Striking' => 'fa-hammer',
        'Demolition' => 'fa-hammer',
        'Saws' => 'fa-screwdriver',
        'Drills' => 'fa-drill',
        'Drivers' => 'fa-screwdriver',
        'Screwdrivers' => 'fa-screwdriver',
        'Wrenches' => 'fa-wrench',
        'Pliers' => 'fa-tools',
        'Hammers' => 'fa-hammer',
        'Knives' => 'fa-utensil-knife',
        'Blades' => 'fa-ellipsis-h',
        'Socket' => 'fa-cog',
        'Welding' => 'fa-wand-magic',
        'Welding Equipment' => 'fa-wand-magic',
        'Welding Supplies' => 'fa-box',
        'Welding Safety' => 'fa-mask',
        'Welding Rods' => 'fa-minus',
        'Welding Wire' => 'fa-minus',
        'Welding Accessories' => 'fa-tools',
    ];

    $lowerName = strtolower($categoryName);
    foreach ($iconMap as $key => $icon) {
        if (stripos($lowerName, strtolower($key)) !== false) {
            return $icon;
        }
    }
    
    return 'fa-box';
}
