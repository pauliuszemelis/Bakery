<?php

$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'pz_bakery';

function db_connect () {
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	
	die("No so much Success");
}
return $conn;

}

function db_query(string $query) {

	$conn = db_connect();
	$result = $conn->query ($query);
	$conn->close();
	return $result;
}

/*$result = ($conn->query ('SHOW TABLES'));
foreach ($result as $key => $value) {
	print_r($key);
	print_r($value);
}

mysqli_close($conn);*/