<?php 

// namespace Curso;

class Curso
{
	private $nome;
	private $cargaHoraria;
	private $tipo;

	public function __construct($nome,$cargaHoraria,$tipo = 'presencial'){
		$this->nome = $nome;
		$this->cargaHoraria = $cargaHoraria;
		$this->tipo = $tipo;
	}

	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getCargaHoraria(){
		return $this->cargaHoraria;
	}
	public function setCargaHoraria($cargaHoraria){
		$this->cargaHoraria = $cargaHoraria;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
}