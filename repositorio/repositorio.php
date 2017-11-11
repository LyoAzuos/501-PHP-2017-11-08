<?php 

interface AlunoRepositorio
{
	public function adicionar(Aluno $aluno);

	public function recuperar($cpf);

	public function remover(Aluno $aluno);
}

class Aluno
{
	public $cpf;
}

class AlunoRepositorioMySQL implements AlunoRepositorio
{
	public function adicionar(Aluno $aluno){
		echo "Adicionando {$aluno->cpf} no MySQL";
	}
	public function recuperar($cpf){
		echo "Recuperando {$cpf} no MySQL";
	}
	public function remover(Aluno $aluno){
		echo "Removendo {$aluno->cpf} no MySQL";
	}
}

class AlunoRepositorioPostgreSQL implements AlunoRepositorio
{
	public function adicionar(Aluno $aluno){
		echo "Adicionando {$aluno->cpf} no PostgreSQL";
	}
	public function recuperar($cpf){
		echo "Recuperando {$cpf} no PostgreSQL";
	}
	public function remover(Aluno $aluno){
		echo "Removendo {$aluno->cpf} no PostgreSQL";
	}
}

function obterRepositorio($repositorio){
	if ($repositorio == 'mysql') {
		return new AlunoRepositorioMySQL;	
	} else if ($repositorio == 'postgresql'){
		return new AlunoRepositorioPostgreSQL;	
	}	
}



echo "<pre>";
$aluno = new Aluno();
$aluno->cpf = '123';
var_dump($aluno);
echo "<hr>";

$repositorio = obterRepositorio('postgresql');
var_dump($repositorio);
$repositorio->adicionar($aluno);
echo "<br>";
$repositorio->recuperar($aluno->cpf);