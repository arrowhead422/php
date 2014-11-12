<?php

	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password, $database); // this code connect the database to the create-post.php

	//it recevie information from the post and the title from the the filter input and it also sercer the blogs informations
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST,"post", FILTER_SANITIZE_STRING);

	// the title and the post are connect to the form and the post which when it echo it echos out the "title" and "post"
	echo "<p>Title: $title</p>";
	echo "<p>Post: $post";

	$connection->close();