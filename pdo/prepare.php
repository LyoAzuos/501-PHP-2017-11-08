<?php 

echo "<pre>";
require_once 'conexao.php';

$nome = "C++";
$tipo = "Presencial";
$carga_horaria = 80;
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

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":tipo", $tipo);
$stmt->bindParam(":carga_horaria", $carga_horaria);
$stmt->bindParam(":requisitos", $requisitos);

$result = $stmt->execute();

var_dump($result);