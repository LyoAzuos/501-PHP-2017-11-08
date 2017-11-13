<?php 

require_once 'conta.php';

class ContaCorrente extends Conta
{
	public function __construct(){
		echo "Nova Conta";
	}
}

$cc = new ContaCorrente();