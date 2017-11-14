<?php 

function __autoload($class){
	print_r($class);
	if (file_exists("{$class}.php")) {
		require_once "{$class}.php";
	} else {
		die("Classe {$class} não encontrada");
	}
}
echo "<pre>";
$conta = new Conta();
var_dump($conta);
echo "<hr>";
$pessoa = new Pessoa();