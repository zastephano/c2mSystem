<?php 


try {
	define('MY_HOST','localhost');
            define('MY_USER','ctwomsys_c2msys');
            define('MY_PWD','kSype37k2');
            define('MY_DBNAME','ctwomsys_c2m');
            global $db;
            $db = new PDO('mysql:host='.MY_HOST.';dbname='.MY_DBNAME,MY_USER,MY_PWD,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
		
 ?>