<?php


define('dbhost', 'localhost');
define('dbuser', 'root');
define('dbpass', '');
define('dbname', 'lazy_boss');

try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex) {
	echo $ex->getMessage();
}

?>
