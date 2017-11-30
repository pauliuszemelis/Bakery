<?php

$new_data = ($_POST);
$required_fields = ["date", "product_id", "initial", "produced", "sold", "damaged", "closed"];
$validData = true;

	foreach ($required_fields as $value) {
		if(!isset($new_data[$value]) || strlen($new_data[$value]) < 1 || ($new_data[$value] < 0 )) {
			$validData = false;
			Echo "Laukas \"$value\" neužpildytas, arba užpildytas neteisingai. Duomenys nesuvesti...<br><br>";
		}
	}
	if(!$validData){
		echo '<a href="index.php">Gryžti į pradžią...</a>';
		return;
	}

	@include_once('./app/database.php');

	$query = db_insertQuery ('bakery_products_history', $new_data, true);

	$result = db_query($query);
	echo "Produktas suvestas sėkmingai.<br>";

	//print_r($result);

	
/*$existing_data = json_decode(file_get_contents('data/bakery-data.json'), true);

//$existing_data = objectToArray($existing_data);

updateDate($existing_data, $new_data);

file_put_contents('data/bakery-data.json', json_encode($existing_data));

/*
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
*/
/*function updateDate (&$existing_data, $new_data) {

	if(isset($existing_data[$new_data["Data"]])) {
				
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
*/
echo '<a href="index.php">Gryžti į pradžią...</a>';

/*
"Paulius Žemelis" => ["c", "a", "a", "a", "b", "a", "d", "d", "b", "c", "b", "a", "a", "c", "a", "c", "a", "b", "c", "b", "a", "a", "a", "c", "d", "a"];

*/