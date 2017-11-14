<?php 

require_once 'autoload.php';

// use Turma\Turma;
// use Aluno\Aluno;
// use Curso\Curso;
// use Matricula\Matricula;

echo "<pre>";

$lucas = new Aluno('Lucas','lucas@lucas');
// var_dump($lucas);
$php = new Curso('PHP',40);
// var_dump($php);
$turma = new Turma($php, 'presencial');
// var_dump($turma);
$mat = new Matricula($lucas,$turma);
// var_dump($mat);

// echo $mat->getTurma()->getCurso()->getNome();

try {
	$mat->setNota1(10.0);	
} catch (Exception $e) {
	echo $e->getMessage();
}
try {
	$mat->setNota2(2.0);	
} catch (Exception $e) {
	echo $e->getMessage();
}

// echo $turma;
echo $mat;
