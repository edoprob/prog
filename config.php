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
	define('BASE_URL', 'http://edoprog.epizy.com/');

	$config['host'] = 'ricky.heliohost.org';
	$config['db'] = 'edoprob_edoprog';
	$config['user'] = 'edoprob_user';
	$config['pass'] = 'minhasenha31';
}

echo "";
global $_info;
$_info = array();
$_info['version'] = 'version v1.0 beta';
$_info['bootstrap'] = 'bootstrap used';

global $db;

try {
 	$db = new PDO("mysql:dbname=".$config['db'].";host=".$config['host'], $config['user'], $config['pass']);
 	$_info['database'] =  'database ON';
} catch (PDOException $e) {
 	echo "error on conection: ".$e->getMessage();
 	$_info['database'] = 'database OFF (try again later)';
 	#exit;
}

 
?>