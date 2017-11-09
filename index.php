<!DOCTYPE html>
<html>
<head>
	<title>Bakery Online</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<table id="prekes" border=1px >
		<thead align="center">
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
		<tbody>
			<tr>
				<td>Bandelė "Aguonėlė"</td>
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
				<td>Duona "Balta"</td>
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
				<td>Duona "Juoda"</td>
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
				<td>Duona "Ruginė"</td>
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
				<td>Bandelė "Persikas"</td>
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
		</script>
		</tbody>
	</table>
<script type="text/javascript">
	/*var diena;
	var pavadinimas;
	var VL;
	var PG;
	var PR;
	var SG;
	var GL;
	var prekes = {
		"diena": diena,
		"pavadinimas":pavadinimas,
		"kiekis": 	{
					"VL": VL,
					"PG": PG,
					"PR": PR,
					"SG": SG,
					"GL": GL
					}
				}
*/
//option 1 
var _arrayOfObjects = [
	{
		"date":"2017-11-09",
		"product":"Aguonėlė",
		"data": [5,	25,	20,	5, 5]
	},
	{
		"date":"2017-11-10",
		"product":"Aguonėlė",
		"data": [5,	25,	20,	5, 5]
	}	
];

// option 2
var _objectByDay = {
	"2017-11-09":
	[
	{	
		"product":"Aguonėlė",
		"data": [5,	25,	20,	5, 5]
	},
	{	
		"product":"Persikas",
		"data": [5,	25,	20,	5, 5]
	}
	]
}

//option 3 

var _objectByProduct = {
	"Aguonėlė":
	[
	{	
		"date":"2017-11-09",
		"data": [5,	25,	20,	5, 5]
	},
	{	
		"date":"2017-11-10",
		"data": [5,	25,	20,	5, 5]
	}
	]
}
// option 4
var _optimisedByDate = {
	"2017-11-09":
		{	
		"Aguonėlė": [5,	25,	20,	5, 5],
		"Persikas": [5,	25,	20,	5, 5]
		}
						};

// option 5

var _optimisedByProduct = {
	"Aguonėlė":
		{	
		"2017-11-09": [5,	25,	20,	5, 5],
		"2017-11-10": [5,	25,	20,	5, 5]
		}
						};

var _products = {
	"p-1": "Aguonėlė",
	"p-2": "Persikas"
}


var _finalByProduct = {
	"p-1":
		{
		"2017-11-09": [5,	25,	20,	5, 5],
		"2017-11-10": [5,	25,	20,	5, 5]
		},
	"p-2":
		{
		"2017-11-09": [5,	25,	20,	5, 5],
		"2017-11-10": [5,	25,	20,	5, 5]
		},
	}

var _finalByDate = {
	"p-1":
		{
		"2017-11-09": [5,	25,	20,	5, 5],
		"2017-11-10": [5,	25,	20,	5, 5]
		},
	"p-2":
		{
		"2017-11-09": [5,	25,	20,	5, 5],
		"2017-11-10": [5,	25,	20,	5, 5]
		},
	}
}
console.log(_arrayOfObjects);
console.log(_objectByDay);
console.log(_objectByProduct);
console.log(_optimisedByDate);
console.log(_optimisedByProduct);

</script>
</body>
</html>