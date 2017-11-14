<?php 

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

	public function __toString(){
		return <<< MSG
Aluno: {$this->getAluno()->getNome()}
Curso: {$this->getTurma()->getCurso()->getNome()}
Nota1: {$this->getNota1()}
Nota2: {$this->getNota2()}
MSG;
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

	public function setNota1($nota1){
		if (!is_float($nota1)) {
			throw new Exception('A nota deve ser um número');			
		}
		$this->nota1 = $nota1;
	}
	public function getNota1(){
		return $this->nota1;
	}

	public function setNota2($nota2){
		if (!is_float($nota2)) {
			throw new Exception('A nota deve ser um número');			
		}
		$this->nota2 = $nota2;
	}

	public function getNota2(){
		return $this->nota2;
	}

}