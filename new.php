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
		<select name=product>
		<option value=1>Bandelė "Aguonėlė"</option>
		<option value=2>Duona "Balta"</option>
		<option value=3>Duona "Ruginė"</option>
		<option value=4>Duona "Juoda"</option>
		<option value=5>Duona "Juoda"</option>
	</select><br>	
	<div >Vakarykštis likutis:</div><input type="number" name="VL">
	<div >Pagaminta:</div><input type="number" name="PG">
	<div >Parduota:</div>	<input type="number" name="PR">
	<div >Sugadinta:</div><input type="number" name="SG">
	<div >Galutinis likutis:</div><input type="number" name="GL">
	<br><input type="submit" value="Išsaugoti duomenis">
</form>
	
	</form>
</body>
</html>