<?php 

require_once 'autoload.php';

use Controller\MsgController\MsgController;

echo "<pre>";

echo "<h1>MVC</h1>";

$controller = new MsgController();
$controller->executar();