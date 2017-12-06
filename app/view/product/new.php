<!DOCTYPE html>
<html>
<head>
	<title>Naujas produktas</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>

	<form method="POST" action="?view=product&action=create">
        <div >Pavadinimas:</div><input type="text" name="name"><br>
        <div>EAN:</div><input type="number" name="ean">
        <div>Mato vienetas:</div>
        <select name="unit">
            <option value="KG">KG</option>
            <option value="VNT">VNT</option>
        </select><br>
        <div >Svoris:</div><input step="0.001" type="number" name="weight"><br>
        <div >Savikaina:</div>	<input type="number" step="0.001" name="prime_cost"><br>
        <div >Pardavimo kaina:</div><input type="number" step="0.001" name="sale_price"><br>
	<br><input type="submit" value="Išsaugoti duomenis"><br>
	</form><br>

<!--	<a href="index.php">Gryžti i pradžią...</a>-->
</body>
</html>