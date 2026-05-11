-- ============================================================
-- Synteco Category Seed Data (Nested Set Model)
-- Grainger-inspired 32 categories + 190+ subcategories
-- ============================================================

USE synteco_db;

-- Clear existing
DELETE FROM categories;
ALTER TABLE categories AUTO_INCREMENT = 1;

-- ============================================================
-- Level 0: Root categories (parent_id = NULL)
-- ============================================================

-- We use a stored procedure to manage nested set values
-- For simplicity, we'll assign lft/rgt manually

INSERT INTO categories (id, parent_id, name, slug, lft, rgt, level, sort_order, description) VALUES
(1,  NULL, 'Abrasives',                       'abrasives',          1,   14,  0, 1,  'Grinding, cutting, sanding and finishing abrasives'),
(2,  NULL, 'Adhesives, Sealants and Tape',    'adhesives',          15,  28,  0, 2,  'Adhesives, sealants, tapes and glues'),
(3,  NULL, 'Cleaning & Janitorial',           'cleaning',           29,  42,  0, 3,  'Cleaning chemicals, janitorial supplies and equipment'),
(4,  NULL, 'Electrical',                      'electrical',         43,  60,  0, 4,  'Wire, cable, conduit, circuit protection and electrical supplies'),
(5,  NULL, 'Electronics & Batteries',         'electronics',        61,  72,  0, 5,  'Batteries, chargers, power supplies and electronic components'),
(6,  NULL, 'Fasteners',                       'fasteners',          73,  88,  0, 6,  'Screws, bolts, nuts, washers, anchors and rivets'),
(7,  NULL, 'Fleet & Vehicle Maintenance',     'fleet',              89,  100, 0, 7,  'Automotive fluids, parts, tire repair and fleet tools'),
(8,  NULL, 'Furnishings, Appliances & Hospitality', 'furnishings',  101, 112, 0, 8,  'Furniture, appliances and hospitality supplies'),
(9,  NULL, 'HVAC and Refrigeration',          'hvac',               113, 128, 0, 9,  'Heating, cooling, refrigeration and ventilation'),
(10, NULL, 'Hardware',                        'hardware',           129, 140, 0, 10, 'Door hardware, cabinet hardware and locks'),
(11, NULL, 'Hydraulics',                      'hydraulics',         141, 152, 0, 11, 'Hydraulic cylinders, pumps, valves and hoses'),
(12, NULL, 'Lab Supplies',                    'lab',                153, 164, 0, 12, 'Lab equipment, glassware and safety supplies'),
(13, NULL, 'Lighting',                        'lighting',           165, 178, 0, 13, 'Bulbs, fixtures, emergency lighting and controls'),
(14, NULL, 'Lubrication',                     'lubrication',        179, 190, 0, 14, 'Greases, oils and lubrication equipment'),
(15, NULL, 'Machining',                       'machining',          191, 202, 0, 15, 'Cutting tools, drill bits and machining fluids'),
(16, NULL, 'Material Handling',               'material-handling',  203, 216, 0, 16, 'Carts, lifting equipment, storage and shelving'),
(17, NULL, 'Motors',                          'motors',             217, 228, 0, 17, 'AC/DC motors, motor controls and VFDs'),
(18, NULL, 'Office Supplies',                 'office',             229, 240, 0, 18, 'Writing supplies, paper, furniture and breakroom'),
(19, NULL, 'Outdoor Equipment',               'outdoor',            241, 250, 0, 19, 'Landscaping tools, snow removal and outdoor power equipment'),
(20, NULL, 'Packaging & Shipping',            'packaging',          251, 264, 0, 20, 'Boxes, tape, stretch wrap and shipping supplies'),
(21, NULL, 'Paints, Equipment and Supplies',  'paints',             265, 276, 0, 21, 'Paint, coatings, sprayers and painting tools'),
(22, NULL, 'Pipe, Hose, Tube & Fittings',     'pipe',               277, 290, 0, 22, 'Pipe, hose, tube, fittings and valves'),
(23, NULL, 'Plumbing',                        'plumbing',           291, 306, 0, 23, 'Plumbing fixtures, valves, water heaters and tools'),
(24, NULL, 'Pneumatics',                      'pneumatics',         307, 318, 0, 24, 'Air cylinders, valves, preparation and pneumatic tools'),
(25, NULL, 'Power Transmission',             'power-transmission', 319, 332, 0, 25, 'Belts, pulleys, sprockets, bearings and gears'),
(26, NULL, 'Pumps',                           'pumps',              333, 344, 0, 26, 'Centrifugal, submersible and diaphragm pumps'),
(27, NULL, 'Raw Materials',                   'raw-materials',      345, 356, 0, 27, 'Metals, plastics, rubber and composite materials'),
(28, NULL, 'Safety',                          'safety',             357, 416, 0, 28, 'Personal protective equipment and safety supplies'),
(29, NULL, 'Security',                        'security',           417, 446, 0, 29, 'Locks, surveillance, access control and security equipment'),
(30, NULL, 'Test Instruments',                'test-instruments',   447, 460, 0, 30, 'Multimeters, gauges, thermometers and calibration tools'),
(31, NULL, 'Tools',                           'tools',              461, 490, 0, 31, 'Hand tools, power tools, tool storage and accessories'),
(32, NULL, 'Welding',                         'welding',            491, 502, 0, 32, 'Welding equipment, supplies, safety and accessories');

