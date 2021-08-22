<?php
	$dns = "mysql:host=172.19.0.2;dbname=Chat";	
	$user = "root";
	$password = "password1234";

	try{
		$Connection = new PDO($dns,$user,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
		$Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		
		echo  "Connection established ";
	}catch(Exception $e){
		die("Failed to establish connection to MYSQL: " .$e->getMessage());
	}

?>