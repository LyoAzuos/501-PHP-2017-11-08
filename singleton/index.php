<?php 

echo "<pre>";
require_once 'autoload.php';

use Escola\Model\Turma\Turma;
use Escola\Model\Aluno\Aluno;
use Escola\Model\Curso\Curso;
use Escola\Model\Matricula\Matricula;
use Escola\Src\Conexao\Conexao;


$con = Conexao::getInstance();

var_dump($con);

