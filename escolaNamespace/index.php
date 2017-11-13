<?php 

require_once 'Turma/Turma.php';
require_once 'Aluno/Aluno.php';
require_once 'Curso/Curso.php';
require_once 'Matricula/Matricula.php';

use Escola\Turma\Turma;
use Escola\Aluno\Aluno;
use Escola\Curso\Curso;
use Escola\Matricula\Matricula;

echo "<pre>";

$lucas = new Aluno('Lucas','lucas@lucas');
// var_dump($lucas);
$php = new Curso('PHP',40);
// var_dump($php);
$turma = new Turma($php, 'presencial');
// var_dump($turma);
$mat = new Matricula($lucas,$turma);
// var_dump($mat);

echo $mat->getTurma()->getCurso()->getNome();