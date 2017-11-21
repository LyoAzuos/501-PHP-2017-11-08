<?php 

echo "<pre>";
require_once 'conexao.php';

// nome    |    tipo    | carga_horaria |       requisitos 

$nome = "C#";
$tipo = "Presencial";
$carga_horaria = 80;
$requisitos = "Vontade de aprender";

$sql = <<< SQL
INSERT INTO 
	tb_cursos
		(nome,tipo,carga_horaria,requisitos) 
VALUES 
	('{$nome}','{$tipo}','{$carga_horaria}','{$requisitos}')
SQL;

var_dump($sql);

$result = $con->exec($sql);

var_dump($result);