-- ============================================================
-- Level 1: Subcategories
-- ============================================================

-- Abrasives (id: 1, lft: 1, rgt: 14)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(1, 'Coated Abrasives',            'coated-abrasives',        2,  3,  1, 1),
(1, 'Bonded Abrasives',            'bonded-abrasives',        4,  5,  1, 2),
(1, 'Grinding & Cutting Wheels',   'grinding-cutting-wheels', 6,  7,  1, 3),
(1, 'Sandpaper & Sheets',          'sandpaper-sheets',        8,  9,  1, 4),
(1, 'Wire Brushes & Wheels',       'wire-brushes-wheels',    10, 11,  1, 5),
(1, 'Sharpening Stones',           'sharpening-stones',      12, 13,  1, 6);

-- Adhesives (id: 2, lft: 15, rgt: 28)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(2, 'Adhesives',                   'adhesives-cat',          16, 17, 1, 1),
(2, 'Sealants',                    'sealants',               18, 19, 1, 2),
(2, 'Tape',                        'tape',                   20, 21, 1, 3),
(2, 'Epoxy',                       'epoxy',                  22, 23, 1, 4),
(2, 'Caulk',                       'caulk',                  24, 25, 1, 5),
(2, 'Glue & Cement',               'glue-cement',            26, 27, 1, 6);

-- Cleaning (id: 3, lft: 29, rgt: 42)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(3, 'Cleaning Chemicals',          'cleaning-chemicals',     30, 31, 1, 1),
(3, 'Janitorial Supplies',         'janitorial-supplies',    32, 33, 1, 2),
(3, 'Paper Products',              'paper-products',         34, 35, 1, 3),
(3, 'Trash & Recycling',           'trash-recycling',        36, 37, 1, 4),
(3, 'Mops & Brooms',               'mops-brooms',            38, 39, 1, 5),
(3, 'Vacuum Cleaners',             'vacuum-cleaners',        40, 41, 1, 6);

-- Electrical (id: 4, lft: 43, rgt: 60)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(4, 'Wire & Cable',                'wire-cable',             44, 45, 1, 1),
(4, 'Conduit & Fittings',          'conduit-fittings',       46, 47, 1, 2),
(4, 'Circuit Protection',          'circuit-protection',     48, 49, 1, 3),
(4, 'Switches & Outlets',          'switches-outlets',       50, 51, 1, 4),
(4, 'Transformers',                'transformers',           52, 53, 1, 5),
(4, 'Electrical Tools & Testers',  'electrical-tools',       54, 55, 1, 6),
(4, 'Batteries & Chargers',        'batteries-chargers',     56, 57, 1, 7),
(4, 'Terminals & Connectors',      'terminals-connectors',   58, 59, 1, 8);

