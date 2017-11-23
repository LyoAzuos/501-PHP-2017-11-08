<?php 

require_once 'autoload.php';

use Controller\FrontController\FrontController;

$FrontController = new FrontController();
$FrontController->rodar($_GET['r']);