<?php 

echo "<pre>";
require_once 'conexao.php';

$nome = "Banco de Dados";
$tipo = "Presencial";
$carga_horaria = 40;
$requisitos = "Vontade de aprender";

$sql = <<< SQL
INSERT INTO 
	tb_cursos
		(nome,tipo,carga_horaria,requisitos) 
VALUES 
	(:nome,:tipo,:carga_horaria,:requisitos)
SQL;

$stmt = $con->prepare($sql);

var_dump($stmt);

$values = [
	':nome' => $nome,
	':tipo' => $tipo,
	':carga_horaria' => $carga_horaria,
	':requisitos' => $requisitos,
];

$result = $stmt->execute($values);

var_dump($result);