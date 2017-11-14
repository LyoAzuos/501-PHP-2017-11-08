<?php 

class Conta
{
	private $pessoa;
	private $saldo;
	private $conta;

	public function __construct($pessoa, $saldo = 0){
		echo "Construindo Classe<br>";

		$this->pessoa = $pessoa;
		$this->saldo = $saldo;
		$this->conta = rand();
	}

	public function getPessoa(){
		return $this->pessoa;
	}
}