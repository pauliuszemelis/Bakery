<?php
$days = $keys = '';

foreach ($data as $key => $value) {
					$days .= "<th colspan=\"5\">$key</th>";
					$keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";
						//echo '<th colspan="5">'.$key.'</th>'; -- antras variantas
					};
				?>
<table>
		<thead>
			<tr>
				<th rowspan="2">Pavadinimas</th>
				<?php
					echo $days;
				?>
			</tr>
			<tr>
				<?php
					echo $keys;
				?>


		</thead>
</table>

<?php
return;
/*
var_dump($data);

$html = '';

$html .='<table>';
$html .='<thead>';

$html .='</thead>';
$html .='</table>';

echo $html;

*/
?>