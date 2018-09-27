<?php
require 'enviroment.php';

$config = array();

if (ENVIROMENT == 'development') {
	define('BASE_URL', 'http://localhost/prog/');

	$config['host'] = 'ricky.heliohost.org';
	$config['db'] = 'edoprob_edoprog';	
	$config['user'] = 'edoprob_user';
	$config['pass'] = 'minhasenha31';

} else if (ENVIROMENT == 'production') {
	define('BASE_URL', 'http://www.allprojects.epizy.com/');

	$config['host'] = 'ricky.heliohost.org';
	$config['db'] = 'edoprob_edoprog';
	$config['user'] = 'edoprob_user';
	$config['pass'] = 'minhasenha31';
}

echo "version: v1.0 beta <br/>bootstrap used <br/>";
global $db;

try {
 	$db = new PDO("mysql:dbname=".$config['db'].";host=".$config['host'], $config['user'], $config['pass']);
 	echo "Database ON <hr>";
} catch (PDOException $e) {
 	echo "error on conection: ".$e->getMessage()."<br/>Database OFF</br>Try again later<hr/>";
 	#exit;
}

 
?>