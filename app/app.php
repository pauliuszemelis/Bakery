<?php


@include_once('database.php');

$query = 'SELECT * FROM `bakery_products_history` ORDER BY `date`';
$productHistory = db_query($query);

foreach ($productHistory as $key => $value) {

print_r($value);

}
///////////////

$query = 'SELECT * FROM `bakery_products`';
$products = db_query($query);

foreach ($products as $key => $value) {

print_r($value);

}




/*$data = json_decode(file_get_contents('data/bakery-data.json'), true);
*/
include_once('view/data-table.php');