
<?php

function numri() {
    static $numri = 0;
    echo  "numri esht $numri " . "<br>";
    $numri++;
}

numri();
numri();
numri();

?>
