<!DOCTYPE html>
<html>
<head>
	<title>Bakery Online</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>


	<a href="./new.php">Įvesti naujos dienos duomenis</a>
	<table id="hand-made">
		<thead>
			<tr>
				<th rowspan="2">Pavadinimas</th>
				<th colspan="5">2017-11-09</th>
				<th colspan="5">2017-11-10</th>
			</tr>	
			<tr>
				<th>VL</th> <!-- Vakar dienos likutis -->
				<th>PG</th>	<!-- Pagaminta -->
				<th>PR</th>	<!-- Parduota -->	
				<th>SG</th>	<!-- Sugadinta -->	
				<th>GL</th>	<!-- Galutinis likutis -->
				<th>VL</th> <!-- Vakar dienos likutis -->
				<th>PG</th>	<!-- Pagaminta -->
				<th>PR</th>	<!-- Parduota -->	
				<th>SG</th>	<!-- Sugadinta -->	
				<th>GL</th>	<!-- Galutinis likutis -->
			</tr>	
		</thead>
		<tbody class="bodis">
			<tr>
				<td align="left"><b>Bandelė "Aguonėlė"</b></td>
				<td>5</td>
				<td>25</td>
				<td>20</td>
				<td>5</td>
				<td>5</td>
				<td>5</td>
				<td>25</td>
				<td>20</td>
				<td>5</td>
				<td>5</td>
			</tr>
			<tr>
				<td align="left"><b>Duona "Balta"</b></td>
				<td>3</td>
				<td>27</td>
				<td>15</td>
				<td>10</td>
				<td>5</td>
				<td>3</td>
				<td>27</td>
				<td>15</td>
				<td>10</td>
				<td>5</td>
			</tr>
			<tr>
				<td align="left"><b>Duona "Juoda"</b></td>
				<td>4</td>
				<td>24</td>
				<td>27</td>
				<td>0</td>
				<td>1</td>
				<td>4</td>
				<td>24</td>
				<td>27</td>
				<td>0</td>
				<td>1</td>
			</tr>
			<tr>
				<td align="left"><b>Duona "Ruginė"</b></td>
				<td>6</td>
				<td>24</td>
				<td>25</td>
				<td>2</td>
				<td>3</td>
				<td>6</td>
				<td>24</td>
				<td>25</td>
				<td>2</td>
				<td>3</td>
			</tr>
			<tr>
				<td align="left"><b>Bandelė "Persikas"</b></td>
				<td>7</td>
				<td>25</td>
				<td>20</td>
				<td>5</td>
				<td>7</td>
				<td>7</td>
				<td>25</td>
				<td>20</td>
				<td>5</td>
				<td>7</td>
			</tr>
		</tbody>
	</table>

<?php
@include_once('app/app.php');
?>

</body>
</html>