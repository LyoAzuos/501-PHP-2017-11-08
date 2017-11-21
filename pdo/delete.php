<?php 

echo "<pre>";
require_once 'conexao.php';

$sql = <<< SQL
DELETE FROM tb_cursos
WHERE 
	id = '9';
SQL;

var_dump($sql);

$result = $con->exec($sql);

var_dump($result);