<?php

$new_data = ($_POST);


//todo
//patikrinti ar visi parametrai pateikti


$existing_data = json_decode(file_get_contents('data/bakery-data.json'));

$existing_data = objectToArray($existing_data);

updateDate($existing_data, $new_data);

file_put_contents('data/bakery-data.json', json_encode($existing_data));


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

function updateDate (&$existing_data, $new_data) {

	if(isset($existing_data[$new_data["Data"]])) {
		echo "Tokia diena egzistuoja<br>\r\n";
		
		if(isset($existing_data[$new_data["Data"]][$new_data["product"]])) {
			echo "Toks produktas jau yra suvestas.<br>\r\n";
		}
		
		else {
			
		$existing_data = createProduct($existing_data, $new_data);	
		echo "Produktas suvestas sėkmingai.<br>\r\n";
		}	
	}

	else {

		$existing_data[$new_data["Data"]] = [];
		$existing_data = createProduct($existing_data, $new_data);

		echo "Nauja diena ir produktas suvesti sėkmingai.<br>\r\n";
	}

}

function createProduct ($existing_data, $new_data) {
			$existing_data[$new_data["Data"]][$new_data["product"]] = [
			(int) $new_data["VL"],
			(int) $new_data["PG"],
			(int) $new_data["PR"],
			(int) $new_data["SG"],
			(int) $new_data["GL"],
			];
		return $existing_data;
}



/*
"Paulius Žemelis" => ["c", "a", "a", "a", "b", "a", "d", "d", "b", "c", "b", "a", "a", "c", "a", "c", "a", "b", "c", "b", "a", "a", "a", "c", "d", "a"];

*/