<?php

$x = 5;
$y = 10;

function sum() {
    global $x, $y;
    echo $x + $y;
}

echo  $y . "<br>";

sum();

?>