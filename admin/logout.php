<?php
require_once __DIR__ . '/../includes/auth.php';

admin_logout();
header('Location: /human-analytics/admin/login.php');
exit;
