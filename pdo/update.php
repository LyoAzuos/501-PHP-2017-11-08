<?php 

echo "<pre>";
require_once 'conexao.php';

// nome    |    tipo    | carga_horaria |       requisitos 

$nome = "C#";
$tipo = "Presencial";
$carga_horaria = 120;
$requisitos = "Vontade de aprender";

$sql = <<< SQL
UPDATE tb_cursos
SET 
	nome = '{$nome}',
	tipo = '{$tipo}',
	carga_horaria = '{$carga_horaria}',
	requisitos = '{$requisitos}'
WHERE 
	id = '9';
SQL;

var_dump($sql);

$result = $con->exec($sql);

var_dump($result);