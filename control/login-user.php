<?php
	// this file look really simlier to create-user.php
	require_once(__DIR__ . "/../model/config.php");

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING); // the username have to be the same exact like login-form.php
	$password = filter_input (INPUT_POST, "password",  FILTER_SANITIZE_STRING); // same here in the password, the varible have to be simlier to the login-form.php

	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username' "); // the query here select salt, password from the user where the username is the username that was sent to the post

	if($query->num_rows == 1) {  // this query define if the username and password is correct then it will let the user pass.
		$row = $query->fetch_array();


		if($row["password"] === crypt ($password,  $row["salt"])) {
			

			$_SESSION["authenticated"] = true;
			echo "<p> Login Successful ! </p>";
		}

		else {
			echo "<p>Invalid username and password </p>";
		}

	}

	else {
		echo "<p>Invalid username and password</p>";
	}








