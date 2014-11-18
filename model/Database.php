<?php//  this Class are using database for representing as objects, as an object it makes easier to keep database together simpler and easier to understand
	class Database {
		private	$connection;// went we access our variable to private variable it make the class only perform only at Database
		private $host;
		private $username;
		private $password;
		private $Database;// we want to hold the $host $username $password and $Database simple 
	
		public function __construct($host, $username, $password, $database){//these variable is called local variable
			$this->host = $host;// the variable here are connected to the gloal variable
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
		public function openC onnection(){
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);// this function turn the private variable to public variable

			if($this->$connection->connect_error){//
				die("<p>Error:". $connection->connect_error . "</p>");// the <p> is a percaution for echo the echo out

	}

		}

		public function closeConnection(){// isset are a function that tells you whether or not that i have variable in my filder
			if(isset($this->connection)) {
				$this->connection->close();


			}


		}

		public function query($string){



		}
	}	


 




























$this























