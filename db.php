<?php	$servername = "mysql://mysql:3306/";	$username = "secdb_user1";	$password = "security";	$database = "secdb";
	// Create connection	$conn = new mysqli($servername, $username, $password, $database);
	// Check connection	if ($conn->connect_error) {		die("Connection failed: " . $conn->connect_error);	} ?>	