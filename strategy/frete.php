<?php 

interface Frete
{
	public function calcular($preco);
}

class FreteNormal implements Frete
{
	public function calcular($preco){
		return $preco + 10;
	}
}

class FreteExpresso implements Frete
{
	public function calcular($preco){
		return $preco + 12;
	}	
}
class FreteTurbo implements Frete
{
	public function calcular($preco){
		return $preco + 20;
	}
}
class MegaTurbo implements Frete
{
	public function calcular($preco){
		return $preco + 30;
	}
}


class Pedido
{
	public $preco;
	public $frete;
	// Frete Normal = 10
	// Frete Expresso = 12
	// Frete Turbo = 20

	public function __construct($preco,Frete $frete){
		$this->preco = $preco;
		$this->frete = $frete;
	}

	public function obterTotal(){
		return $this->frete->calcular($this->preco);
	}

	// public function obterTotal(){
	// 	$total = $this->preco;

	// 	if ($this->frete == 'normal') {
	// 		$total += 10;
	// 	} else if ($this->frete == 'expresso'){
	// 		$total += 12;
	// 	} else if ($this->frete == 'turbo'){
	// 		$total += 20;
	// 	}

	// 	return $total;
	// }
}

$pedido = new Pedido(50,new MegaTurbo());

echo $pedido->obterTotal();