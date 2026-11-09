
<?php

$host = "localhost";
$user = "root";
$pass = "";
$DBname = "bleroni1";

try {

    $conn = new PDO("mysql:host=$host;dbname=$DBname", $user, $pass);

    echo "Connected";

} catch (Exception $e) {

    echo "Not Connected";

}

?>
