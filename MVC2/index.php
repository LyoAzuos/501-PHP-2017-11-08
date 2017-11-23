<?php 

require_once 'autoload.php';

use Controller\FrontController\FrontController;

echo "<pre>";

echo "<h1>MVC</h1>";

if (!isset($_GET['r'])) {
	$_GET['r'] = 'index';
}

$controller = new FrontController();
$controller->rodar($_GET['r']);