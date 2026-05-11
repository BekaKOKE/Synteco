<?php
require_once __DIR__ . '/config/database.php';
$pdo = getDB();

// Test exact query
$catList = "'Tools','Hand Tools','Power Tools'";
$sql = "SELECT COUNT(*) FROM products WHERE category IN ($catList)";
echo "SQL: $sql\n";
$result = $pdo->query($sql)->fetchColumn();
echo "Result: $result\n";
?>