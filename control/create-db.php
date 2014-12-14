<?php
	require_once(__DIR__ . "/../model/config.php");//require once is to require a file once
	//__DIR__  a escape plan form the model to the database.php

		 	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
		 		."id int(11) NOT NULL AUTO_INCREMENT,"//this query is creating a table for xampp if is successful it will echo out the message below
		 		."title varchar(255) NOT NULL,"
		 		."post text NOT NULL,"
		 		."DateTime datetime NOT NULL,"
		 		."PRIMARY KEY (id))");




		 if($query){//is this query works then it will echo out this sentence

		 	echo "<p>successfully created the table: posts</p>";
		 }
		 else{
		 	echo "<p>" . $_SESSION["connection"]->error . "</p>";
		 }

		 $query = $_SESSION["connection"]->query("CREATE TABLE users (" //this query here are attach to our database connection with store in session varible
		 . "id int(11) NOT NULL AUTO_INCREMENT,"						 //id,username,email and password are store to the database that are connected to the SESSION
		 . "username varchar(30) NOt NULL," 
		 . "email varchar (50) NOT NULL,"
		 . "password char(128) NOT NULL,"
		 . "salt char(128) NOT NULL,"
		 . "PRIMARY KEY (id))");


if($query){
	echo "<p>Successfully created table: users</p>";


}


else {
	echo "<p>" . $_SESSION["connection"]->error ."</p>" ;
}































