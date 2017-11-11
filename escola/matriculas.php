<?php 

class Aluno
{
	private $nome;
	private $email;

	public function __construct($nome,$email){
		$this->nome = $nome;
		$this->email = $email;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}
}

class Turma
{
	private $curso;
	private $periodo;

	public function __construct($curso,$periodo){
		$this->curso = $curso;
		$this->periodo = $periodo;
	}

	public function getCurso(){
		return $this->curso;
	}

	public function setCurso($curso){
		$this->curso = $curso;
	}

	public function getPeriodo(){
		return $this->periodo;
	}

	public function setPeriodo($periodo){
		$this->periodo = $email;
	}
}

class Matricula
{
	private $aluno;
	private $turma;
	private $nota1;
	private $nota2;

	public function __construct(Aluno $aluno,Turma $turma){
		$this->aluno = $aluno;
		$this->turma = $turma;
	}
	public function getAluno(){
		return $this->aluno;
	}
	public function setAluno(Aluno $aluno){
		$this->aluno = $aluno;
	}
	public function getTurma(){
		return $this->turma;
	}
	public function setTurma(Turma $turma){
		$this->turma = $turma;
	}
}

$aluno = new Aluno('Lucas','lucas@lucas.com');
$turma = new Turma('501','Noturno');
$matricula = new Matricula($aluno,$turma);

echo $matricula->getAluno()->getNome();
echo "<br>";
echo $matricula->getTurma()->getCurso();