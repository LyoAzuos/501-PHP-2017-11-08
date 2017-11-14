<?php 

class Pessoa
{
	public function __call($metodo, $params){
		print_r($metodo);
		echo "<hr>";
		print_r($params);
	}
}
echo "<pre>";
$joao = new Pessoa();
// var_dump($joao);
$joao->getNome();
$joao->setNome('Joao');