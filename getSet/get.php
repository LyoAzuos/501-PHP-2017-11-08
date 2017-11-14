<?php 

class Pessoa
{
	public $atributos = [];

	public function __get($prop){
		return $this->atributos[$prop];
	}

	public function __set($nome, $valor){
		$this->atributos[$nome] = $valor;
	}

	public function __isset($prop){
		echo "Chamou isset p/ {$prop}";
		return isset($this->atributos[$prop]);
	}

	public function __unset($prop){
		echo "Chamou unset p/ {$prop}<br>";
		unset ($this->atributos[$prop]);
	}

}
echo "<pre>";
$joao = new Pessoa();
if (isset($joao->nome)) {
	echo $joao->nome;
} else {
	echo "<br>Sem Nome ";
}
$joao->nome = 'Joao';
$joao->idade = 44;
echo "<br>";
echo $joao->nome;
echo "<hr>";
print_r($joao->atributos);
echo "<hr>";
unset($joao->idade);
print_r($joao->atributos);