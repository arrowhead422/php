<?php

	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password, $database); // this code connect the database to the create-post.php
	//it create a new mysqli

	//it recevie information from the post and the title from the the filter input and it also sercer the blogs informations
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST,"post", FILTER_SANITIZE_STRING);

	// the title and the post are connect to the form and the post which when it echo it echos out the "title" and "post"
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post' ");//this query that insers post that set the variable to $title and $post 

	if ($query) {
		
		echo "<p>Successfuly inserted post: $title</p>";// if the query is true then it will echo out this echo
	}

	else {

		echo "<p>$connection->error</p>";// if is not true then it will print out this echo

	}



	$connection->close();























