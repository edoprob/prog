<?php
require 'enviroment.php';

$config = array();

if (ENVIROMENT == 'development') {
	echo "version: development v1.0 <br/>bootstrap used<hr/>";
	define('BASE_URL', 'localhost/prog/');
	$config['db'] = 'teste';
	$config['host'] = 'localhost';
	$config['user'] = 'root';
	$config['pass'] = '';
} else if (ENVIROMENT == 'production') {
	define('BASE_URL', 'https://www.meusite.com.br/');
	$config['db'] = 'test';
	$config['host'] = 'localhost';
	$config['user'] = 'root';
	$config['pass'] = '';
}

 global $db;
/*
 try {
 	$db = new PDO("mysql:dbname=".$config['db'].";host=".$config['host'], $config['user'], $config['pass']);
 } catch (PDOException $e) {
 	echo "error on conection: ".$e->getMessage()."<hr/>";
 	exit;
 }
*/
 
?>