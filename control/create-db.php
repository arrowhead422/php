<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host,$username,$password);

	if($connection->connect_error){
		die("Error:". $connection->connect_error);

	}//else{

		//echo "success:  ". $connection->host_info;
	//}
		$exists = $connection->select_db($database);//$exists

		if(!$exists){//the ! is invering the varible to display the echo
		 $query =  $connection->query('CREATE DATABASE $database');// $query is like a question
			
		 if($query){
		 	echo "successfully created database". $database;
		 }


		}

	$connection->close();





?>

</body>
</html>

