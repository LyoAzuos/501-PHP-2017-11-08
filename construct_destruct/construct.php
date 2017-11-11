<?php 

class Pessoa
{
	private $nome;

	public function __construct($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}
}


class Conta
{
	private $pessoa;
	private $saldo;
	private $conta;

	public function __construct(Pessoa $pessoa, $saldo = 0){
		echo "Construindo Classe<br>";

		$this->pessoa = $pessoa;
		$this->saldo = $saldo;
		$this->conta = rand();
	}

	public function getPessoa(){
		return $this->pessoa;
	}
}
echo "<pre>";
$lucas = new Pessoa('Lucas Marques');
var_dump($lucas);
echo '<hr>';
$conta = new Conta($lucas,500);
var_dump($conta);
echo '<hr>';
var_dump($conta->getPessoa());
echo '<hr>';
echo $conta->getPessoa()->getNome();
echo '<hr>';
$pessoa = $conta->getPessoa();
echo $pessoa->getNome();