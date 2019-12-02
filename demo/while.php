<?php 

$var = "HELLO";
$i = 0;
$iteration = strlen($var);

while ($i <= $iteration) {
    echo "<br>" . $var{$i};
    $i++;
}

?>