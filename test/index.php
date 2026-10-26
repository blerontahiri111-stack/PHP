<?php

function globalVariabla() {
    global $numri1;
    echo "Global variabla: " . $numri1 . "<br>";
}

globalVariabla();


// Static Scope
function staticVariabla() {
    static $numri2 = 0;
    $numri2++;
    echo "Static variabla: " . $numri2 . "<br>";
}

staticVariabla();
staticVariabla();
staticVariabla();

?>





<?php

$x = 5;

function numri() {
    global $x;
    echo $x;
}

echo $x;

numri();

?>





<?php

function numri() {
    static $x = 5;
    echo $x . "<br>";
    $x++;
}

numri();
numri();
numri();

?>



<?php

$studenti = array(
    "emri" => "Bleron",
    "mbiemri" => "Tahiri",
    "mosha" => 17
);

echo $studenti["emri"] . "<br>";
echo $studenti["mbiemri"] . "<br>";
echo $studenti["mosha"];

?>


<?php

$sports = array(
    "sport1" => "football",
    "sport2" => "basketball",
    "sport3" => "handball"
);

echo $sports["sport3"];

?>