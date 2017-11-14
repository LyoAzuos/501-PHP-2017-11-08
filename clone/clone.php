<?php 

class Pessoa
{
	public $nome;
}

echo "<pre>";
$joao = new Pessoa();
$joao->nome = 'João';
var_dump($joao);
$jose = $joao;
$jose->nome = 'José';
var_dump($jose);
var_dump($joao);
echo "<hr>";
$ana = new Pessoa();
$ana->nome = "Ana";
$maria = clone $ana;
var_dump($ana);
var_dump($maria);
$maria->nome = 'Maria';
var_dump($ana);
var_dump($maria);