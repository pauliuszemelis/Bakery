<!DOCTYPE html>
<html>
<head>
	<title>Nauji duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	
	<form method="POST" action="create.php"> 
	<div>Data:</div><input type="date" name="Data">
	<div >Prekė:</div>
		<select name="product">
			<?php
			$products = json_decode(file_get_contents('data/products.json'), true);
			foreach ($products as $p => $prekes) {
				echo '<option value="' . $p .'">' . $prekes .'</option>';
			}
			?>
	</select><br>	
	<div >Vakarykštis likutis:</div><input type="number" name="VL">
	<div >Pagaminta:</div><input type="number" name="PG">
	<div >Parduota:</div>	<input type="number" name="PR">
	<div >Sugadinta:</div><input type="number" name="SG">
	<div >Galutinis likutis:</div><input type="number" name="GL">
	<br><input type="submit" value="Išsaugoti duomenis">
	</form>
	<br/>
	<a href="index.php">Gryžti i pradžią...</a>
</body>
</html>