-- Electronics (id: 5, lft: 61, rgt: 72)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(5, 'Batteries',                   'batteries',              62, 63, 1, 1),
(5, 'Battery Chargers',           'battery-chargers',       64, 65, 1, 2),
(5, 'Power Supplies',              'power-supplies',         66, 67, 1, 3),
(5, 'Electronic Components',       'electronic-components',  68, 69, 1, 4),
(5, 'Sensors',                     'sensors',                70, 71, 1, 5);

-- Fasteners (id: 6, lft: 73, rgt: 88)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(6, 'Screws',                      'screws',                 74, 75, 1, 1),
(6, 'Bolts',                       'bolts',                  76, 77, 1, 2),
(6, 'Nuts & Washers',             'nuts-washers',           78, 79, 1, 3),
(6, 'Anchors',                     'anchors',                80, 81, 1, 4),
(6, 'Rivets',                      'rivets',                 82, 83, 1, 5),
(6, 'Hardware Kits',              'hardware-kits',          84, 85, 1, 6),
(6, 'Threaded Rod',               'threaded-rod',           86, 87, 1, 7);

-- Fleet (id: 7, lft: 89, rgt: 100)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(7, 'Automotive Fluids',           'automotive-fluids',      90, 91, 1, 1),
(7, 'Vehicle Parts',               'vehicle-parts',          92, 93, 1, 2),
(7, 'Tire Repair',                 'tire-repair',            94, 95, 1, 3),
(7, 'Car Care',                    'car-care',               96, 97, 1, 4),
(7, 'Fleet Tools',                 'fleet-tools',            98, 99, 1, 5);

-- Furnishings (id: 8, lft: 101, rgt: 112)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(8, 'Furniture',                   'furniture',              102, 103, 1, 1),
(8, 'Appliances',                  'appliances',             104, 105, 1, 2),
(8, 'Hospitality Supplies',        'hospitality-supplies',   106, 107, 1, 3),
(8, 'Locker Room',                 'locker-room',            108, 109, 1, 4),
(8, 'Breakroom Supplies',          'breakroom-supplies',     110, 111, 1, 5);

-- HVAC (id: 9, lft: 113, rgt: 128)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(9, 'Heating Equipment',           'heating-equipment',      114, 115, 1, 1),
(9, 'Air Conditioning',            'air-conditioning',       116, 117, 1, 2),
(9, 'Refrigeration',               'refrigeration',          118, 119, 1, 3),
(9, 'Ventilation',                 'ventilation',            120, 121, 1, 4),
(9, 'Thermostats',                 'thermostats',            122, 123, 1, 5),
(9, 'Ductwork',                    'ductwork',               124, 125, 1, 6),
(9, 'HVAC Tools',                  'hvac-tools',             126, 127, 1, 7);

-- Hardware (id: 10, lft: 129, rgt: 140)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(10, 'Door Hardware',             'door-hardware',           130, 131, 1, 1),
(10, 'Cabinet Hardware',          'cabinet-hardware',        132, 133, 1, 2),
(10, 'Locks & Latches',           'locks-latches',           134, 135, 1, 3),
(10, 'Hinges',                     'hinges',                 136, 137, 1, 4),
(10, 'Castors & Wheels',          'castors-wheels',          138, 139, 1, 5);

-- Hydraulics (id: 11, lft: 141, rgt: 152)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(11, 'Hydraulic Cylinders',       'hydraulic-cylinders',     142, 143, 1, 1),
(11, 'Hydraulic Pumps',           'hydraulic-pumps',         144, 145, 1, 2),
(11, 'Hydraulic Valves',          'hydraulic-valves',        146, 147, 1, 3),
(11, 'Hydraulic Hoses',           'hydraulic-hoses',         148, 149, 1, 4),
(11, 'Hydraulic Filters',         'hydraulic-filters',       150, 151, 1, 5);

