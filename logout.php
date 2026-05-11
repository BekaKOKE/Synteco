<?php
require_once __DIR__ . '/config/init.php';

logoutCustomer();

header('Location: index.php?logout=1');
exit;
