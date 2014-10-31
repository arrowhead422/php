<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	require_once(__DIR__ . "/../model/database.php");//require once is to require a file once
	//__DIR__  a escape plan form the model to the database.php

	$connection = new mysqli($host, $username, $password);//it conects the database variable

	if($connection->connect_error){//
		die("<p>Error:". $connection->connect_error . "</p>");// the <p> is a percaution for echo the echo out

	}//else{

		//echo "success:  ". $connection->host_info;
	//}
		$exists = $connection->select_db($database);//$exists

		if(!$exists){//the ! is invering the varible to display the echo
		 $query =  $connection->query("CREATE DATABASE $database");// $query is like a question
		 if($query){
		 	echo "<p>successfully created database:". $database . "</p>";
		 }


		 }


		 else{

		 	echo "Database already exists.";//if is not exist it echo this out
		 }

		 	$query = $connection->query("CREATE TABLE posts ("
		 		."id int(11) NOT NULL AUTO_INCREMENT,"//this query is creating a table for xampp if is successful it will echo out the message below
		 		."title varchar(255) NOT NULL,"
		 		."post text NOT NULL,"
		 		."PRIMARY KEY (id))");




		 if($query){//is this query works then it will echo out this sentence

		 	echo "<p>successfully created the table: posts</p>";
		 }
		 else{
		 	echo "<p>$connection->error</p>";
		 }

	$connection->close();





?>

</body>
</html>

