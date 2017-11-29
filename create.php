<?php

$new_data = ($_POST);
$required_fields = ["date", "product_id", "initial", "produced", "sold", "damaged", "closed"];
$validData = true;

	foreach ($required_fields as $value) {
		if(!isset($new_data[$value]) || empty($new_data[$value] )){
			$validData = false;
			Echo "Laukas \"$value\" neužpildytas, duomenys nesuvesti...<br><br>";
		}
	}
	if(!$validData){
		echo '<a href="index.php">Gryžti į pradžią...</a>';
		return;
	}

	@include_once('./app/database.php');

	$query = db_insertQuery ('bakery_products_history', $new_data, true);

	$result = db_query($query);

	print_r($result);



	/*"INSERT INTO `bakery_products_history` (
	`date`, 
	`product_id`, 
	`initial`, 
	`produced`, 
	`sold`, 
	`damaged`, 
	`closed`) VALUES (".
	$new_data['date'].",".
	$new_data['product_id'].",".
	$new_data['initial'].",".
	$new_data['produced'].",".
	$new_data['sold'].",".
	$new_data['damaged'].",".
	$new_data['closed'].")";

	die ($query);*/

	$result = db_query($query);

	print_r($new_data);
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