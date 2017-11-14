<?php 

class Agencia
{
	private $nome;
	private $numero;

	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNumero(){
		return $this->numero;
	}
	public function setNumero($numero){
		$this->numero = $numero;
	}

}

echo "<pre>";
echo "Atributos: <br>";
$reflection = new ReflectionClass('Agencia');
print_r($reflection->getProperties());
echo "<hr>";
echo "Métodos: <br>";
print_r($reflection->getMethods());