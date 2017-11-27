<?php

function db_connect () {

$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'pz_bakery';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("No so much Success");
}
$conn->set_charset("utf8mb4");
return $conn;
}

function db_query(string $query) {
	$conn = db_connect();
	$result = $conn->query ($query);
	$conn->close();
	return $result;
}


