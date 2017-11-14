<?php 

// namespace Turma;

// use Curso\Curso;

class Turma
{
	private $curso;
	private $periodo;

	public function __construct(Curso $curso,$periodo){
		$this->curso = $curso;
		$this->periodo = $periodo;
	}

	public function getCurso(){
		return $this->curso;
	}

	public function setCurso(Curso $curso){
		$this->curso = $curso;
	}

	public function getPeriodo(){
		return $this->periodo;
	}

	public function setPeriodo($periodo){
		$this->periodo = $email;
	}
}