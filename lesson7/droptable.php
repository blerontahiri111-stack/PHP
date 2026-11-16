<?php

try {

    $conn = new PDO("mysql:host=localhost; dbname=bleroni1", "root", "");

    $sql = "drop table users";

    $conn->exec($sql);
    echo "column dropped";

} catch (Exception $e) {
    echo "column not dropped";
}

?>