-- Lab Supplies (id: 12, lft: 153, rgt: 164)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(12, 'Lab Equipment',             'lab-equipment',           154, 155, 1, 1),
(12, 'Lab Glassware',             'lab-glassware',           156, 157, 1, 2),
(12, 'Lab Safety',                'lab-safety',              158, 159, 1, 3),
(12, 'Test Kits',                 'test-kits',               160, 161, 1, 4),
(12, 'Measurement Instruments',   'measurement-instruments', 162, 163, 1, 5);

-- Lighting (id: 13, lft: 165, rgt: 178)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(13, 'Bulbs & Lamps',             'bulbs-lamps',             166, 167, 1, 1),
(13, 'Light Fixtures',             'light-fixtures',          168, 169, 1, 2),
(13, 'Emergency Lighting',        'emergency-lighting',       170, 171, 1, 3),
(13, 'Lighting Controls',          'lighting-controls',       172, 173, 1, 4),
(13, 'Outdoor Lighting',          'outdoor-lighting',         174, 175, 1, 5),
(13, 'LED Lighting',              'led-lighting',             176, 177, 1, 6);

-- Lubrication (id: 14, lft: 179, rgt: 190)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(14, 'Grease',                     'grease',                  180, 181, 1, 1),
(14, 'Oils',                       'oils',                    182, 183, 1, 2),
(14, 'Lubricants',                 'lubricants',              184, 185, 1, 3),
(14, 'Lubrication Equipment',     'lubrication-equipment',    186, 187, 1, 4),
(14, 'Penetrating Oils',          'penetrating-oils',         188, 189, 1, 5);

-- Machining (id: 15, lft: 191, rgt: 202)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(15, 'Cutting Tools',              'cutting-tools',           192, 193, 1, 1),
(15, 'Drill Bits',                 'drill-bits',              194, 195, 1, 2),
(15, 'End Mills',                  'end-mills',               196, 197, 1, 3),
(15, 'Tool Holders',               'tool-holders',            198, 199, 1, 4),
(15, 'Machining Fluids',          'machining-fluids',         200, 201, 1, 5);

-- Material Handling (id: 16, lft: 203, rgt: 216)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(16, 'Carts & Trucks',             'carts-trucks',            204, 205, 1, 1),
(16, 'Lifting Equipment',          'lifting-equipment',       206, 207, 1, 2),
(16, 'Storage & Shelving',         'storage-shelving',        208, 209, 1, 3),
(16, 'Conveyors',                  'conveyors',               210, 211, 1, 4),
(16, 'Hoists & Cranes',            'hoists-cranes',           212, 213, 1, 5),
(16, 'Dock Equipment',             'dock-equipment',          214, 215, 1, 6);

-- Motors (id: 17, lft: 217, rgt: 228)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(17, 'AC Motors',                  'ac-motors',               218, 219, 1, 1),
(17, 'DC Motors',                  'dc-motors',               220, 221, 1, 2),
(17, 'Motor Controls',             'motor-controls',          222, 223, 1, 3),
(17, 'Motor Mounts',               'motor-mounts',            224, 225, 1, 4),
(17, 'Variable Frequency Drives', 'vfd-drives',               226, 227, 1, 5);

-- Office Supplies (id: 18, lft: 229, rgt: 240)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(18, 'Writing Supplies',           'writing-supplies',        230, 231, 1, 1),
(18, 'Paper',                      'paper',                   232, 233, 1, 2),
(18, 'Office Furniture',           'office-furniture',        234, 235, 1, 3),
(18, 'Breakroom',                  'breakroom',               236, 237, 1, 4),
(18, 'Technology Accessories',    'tech-accessories',         238, 239, 1, 5);

