<?php

try {

    $conn = new PDO("mysql:host=localhost;dbname=bleroni1", "root", "");

    $sql = "DROP TABLE users";

    $conn->exec($sql);

    echo "column created";

} catch (Exception $e) {

    echo "column not created";

}

?>