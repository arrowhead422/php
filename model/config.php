<?php
	//this path strage all the information to your localhost
 	require_once(__DIR__ . "/Database.php");
	$path = "/php/";//so this file is a connecter to every file and source 
	


	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";


	$connection = new Database($host, $username, $password, $Database);//this database object is going help me query on the database


?>

































