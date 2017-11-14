<?php 

// require_once 'Turma/Turma.php';
// require_once 'Aluno/Aluno.php';
// require_once 'Curso/Curso.php';
// require_once 'Matricula/Matricula.php';

function __autoload($class){
	if (file_exists("{$class}/{$class}.php")) {
		require_once "{$class}/{$class}.php";
	}
}