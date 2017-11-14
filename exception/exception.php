<?php 

echo "<pre>";

class DivisaoPorZeroException extends Exception{}
class ValorInfinitoException extends Exception{}

function dividir($a,$b){

	if ($a === 0) {
		throw new ValorInfinitoException();		
	}
	if ($b === 0) {
		throw new DivisaoPorZeroException();		
	}
}

try {

	dividir(0,0);
	
} catch (ValorInfinitoException $e) {
	echo "ValorInfinitoException";
	echo "<br>";
	echo $e->getTraceAsString();
} catch (DivisaoPorZeroException $e) {
	echo "DivisaoPorZeroException";
	echo "<br>";
	echo $e->getTraceAsString();
}