<?php

$new_data = ($_POST);

var_dump($new_data);

$existing_data = json_decode(file_get_contents('data/bakery-data.json'));

$existing_data = objectToArray($existing_data);

var_dump($existing_data);

//((array)$existing_data);


function objectToArray (stdClass $obj) : array {
	
	$obj = (array) $obj;

	foreach ($obj as $key => &$value) {
		
		if(gettype($value) == 'object') {

			$value = objectToArray($value);
		}

		//echo gettype($value);

	}

	return $obj;

}
