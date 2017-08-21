<?php
$server = "localhost";
$username = $_POST["usr"];		//PROBLEM
$password = $_POST["pass"];		//PROBLEM

$conn = new mysqli($server, $username, $password);

if ($conn->connect_error) {
	die("fail" . $conn->connect_error);
}

include 'dab.php';
?>	
