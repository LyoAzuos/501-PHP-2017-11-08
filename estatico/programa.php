<?php 

class Programa
{
	public $nome;
	public static $count;

	public function __construct($nome){
		$this->nome = $nome;
		self::$count++;
	}
}

$futebol = new Programa('futebol');
$natacao = new Programa('natacao');
$volei = new Programa('volei');

var_dump(Programa::$count);