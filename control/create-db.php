<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	require_once(__DIR__ . "/../model/config.php");//require once is to require a file once
	//__DIR__  a escape plan form the model to the database.php

		 	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
		 		."id int(11) NOT NULL AUTO_INCREMENT,"//this query is creating a table for xampp if is successful it will echo out the message below
		 		."title varchar(255) NOT NULL,"
		 		."post text NOT NULL,"
		 		."PRIMARY KEY (id))");




		 if($query){//is this query works then it will echo out this sentence

		 	echo "<p>successfully created the table: posts</p>";
		 }
		 else{
		 	echo "<p>" . $_SESSION["connection"]->error . "</p>";
		 }
































?>

</body>
</html>

