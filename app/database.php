<?php

function db_connect () {

$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'pz_bakery';

$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Not so much success conecting...");
	}

$conn->set_charset("utf8mb4");
return $conn;
}

function db_query(string $query) {
	$conn = db_connect();
	$result = $conn->query ($query);
	if($result){
		$conn->close();
		return $result;
	}
	print_r($conn);
	$conn->close();
	die();	
}

function db_insertQuery (string $tableName, array $data, bool $uuid = false) : string {

	if($uuid)
		$data['id'] = uniqid();

	$keys = $values = '';

	foreach ($data as $key => $value) {
	
		$keys .="`$key`, ";
		$values .="'$value', ";

	}

	$keys = rtrim($keys,", ");
	$values = rtrim($values,", ");

	$query = "INSERT INTO `$tableName` ($keys) VALUES ($values)";

	return($query);

}


