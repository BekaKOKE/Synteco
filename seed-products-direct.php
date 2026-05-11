<?php
/**
 * Direct seed script - Run this once to add sample products
 * Access: http://localhost/synteco%20website/seed-products-direct.php
 */

require_once __DIR__ . '/config/init.php';

$pdo = getDB();

// Check if already seeded
$existingCount = (int)$pdo->query('SELECT COUNT(*) FROM products')->fetchColumn();

if ($existingCount > 0) {
    die("Products already exist ({$existingCount} found). Delete them first or use admin.");
}

// Sample products
$sampleProducts = [
    // Tools (id 1-5)
    ['DeWalt 20V MAX Cordless Drill', 'DeWalt 20V MAX cordless drill/driver with lithium-ion battery. Compact design for tight spaces.', 89.99, 'Tools', 150],
    ['Milwaukee M18 Impact Driver', 'Milwaukee M18 FUEL impact driver with brushless motor. 1800 in-lbs of torque.', 129.99, 'Tools', 85],
    ['Stanley 25ft Tape Measure', 'Stanley FatMax 25ft tape measure with blade lock and magnetic tip.', 24.99, 'Tools', 200],
    ['Craftsman Socket Set 230pc', 'Craftsman 230-piece mechanics tool set with chrome vanadium steel.', 199.99, 'Tools', 45],
    ['Channellock Pliers Set 5pc', 'Channellock 5-piece professional pliers set.', 89.99, 'Tools', 60],

    // Safety (id 6-10)
    ['3M N95 Respirator 20pk', '3M 8210 N95 particulate respirator, 20-pack.', 24.99, 'Safety', 500],
    ['Ansell Hyflex Gloves 12pr', 'Ansell Hyflex 11-840 industrial gloves, 12-pair pack.', 35.99, 'Safety', 300],
    ['Honeywell Safety Glasses', 'Honeywell Visiplus safety glasses with anti-fog coating.', 12.99, 'Safety', 400],
    ['MSA Hard Hat', 'MSA V-Gard hard hat with 4-point suspension.', 19.99, 'Safety', 250],
    ['Kimberly-Clark Gloves 100pk', 'Kimberly-Clark Nitrile gloves, 100-count.', 18.99, 'Safety', 350],

    // Electrical (id 11-15)
    ['Southwire Romex 250ft', 'Southwire NM-B Romex cable, 12/2, 250ft roll.', 89.99, 'Electrical', 75],
    ['Leviton Outlet 15A', 'Leviton 15A tamper-resistant outlet, white.', 4.99, 'Electrical', 600],
    ['Eaton Circuit Breaker', 'Eaton BR120 single-pole circuit breaker, 20A.', 12.99, 'Electrical', 180],
    ['Wire Connectors 100pk', 'Ideal WingNut wire connectors, 100-pack.', 9.99, 'Electrical', 400],
    ['Flashlight LED 1000lm', 'Stanley LED rechargeable flashlight, 1000 lumens.', 34.99, 'Electrical', 120],

    // Fasteners (id 16-18)
    ['Hillman Screws Assorted', 'Hillman 1200-piece screw assortment kit.', 24.99, 'Fasteners', 90],
    ['Simpson Strong-Tie Anchors', 'Simpson Strong-Tie Titen HD anchor, 50-pack.', 45.99, 'Fasteners', 65],
    ['USForge Bolts 1lb', 'USForge grade 5 hex bolts, 1lb bag.', 12.99, 'Fasteners', 150],

    // HVAC (id 19-21)
    ['Carrier Filter 20x25', 'Carrier pleated air filter, 20x25x1.', 12.99, 'HVAC', 200],
    ['Honeywell Thermostat', 'Honeywell T6 Pro programmable thermostat.', 49.99, 'HVAC', 80],
    ['Duct Tape 60yd', 'Duck brand professional duct tape, 60 yards.', 8.99, 'HVAC', 300],

    // Cleaning (id 22-24)
    ['Swiffer WetJet', 'Swiffer WetJet floor cleaning system.', 24.99, 'Cleaning & Janitorial', 150],
    ['Liberty Bags 30gal', 'Rubbermaid Brute 30-gallon container.', 19.99, 'Cleaning & Janitorial', 100],
    ['Paper Towels 6pk', 'Brawny industrial paper towels, 6-roll pack.', 29.99, 'Cleaning & Janitorial', 180],

    // Plumbing (id 25-27)
    ['General Pipe Cleaner', 'General Pipe 25ft drain snake.', 44.99, 'Plumbing', 40],
    ['Brass Hose Bib', 'Brass garden hose bibb, 3/4 inch.', 12.99, 'Plumbing', 85],
    ['PVC Pipe 2in 10ft', 'PVC schedule 40 pipe, 2in x 10ft.', 8.99, 'Plumbing', 120],

    // Material Handling (id 28-29)
    ['Uline Hand Truck', 'Uline aluminum hand truck, 600lb capacity.', 79.99, 'Material Handling', 25],
    ['Shelf Unit 48x24', '48x24x72 heavy-duty steel shelf unit.', 129.99, 'Material Handling', 30],

    // Welding (id 30-31)
    ['Lincoln Welding Rods', 'Lincoln 6013 welding rods, 1lb box.', 14.99, 'Welding', 60],
    ['Miller Welding Gloves', 'Miller Forge pro welding gloves.', 29.99, 'Welding', 45],

    // Paints (id 32-33)
    ['Behr Paint 5gal', 'Behr Premium interior paint, 5 gallon.', 149.99, 'Paints', 35],
    ['Purdy Brush 3in', 'Purdy XL painting brush, 3 inch.', 14.99, 'Paints', 100],

    // Lighting (id 34-35)
    ['Philips LED Bulb 4pk', 'Philips 60W equivalent LED, 4-pack.', 12.99, 'Lighting', 250],
    ['Feit Electric Shop Light', 'Feit 4ft LED shop light, 5000 lumens.', 24.99, 'Lighting', 80],

    // Lubrication (id 36-37)
    ['WD-40 12oz Can', 'WD-40 multi-use product, 12oz aerosol.', 6.99, 'Lubrication', 400],
    ['Mobil grease cartridge', 'Mobil SHC 100 grease cartridge.', 12.99, 'Lubrication', 150],

    // Fleet (id 38-39)
    ['Pennzoil Oil 5qt', 'Pennzoil Gold 5W-30 motor oil, 5 quart.', 24.99, 'Fleet', 100],
    ['Carquest Battery', 'Carquest Gold battery, 12V.', 129.99, 'Fleet', 40],
];

$stmt = $pdo->prepare('INSERT INTO products (name, description, price, category, stock, created_at) VALUES (:name, :desc, :price, :cat, :stock, NOW())');

foreach ($sampleProducts as $prod) {
    $stmt->execute([
        ':name' => $prod[0],
        ':desc' => $prod[1],
        ':price' => $prod[2],
        ':cat' => $prod[3],
        ':stock' => $prod[4],
    ]);
}

$newCount = count($sampleProducts);
echo "<h1>Success!</h1>";
echo "<p>Added {$newCount} sample products to database.</p>";
echo "<p><a href='category.php?slug=tools'>Click here to view Tools category</a></p>";
echo "<p><a href='index.php'>Back to home</a></p>";