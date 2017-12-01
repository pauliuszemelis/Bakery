<?php
$days =  $rows = [];
$keys = '';

foreach ($productHistory as $value) {

    if (!isset($days[$value['date']])) {
            $days[$value['date']] = $value['date'];
            $keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";


    }
    
    }


    /*foreach ($products as $key => $name) {
            if (!isset($rows[$key])) {
                $rows[$key] = "<td>$name</td>";
            }
            if(isset($value[$key])){
                foreach ($value[$key] as $amount) {
                    $rows[$key] .= "<td>$amount</td>";
                }
            }
            else {
                    $rows[$key] .= "<td></td><td></td><td></td><td></td><td></td>";
            }
    }*/



?>

<table>
    <thead>
        <tr>
            <th width= 120px rowspan="2">Pavadinimas</th>
            <?php
            foreach ($days as $date) {
        echo '<th colspan="5">'. $date . '</th>';
            }
            ?>
        </tr>
        <tr>
            <?php
            echo $keys;
            ?>
        </tr>
    </thead> 
    <?php
   
    ?>



</table>

