<?php
	$servername = "localhost";
	$dbname = "u139594422_sitemae";
	$username = "u139594422_omniavincit";
	$password = "Np270e5g!";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
	}

?>