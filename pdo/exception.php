<?php 

echo "<pre>";
require_once 'conexao.php';

try {

	$con->BeginTransaction();

	$sql = "INSERT INTO tb_alunos ( nome , email , senha , cpf , rg ) VALUES ('Teste789','teste789@teste', '123','789','123')";
	$result = $con->exec($sql);

	print_r($result);

	$sql = "INSERT INTO tb_alunos ( nome , email , senha , cpf , rg ) VALUES ('Teste123','teste123@teste', '123','123','123')";
	$result = $con->exec($sql);

	print_r($result);

	$sql = "INSERT INTO tb_alunos ( nome , email , senha , cpf , rg ) VALUES ('Teste456','teste456@teste', '123','456','123')";
	$result = $con->exec($sql);

	print_r($result);

	$con->commit();

} catch (PDOException $e) {
	$con->rollback();
	echo "Erro: " . $e->getMessage();
}

