<?php
require_once __DIR__ . '/../config/init.php';

$pageTitle = 'Seed Sample Products';
require_once __DIR__ . '/../includes/header.php';

$pdo = getDB();
$message = '';
$error = '';

// Check if products already exist
$existingCount = (int)$pdo->query('SELECT COUNT(*) FROM products')->fetchColumn();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['seed'])) {
    try {
        // Sample products to seed
        $sampleProducts = [
            // Tools
            ['DeWalt 20V MAX Cordless Drill', 'DeWalt 20V MAX cordless drill/driver with lithium-ion battery. Compact design for tight spaces.', 89.99, 'Tools', 150],
            ['Milwaukee M18 Impact Driver', 'Milwaukee M18 FUEL impact driver with brushless motor. 1800 in-lbs of torque.', 129.99, 'Tools', 85],
            ['Stanley 25ft Tape Measure', 'Stanley FatMax 25ft tape measure with blade lock and magnetic tip.', 24.99, 'Tools', 200],
            ['Craftsman Socket Set 230pc', 'Craftsman 230-piece mechanics tool set with chrome vanadium steel.', 199.99, 'Tools', 45],
            ['Channellock Pliers Set 5pc', 'Channellock 5-piece professional pliers set.', 89.99, 'Tools', 60],

            // Safety
            ['3M N95 Respirator 20pk', '3M 8210 N95 particulate respirator, 20-pack.', 24.99, 'Safety', 500],
            ['Ansell Hyflex Gloves 12pr', 'Ansell Hyflex 11-840 industrial gloves, 12-pair pack.', 35.99, 'Safety', 300],
            ['Honeywell Safety Glasses', 'Honeywell Visiplus safety glasses with anti-fog coating.', 12.99, 'Safety', 400],
            ['MSA Hard Hat', 'MSA V-Gard hard hat with 4-point suspension.', 19.99, 'Safety', 250],
            ['Kimberly-Clark Gloves 100pk', 'Kimberly-Clark Nitrile gloves, 100-count.', 18.99, 'Safety', 350],

            // Electrical
            ['Southwire Romex 250ft', 'Southwire NM-B Romex cable, 12/2, 250ft roll.', 89.99, 'Electrical', 75],
            ['Leviton Outlet 15A', 'Leviton 15A tamper-resistant outlet, white.', 4.99, 'Electrical', 600],
            ['Eaton Circuit Breaker', 'Eaton BR120 single-pole circuit breaker, 20A.', 12.99, 'Electrical', 180],
            ['Wire Connectors 100pk', 'Ideal WingNut wire connectors, 100-pack.', 9.99, 'Electrical', 400],
            ['Flashlight LED 1000lm', 'Stanley LED rechargeable flashlight, 1000 lumens.', 34.99, 'Electrical', 120],

            // Fasteners
            ['Hillman Screws Assorted', 'Hillman 1200-piece screw assortment kit.', 24.99, 'Fasteners', 90],
            ['Simpson Strong-Tie Anchors', 'Simpson Strong-Tie Titen HD anchor, 50-pack.', 45.99, 'Fasteners', 65],
            ['USForge Bolts 1lb', 'USForge grade 5 hex bolts, 1lb bag.', 12.99, 'Fasteners', 150],

            // HVAC
            ['Carrier Filter 20x25', 'Carrier pleated air filter, 20x25x1.', 12.99, 'HVAC', 200],
            ['Honeywell Thermostat', 'Honeywell T6 Pro programmable thermostat.', 49.99, 'HVAC', 80],
            ['Duct Tape 60yd', 'Duck brand professional duct tape, 60 yards.', 8.99, 'HVAC', 300],

            // Cleaning
            ['Swiffer WetJet', 'Swiffer WetJet floor cleaning system.', 24.99, 'Cleaning & Janitorial', 150],
            ['Liberty Bags 30gal', 'Rubbermaid Brute 30-gallon container.', 19.99, 'Cleaning & Janitorial', 100],
            ['Paper Towels 6pk', 'Brawny industrial paper towels, 6-roll pack.', 29.99, 'Cleaning & Janitorial', 180],

            // Plumbing
            ['General Pipe Cleaner', 'General Pipe 25ft drain snake.', 44.99, 'Plumbing', 40],
            ['Brass Hose Bib', 'Brass garden hose bibb, 3/4 inch.', 12.99, 'Plumbing', 85],
            ['PVC Pipe 2in 10ft', 'PVC schedule 40 pipe, 2in x 10ft.', 8.99, 'Plumbing', 120],

            // Material Handling
            ['Uline Hand Truck', 'Uline aluminum hand truck, 600lb capacity.', 79.99, 'Material Handling', 25],
            ['Shelf Unit 48x24', '48x24x72 heavy-duty steel shelf unit.', 129.99, 'Material Handling', 30],

            // Welding
            ['Lincoln Welding Rods', 'Lincoln 6013 welding rods, 1lb box.', 14.99, 'Welding', 60],
            ['Miller Welding Gloves', 'Miller Forge pro welding gloves.', 29.99, 'Welding', 45],

            // Paints
            ['Behr Paint 5gal', 'Behr Premium interior paint, 5 gallon.', 149.99, 'Paints', 35],
            ['Purdy Brush 3in', 'Purdy XL painting brush, 3 inch.', 14.99, 'Paints', 100],

            // Lighting
            ['Philips LED Bulb 4pk', 'Philips 60W equivalent LED, 4-pack.', 12.99, 'Lighting', 250],
            ['Feit Electric Shop Light', 'Feit 4ft LED shop light, 5000 lumens.', 24.99, 'Lighting', 80],

            // Lubrication
            ['WD-40 12oz Can', 'WD-40 multi-use product, 12oz aerosol.', 6.99, 'Lubrication', 400],
            ['Mobil grease cartridge', 'Mobil SHC 100 grease cartridge.', 12.99, 'Lubrication', 150],

            // Fleet
            ['Pennzoil Oil 5qt', 'Pennzoil Gold 5W-30 motor oil, 5 quart.', 24.99, 'Fleet', 100],
            ['Carquest Battery', 'Carquest Gold battery, 12V.', 129.99, 'Fleet', 40],
        ];

        // Insert products
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

        $message = 'Successfully added ' . count($sampleProducts) . ' sample products!';
    } catch (Exception $e) {
        $error = 'Error: ' . $e->getMessage();
    }
}

