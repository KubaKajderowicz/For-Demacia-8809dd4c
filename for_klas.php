<?php
$array = array(
    "Sjonnie de Wiel",
    "Herman Kaal",
    "Henk de Steen",
    "Inge Kerkhoven",
    "Gert Kruiswijk"
);

$lengte = count($array);

for($i = 0; $i < $lengte; $i++) {
    echo $array[$i]."\n";
}