-- Outdoor Equipment (id: 19, lft: 241, rgt: 250)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(19, 'Landscaping Tools',          'landscaping-tools',       242, 243, 1, 1),
(19, 'Snow Removal',               'snow-removal',            244, 245, 1, 2),
(19, 'Outdoor Power Equipment',   'outdoor-power-equipment',  246, 247, 1, 3),
(19, 'Hose & Watering',           'hose-watering',            248, 249, 1, 4);

-- Packaging (id: 20, lft: 251, rgt: 264)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(20, 'Boxes & Cartons',            'boxes-cartons',           252, 253, 1, 1),
(20, 'Packaging Tape',             'packaging-tape',          254, 255, 1, 2),
(20, 'Stretch Wrap',               'stretch-wrap',            256, 257, 1, 3),
(20, 'Kraft Paper',                'kraft-paper',             258, 259, 1, 4),
(20, 'Labels & Tags',              'labels-tags',             260, 261, 1, 5),
(20, 'Shipping Supplies',          'shipping-supplies',       262, 263, 1, 6);

-- Paints (id: 21, lft: 265, rgt: 276)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(21, 'Paint & Coatings',           'paint-coatings',          266, 267, 1, 1),
(21, 'Painting Tools',             'painting-tools',          268, 269, 1, 2),
(21, 'Paint Sprayers',             'paint-sprayers',          270, 271, 1, 3),
(21, 'Paint Brushes & Rollers',   'paint-brushes-rollers',    272, 273, 1, 4),
(21, 'Thinners & Cleaners',        'thinners-cleaners',       274, 275, 1, 5);

-- Pipe, Hose, Tube & Fittings (id: 22, lft: 277, rgt: 290)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(22, 'Pipe',                       'pipe-cat',                278, 279, 1, 1),
(22, 'Hose',                       'hose-cat',                280, 281, 1, 2),
(22, 'Tube',                       'tube-cat',                282, 283, 1, 3),
(22, 'Fittings',                   'fittings-cat',            284, 285, 1, 4),
(22, 'Pipe Hangers & Supports',   'pipe-hangers',             286, 287, 1, 5),
(22, 'Valves',                     'valves-pipe',             288, 289, 1, 6);

-- Plumbing (id: 23, lft: 291, rgt: 306)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(23, 'Pipe & Fittings',            'plumbing-pipe-fittings',    292, 293, 1, 1),
(23, 'Valves',                     'plumbing-valves',          294, 295, 1, 2),
(23, 'Faucets & Fixtures',         'faucets-fixtures',         296, 297, 1, 3),
(23, 'Water Heaters',              'water-heaters',            298, 299, 1, 4),
(23, 'Drain Cleaning',             'drain-cleaning',           300, 301, 1, 5),
(23, 'Tubing & Hose',              'tubing-hose',              302, 303, 1, 6),
(23, 'Plumbing Tools',             'plumbing-tools',           304, 305, 1, 7);

-- Pneumatics (id: 24, lft: 307, rgt: 318)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(24, 'Air Cylinders',              'air-cylinders',            308, 309, 1, 1),
(24, 'Air Valves',                 'air-valves',               310, 311, 1, 2),
(24, 'Air Preparation',            'air-preparation',          312, 313, 1, 3),
(24, 'Pneumatic Tools',            'pneumatic-tools',          314, 315, 1, 4),
(24, 'Air Hose & Fittings',        'air-hose-fittings',       316, 317, 1, 5);

-- Power Transmission (id: 25, lft: 319, rgt: 332)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(25, 'Belts',                      'belts',                    320, 321, 1, 1),
(25, 'Pulleys',                    'pulleys',                  322, 323, 1, 2),
(25, 'Sprockets & Chain',          'sprockets-chain',          324, 325, 1, 3),
(25, 'Couplings',                  'couplings',                326, 327, 1, 4),
(25, 'Bearings',                   'bearings',                 328, 329, 1, 5),
(25, 'Gears',                      'gears',                    330, 331, 1, 6);

