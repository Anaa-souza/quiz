<?php
session_start();

$route = $_GET['route'] ?? 'start';
$script = null;

switch ($route) {
    case 'start':
        $script = 'start';
        break;
    case 'game':
        $script = 'game';
        break;
    case 'gameover':
        $script = 'gameover';
        break;
    default:
        $script = '404';
        break;
}


$series = require __DIR__ . '/scripts/data/series.php';


require_once __DIR__ . '/scripts/header.php';
require_once __DIR__ . "/scripts/$script.php";
require_once __DIR__ . '/scripts/footer.php';









 
