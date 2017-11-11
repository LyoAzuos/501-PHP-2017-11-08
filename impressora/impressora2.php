<?php 

class Impressora
{
	public function imprimir(Imprimivel $doc){
		$conteudo = $doc->getConteudo();
		echo $conteudo;
	}
}

interface Imprimivel
{
	public function getConteudo();
}

class Documento implements Imprimivel
{
	private $conteudo;

	public function __construct($conteudo){
		$this->conteudo = $conteudo;
	}

	public function getConteudo(){
		return $this->conteudo;
	}
}

class Planilha implements Imprimivel
{
	private $conteudo;

	public function __construct(array $linhas){
		$this->conteudo = '';
		// foreach ($linhas as $linha) {
		// 	$this->conteudo .= $linha . "<br>";
		// }
		$this->conteudo = implode(',', $linhas);
	}

	public function getConteudo(){
		return $this->conteudo;
	}
}

$documento = new Documento('4Linux');
$planilha = new Planilha(['Php','Html']);
$impressora = new Impressora();
$impressora->imprimir($documento);
echo "<hr>";
$impressora->imprimir($planilha);
echo "<hr>";
$impressora->imprimir(new Documento('Cursos'));