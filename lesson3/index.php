<?php
$numri = 4;

if ($numri < 0) {
    echo "$numri is less than 0 <br>";
}

$numri1 = 4;

if (($numri1 > 0) && ($numri1 < 10)) {
    echo "$numri1 ky kusht nuk edht plotsuar <br>";
}

$numri2 = 5;

if (($numri2 > 0) || ($numri2 < 10)) {
    echo "$numri2 mjafton nje kusht te plotesohet <br>";
} else {
    echo "$numri2 nuk esht plotsu kushti <br>";
}


if ($numri1 == $numri2) {
    echo "YES";
} else {
    echo "NO";
}
?>
