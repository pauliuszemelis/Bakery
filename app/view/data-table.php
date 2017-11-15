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
            ?>
        </tr>
    </thead> 
    <?php
    $arr = array();
    
    foreach ($data as $key => $value) {
        foreach ($value as $name => $data) {
            if (!isset($arr[$name])) {
                $arr[$name] = array();
            }
            $arr[$name][] = $data;
        }
    }
    

    foreach ($arr as $key => $value) {
        echo "<tr><td align=\"left\"><b>" . $key . "</b></td>";
        foreach ($value as $data) {
            foreach ($data as $amount) {
                echo "<td>" . $amount . "</td>";
            }
        }
        echo "</tr>";
    }
        
    ?>



</table>

