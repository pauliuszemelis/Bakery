<!DOCTYPE html>
<html>
<head>
	<title>Nauji duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	
	<form method="POST" action="create.php"> 
	<div>Data:</div><input type="date" name="date">
	<div >Prekė:</div>
		<select name="product_id">
			<?php
			@include_once('./app/database.php');

			$query = "SELECT `id`, `name` FROM `bakery_products` WHERE `deleted_at` IS NULL ORDER BY `name` ASC ";

$result = db_query($query);

foreach ($result as $key => $value) {
			
			

			echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
			}

			?>
	</select><br>	
	<div >Vakarykštis likutis:</div><input type="number" name="initial">
	<div >Pagaminta:</div><input type="number" name="produced">
	<div >Parduota:</div>	<input type="number" name="sold">
	<div >Sugadinta:</div><input type="number" name="damaged">
	<div >Galutinis likutis:</div><input type="number" name="closed">
	<br><input type="submit" value="Išsaugoti duomenis">
	</form>
	<br/>
	<a href="index.php">Gryžti i pradžią...</a>
</body>
</html>