-- Pumps (id: 26, lft: 333, rgt: 344)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(26, 'Centrifugal Pumps',          'centrifugal-pumps',        334, 335, 1, 1),
(26, 'Submersible Pumps',          'submersible-pumps',        336, 337, 1, 2),
(26, 'Diaphragm Pumps',            'diaphragm-pumps',          338, 339, 1, 3),
(26, 'Pump Accessories',           'pump-accessories',         340, 341, 1, 4),
(26, 'Peristaltic Pumps',          'peristaltic-pumps',        342, 343, 1, 5);

-- Raw Materials (id: 27, lft: 345, rgt: 356)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(27, 'Metals',                     'metals',                   346, 347, 1, 1),
(27, 'Plastics',                   'plastics',                 348, 349, 1, 2),
(27, 'Rubber',                     'rubber',                   350, 351, 1, 3),
(27, 'Wood',                       'wood',                     352, 353, 1, 4),
(27, 'Composite Materials',        'composite-materials',      354, 355, 1, 5);

-- Safety (id: 28, lft: 357, rgt: 416) -- Many subcats
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(28, 'Eye & Face Protection',                   'eye-face-protection',              358, 359, 1, 1),
(28, 'Head Protection',                         'head-protection',                  360, 361, 1, 2),
(28, 'Hand & Arm Protection',                   'hand-arm-protection',              362, 363, 1, 3),
(28, 'Respiratory Protection',                  'respiratory-protection',           364, 365, 1, 4),
(28, 'Fall Protection',                         'fall-protection',                  366, 367, 1, 5),
(28, 'Hearing Protection',                      'hearing-protection',               368, 369, 1, 6),
(28, 'Protective Clothing',                     'protective-clothing',              370, 371, 1, 7),
(28, 'Footwear & Footwear Accessories',        'footwear-accessories',             372, 373, 1, 8),
(28, 'First Aid & Wound Care',                 'first-aid-wound-care',             374, 375, 1, 9),
(28, 'Fire Protection',                         'fire-protection',                  376, 377, 1, 10),
(28, 'Signs & Facility Identification',         'signs-facility-id',                378, 379, 1, 11),
(28, 'Lockout Tagout',                          'lockout-tagout',                   380, 381, 1, 12),
(28, 'Confined Space',                          'confined-space',                   382, 383, 1, 13),
(28, 'Arc Flash Protection',                    'arc-flash-protection',             384, 385, 1, 14),
(28, 'Gas Detection',                           'gas-detection',                    386, 387, 1, 15),
(28, 'Eyewash Equipment & Safety Showers',     'eyewash-safety-showers',           388, 389, 1, 16),
(28, 'Safety Storage',                          'safety-storage',                   390, 391, 1, 17),
(28, 'Sorbents, Spill Control & Containment',   'sorbents-spill-control',           392, 393, 1, 18),
(28, 'Floor Mats',                              'floor-mats',                       394, 395, 1, 19),
(28, 'Antislip Tapes, Treads & Stair Nosings', 'antislip-tapes-treads',            396, 397, 1, 20),
(28, 'Traffic Safety',                          'traffic-safety',                   398, 399, 1, 21),
(28, 'Emergency Preparedness Products',         'emergency-preparedness',           400, 401, 1, 22),
(28, 'Safety Training',                         'safety-training',                  402, 403, 1, 23),
(28, 'Joint & Back Support',                    'joint-back-support',               404, 405, 1, 24),
(28, 'Workwear',                                'workwear',                         406, 407, 1, 25),
(28, 'Hydration Products',                      'hydration-products',               408, 409, 1, 26),
(28, 'Medical Supplies & Equipment',            'medical-supplies',                 410, 411, 1, 27),
(28, 'Safety Alarms & Warning Lights',          'safety-alarms-warning-lights',     412, 413, 1, 28),
(28, 'Water Safety',                            'water-safety',                     414, 415, 1, 29);

