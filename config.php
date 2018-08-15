<?php
require 'enviroment.php';

$config = array();

if (ENVIROMENT == 'development') {
	echo "version: v1.0 beta <br/>bootstrap used <br/>";
	define('BASE_URL', 'http://localhost/prog/');
	$config['db'] = 'sql10251812';
	$config['host'] = 'sql10.freemysqlhosting.net';
	$config['user'] = 'sql10251812';
	$config['pass'] = 'zWyiH65bdp';
} else if (ENVIROMENT == 'production') {
	define('BASE_URL', 'https://www.meusite.com.br/');
	$config['db'] = 'test';
	$config['host'] = 'localhost';
	$config['user'] = 'root';
	$config['pass'] = '';
}

 global $db;

 try {
 	$db = new PDO("mysql:dbname=".$config['db'].";host=".$config['host'], $config['user'], $config['pass']);
 	echo "database on <hr>";
 } catch (PDOException $e) {
 	echo "error on conection: ".$e->getMessage()."<br/>database off <hr/>";
 	exit;
 }

 
?>