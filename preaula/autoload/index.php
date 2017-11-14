<?php 

function __autoload($class){
	if (file_exists("{$class}.php")) {
		require_once "{$class}.php";
	} else {
		die ("A classe {$class} não encontrada!");
	}
}

$conta = new Conta('Lucas');
echo $conta->getPessoa();
