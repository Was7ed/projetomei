<?php 
	
	define('MYSQL_USER', 'root');
	define('MYSQL_PASS', '');
	define('MYSQL_HOST', 'localhost');
	define('MYSQL_DB', 'projetomei');

	$pdo = new PDO(
	    "mysql:host=" . MYSQL_HOST . 
	    ";dbname=" .MYSQL_DB, //DSN
	    MYSQL_USER, //Username
	    MYSQL_PASS //Password
	);


 ?>