-- Security (id: 29, lft: 417, rgt: 446)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(29, 'Locks',                                    'locks',                            418, 419, 1, 1),
(29, 'Security Alarms & Warnings',               'security-alarms-warnings',         420, 421, 1, 2),
(29, 'Video Surveillance',                      'video-surveillance',               422, 423, 1, 3),
(29, 'Access Barriers & Crowd Control',          'access-barriers',                  424, 425, 1, 4),
(29, 'Safes',                                    'safes',                            426, 427, 1, 5),
(29, 'ID Cards, Printers & Supplies',            'id-cards-printers',                428, 429, 1, 6),
(29, 'Key Control & Duplication',                'key-control-duplication',          430, 431, 1, 7),
(29, 'Folding Security Gates',                   'folding-security-gates',           432, 433, 1, 8),
(29, 'Asset Tracking & Protection',              'asset-tracking',                   434, 435, 1, 9),
(29, 'Security & Access Doors',                  'security-access-doors',            436, 437, 1, 10),
(29, 'Security Seals',                           'security-seals',                   438, 439, 1, 11),
(29, 'Mailboxes & Mailbox Accessories',          'mailboxes',                        440, 441, 1, 12),
(29, 'Metal Detectors, Scanners & Accessories',  'metal-detectors',                  442, 443, 1, 13),
(29, 'Military, Tactical & Public Security',     'military-tactical-security',       444, 445, 1, 14);

-- Test Instruments (id: 30, lft: 447, rgt: 460)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(30, 'Multimeters',                              'multimeters',                      448, 449, 1, 1),
(30, 'Clamp Meters',                             'clamp-meters',                     450, 451, 1, 2),
(30, 'Thermometers',                             'thermometers',                     452, 453, 1, 3),
(30, 'Pressure Gauges',                          'pressure-gauges',                  454, 455, 1, 4),
(30, 'Calibration Tools',                        'calibration-tools',                456, 457, 1, 5),
(30, 'Inspection Cameras',                       'inspection-cameras',               458, 459, 1, 6);

-- Tools (id: 31, lft: 461, rgt: 490)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(31, 'Hand Tools',                               'hand-tools',                       462, 463, 1, 1),
(31, 'Power Tools',                              'power-tools',                      464, 465, 1, 2),
(31, 'Tool Storage',                             'tool-storage',                     466, 467, 1, 3),
(31, 'Measuring & Layout Tools',                 'measuring-layout-tools',           468, 469, 1, 4),
(31, 'Cutting Tools',                            'cutting-tools-tools',              470, 471, 1, 5),
(31, 'Striking & Demolition Tools',              'striking-demolition-tools',        472, 473, 1, 6),
(31, 'Saws',                                     'saws',                             474, 475, 1, 7),
(31, 'Drills & Drivers',                         'drills-drivers',                   476, 477, 1, 8),
(31, 'Screwdrivers',                             'screwdrivers',                     478, 479, 1, 9),
(31, 'Wrenches',                                 'wrenches',                         480, 481, 1, 10),
(31, 'Pliers',                                   'pliers',                           482, 483, 1, 11),
(31, 'Hammers',                                  'hammers',                          484, 485, 1, 12),
(31, 'Knives & Blades',                          'knives-blades',                    486, 487, 1, 13),
(31, 'Socket Sets',                              'socket-sets',                      488, 489, 1, 14);

-- Welding (id: 32, lft: 491, rgt: 502)
INSERT INTO categories (parent_id, name, slug, lft, rgt, level, sort_order) VALUES
(32, 'Welding Equipment',                        'welding-equipment',                492, 493, 1, 1),
(32, 'Welding Supplies',                         'welding-supplies',                 494, 495, 1, 2),
(32, 'Welding Safety',                           'welding-safety',                   496, 497, 1, 3),
(32, 'Welding Rods & Wire',                      'welding-rods-wire',                498, 499, 1, 4),
(32, 'Welding Accessories',                      'welding-accessories',              500, 501, 1, 5);
