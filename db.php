<?php	$servername = "mysql";	$username = "user";	$password = "password";	$database = "secdb";
	// Create connection	$conn = new mysqli($servername, $username, $password, $database);
	// Check connection	if ($conn->connect_error) {		die("Connection failed: " . $conn->connect_error);	} ?>	