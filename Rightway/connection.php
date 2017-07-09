<?php

	//ini_set('display_errors', 1); 
	//error_reporting(E_ALL);

	function ConnectToDatabase (){

		$servername = "localhost";
		$username = "root";
		$password = "qsc12bjo09";
		$database = "rightway";

		try {

	    $conn = new PDO("mysql:host=$servername;port=3306;dbname=$database", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    //Uncomment the next line to notify the user that the connection was done succesfully.
	    //echo "Successful Connection! <br> Connected to Server: $servername <br>"; 
	    
		} catch(PDOException $e) {

			//Uncomment the next line to notify the user that the connection failed.
	    	//echo "Connection failed! <br> Error Code: " . $e->getMessage();
		
		}

		return $conn;
	}

?>