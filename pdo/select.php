<?php 

echo "<pre>";
require_once 'conexao.php';

$sql = "SELECT * FROM tb_cursos ORDER BY id";

$result = $con->query($sql);

// var_dump($result->fetchALL(PDO::FETCH_ASSOC));

foreach ($result->fetchALL(PDO::FETCH_ASSOC) as $curso) {
		print_r($curso);
		echo "<hr>";
}