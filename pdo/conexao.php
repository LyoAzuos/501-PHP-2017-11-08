<?php 

// DSN - Data Source Name
// User
// Senha
// sudo apt-get install php7.0-pgsql
// sudo service apache2 restart

$user 	= "linux";
$pass 	= "123";
$host 	= "localhost";
$dbname = "dexterescola";
$dsn  	= "pgsql: host={$host}; dbname={$dbname}";


$con = new PDO($dsn, $user,$pass);

// var_dump($con);