<?php

@include_once('database.php');

//Getting products history
$query = 'SELECT * FROM `bakery_products_history` ORDER BY `date`';
$productHistory = db_query($query);

//Getting products
$query = 'SELECT * FROM `bakery_products`';
$products = db_query($query);

include_once('view/data-table.php');