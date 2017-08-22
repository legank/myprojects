<?php
$server = "localhost";
$username = $_POST["usr"];		
$password = $_POST["pass"];
$db = $_POST["db"];
$dbname = $_POST["dbname"];
$conn = new mysqli($server, $username, $password);

if ($conn->connect_error) {
	die("fail" . $conn->connect_error);
} else if (empty($db)) {
	include 'dab.php';
} else if ($db == 'create') {
	if ($conn->query("CREATE DATABASE " . $dbname) == true) {
		echo "good";
	} else {
		echo "bad";
	}
} else if ($db == 'existing') {
	//$conn = new mysqli($server, $username, $password, $dbname);
	$conn->select_db($dbname);
	if ($result = $conn->query("SELECT DATABASE()")) {
		$row = $result->fetch_row();
		echo "Database is " . $row[0];
	} else {
		echo "Does not exist.";
	}
}

?>	
