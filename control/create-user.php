<?php
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); //this variable are able to create a email that can be store it in our php
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);//this variable username will connect to the register-form.php and you will have to type out your own username
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);


	echo $email . " - " . $username . " - ". $password;