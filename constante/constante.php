<?php 

class Pessoa
{
	private $nome;
	private $genero;
	const GENEROS = ['M' => 'Masculino', 'F' => 'Feminino'];

	const PHP = 500;

	public function __construct($nome,$genero){
		$this->nome 	= $nome;
		$this->genero 	= $genero;
	}

	public function getNome(){
		return $this->nome;
	}
	public function getGenero(){
		return self::GENEROS[$this->genero];
	}
}
echo "<pre>";
$lucas = new Pessoa('Lucas','M');
var_dump($lucas);
echo $lucas->getGenero();
echo '<hr>';
var_dump(Pessoa::GENEROS['F']);

var_dump(Pessoa::PHP);