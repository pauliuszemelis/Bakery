<!DOCTYPE html>
<html>
<head>
	<title>Nauji duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	
	<form method="POST" action="./create.php"> 
	<span >Data:</span><input type="date" name="Data"><br>
	<span >Prekė:</span>
		<select name="product">
		<option value="1">Bandelė "Aguonėlė"</option>
		<option value="2">Duona "Balta"</option>
		<option value="3">Duona "Ruginė"</option>
		<option value="4">Duona "Juoda"</option>
		<option value="5">Duona "Juoda"</option>
	</select><br>	
	<span >Vakarykštis likutis:</span><input type="number" name="VL"><br>
	<span >Pagaminta:</span><input type="number" name="PG"><br>
	<span >Parduota:</span>	<input type="number" name="PR"><br>
	<span >Sugadinta:</span><input type="number" name="SG"><br>
	<span >Galutinis likutis:</span><input type="number" name="GL"><br>
	<input type="submit" value="Išsaugoti duomenis">
</form>
	
	</form>
</body>
</html>