$currentCount = (int)$pdo->query('SELECT COUNT(*) FROM products')->fetchColumn();
?>

<div class="card" style="max-width:700px;">
    <div class="card-header">
        <h2><i class="fas fa-box"></i> Seed Sample Products</h2>
    </div>
    <div class="card-body">
        <?php if ($message): ?>
            <div class="alert" style="background:#e8f5e9;color:#2e7d32;border:1px solid #c8e6c9;">
                <i class="fas fa-check-circle"></i> <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="alert alert-error" style="background:#ffebee;color:#c62828;border:1px solid #ffcdd2;">
                <i class="fas fa-exclamation-circle"></i> <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <div style="background:var(--gray-50);padding:20px;border-radius:8px;margin-bottom:20px;">
            <h3 style="margin-top:0;">Current Status</h3>
            <p><strong>Products in database:</strong> <?= $currentCount ?></p>
            <p style="color:var(--gray-600);">Click the button below to add 35 sample products across all main categories. This will let you test the category browsing functionality.</p>
        </div>

        <?php if ($currentCount === 0): ?>
        <form method="post">
            <button type="submit" name="seed" value="1" class="btn btn-primary btn-lg">
                <i class="fas fa-seedling"></i> Add Sample Products
            </button>
            <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
        </form>
        <?php else: ?>
        <div style="background:#e3f2fd;padding:16px;border-radius:8px;border:1px solid #bbdefb;">
            <i class="fas fa-info-circle" style="color:#1565c0;"></i>
            <strong>Products already exist!</strong> You already have <?= $currentCount ?> products in the database.
            <br><br>
            <a href="../../category.php?slug=tools" class="btn btn-primary">Go to Tools Category</a>
            <a href="dashboard.php" class="btn btn-outline">Back to Dashboard</a>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>