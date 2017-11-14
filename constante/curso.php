<?php 

class Curso
{
	const PHP 	= 500;
	const JAVA 	= 600;
}

class Turma
{
	const PHP = 'teste';
	const JAVA = 'teste2';
}

class Pessoa
{
	const ENSINO_MEDIO = 1;
	const ENSINO_SUPERIOR = 2;
}

var_dump(Turma::PHP);
var_dump(Curso::PHP);
var_dump(Pessoa::ENSINO_SUPERIOR);