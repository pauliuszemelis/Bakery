<!DOCTYPE html>
<html>
<head>
	<title>Naujas produktas</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	
	<form method="POST" action="create.php"> 
	<div>Data:</div><input type="date" name="date">
	<div >Prekė:</div>
		<select name="product_id">

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

