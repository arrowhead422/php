<?php
	//this path strage all the information to your localhost
 	require_once(__DIR__ . "/Database.php");
 	session_start();// session variable are similar to reguer variable



	$path = "/php/";//so this file is a connecter to every file and source 

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	if(!isset($_SESSION["connection"])) {
		$connection = new Database($host, $username, $password, $database);//this database object is going help me query on the database
		$_SESSION["connection"] = $connection;// session work like function but just how we can use it
	}

?>

































