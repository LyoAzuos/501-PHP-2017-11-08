<?php 

function __autoload($class){
	if (file_exists("{$class}/{$class}.php")) {
		require_once "{$class}/{$class}.php";
	} else {
		die("Classe {$class} não encontrada");
	}
}