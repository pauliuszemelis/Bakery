<?php
$days = $keys = '';

foreach ($data as $key => $value) {
    $days .= "<th colspan=\"5\">$key</th>";
    $keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";
}
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


            foreach ($data as $key => $value) { 
                foreach ($value as $name => $pava) {
                    foreach ($pava as $amount) {
                     $_amount .= "<td>$amount</td>";   
                    }
                }
            }
      
            foreach ($value as $name => $pava) {
                echo "<tr><td align = \"left\";>$name</td>$_amount</tr>";
            }


            //echo "key : $key<br>";
            //echo "value : $value<br>";
           // echo "name : $name<br>";
           // echo "_name : $_name<br>";
           // echo "pava : $pava<br/>";
//echo "amount : $amount<br>";
//echo "_amount : $_amount<br>";
            ?>
        </tr>

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