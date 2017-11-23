<?php 

require_once 'autoload.php';

use Model\Periodo\Periodo;

// $noturnoNovo = new Periodo(null,"Teste2");
// $noturnoNovo->save();

echo "<pre>";
$periodo = Periodo::find(1);
print_r($periodo->getDescricao());
echo "<hr>";

foreach (Periodo::all() as $periodo) {
	print_r($periodo->getDescricao());
	echo "<br>";
}
