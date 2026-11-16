<?php

try {

    $conn = new PDO("mysql:host=localhost; dbname=bleroni1", "root", "");

    $sql = "ALTER TABLE users DROP email";

    $conn->exec($sql);
    echo "column dropped";

} catch (Exception $e) {
    echo "column not dropped";
}

?>