<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "fitguide";
	
	$conn = mysqli_connect($servername, $username, $password, $db_name);
	if (!$conn)
		die("Non connection: " . mysqli_connect_error());	
?>