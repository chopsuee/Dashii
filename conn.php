<?php
	$conn = new mysqli('localhost', 'root', '', 'dashdb');
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>