<?php

$new_data = ($_POST);


$existing_data = json_decode(file_get_contents('data/bakery-data.json'));

$existing_data = objectToArray($existing_data);

updateDate($existing_data, $new_data);
//((array)$existing_data);


function objectToArray (stdClass $obj) : array {
	
	$obj = (array) $obj;

	foreach ($obj as $key => &$value) {
		
		if(gettype($value) == "object") {

			$value = objectToArray($value);
		}

		//echo gettype($value);

	}

	return $obj;
	
}
//var_dump($existing_data);
//var_dump($new_data);
//print_r($existing_data);
//print_r($new_data);


function updateDate (&$existing_data, $new_data) {

	if(isset($existing_data[$new_data["Data"]])) {
		echo "Tokia diena egzistuoja<br>\r\n";
		
		if(isset($existing_data[$new_data["Data"]][$new_data["product"]])) {
			echo "Toks produktas jau yra suvestas.<br>\r\n";
		}
		
		else {
			echo "Produktas suvestas sėkmingai.<br>\r\n";
			//print_r ($existing_data[$new_data["Data"]]["1"]);
		}	
	}

	else {

		$existing_data[$new_data["Data"]] = [];
		$existing_data[$new_data["Data"]][$new_data["product"]] = [
			$new_data["VL"],
			$new_data["PG"],
			$new_data["PR"],
			$new_data["SG"],
			$new_data["GL"],
			];

		echo "Nauja diena ir produktas suvesti sėkmingai.<br>\r\n";
	}

}



/*
"Paulius Žemelis" => ["c", "a", "a", "a", "b", "a", "d", "d", "b", "c", "b", "a", "a", "c", "a", "c", "a", "b", "c", "b", "a", "a", "a", "c", "d", "a"];

*/