<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="helpdb";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

	if ($conn->connect_error) {
	  die('Could not connect to the database!' . $conn->connect_error);
	}
?>