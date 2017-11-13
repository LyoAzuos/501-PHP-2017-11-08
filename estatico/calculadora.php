<?php 

class Calculadora
{
	public static $a;
	public static $b;

	public static function somar(){
		return self::$a + self::$b;
	}

	public static function subtrair(){
		return self::$a - self::$b;
	}

	public static function multiplicar(){
		return self::$a * self::$b;
	}

	public static function dividir(){
		return self::$a / self::$b;
	}
}
echo "<pre>";
Calculadora::$a = 3;
Calculadora::$b = 3;
echo Calculadora::somar();
echo '<br>';
echo Calculadora::subtrair();
echo '<br>';
echo Calculadora::multiplicar();
echo '<br>';
echo Calculadora::dividir();