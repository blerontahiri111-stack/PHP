<?php

try {

    $conn = new PDO("mysql:host=localhost;dbname=bleroni1", "root", "");

    $sql = "ALTER TABLE users ADD contact VARCHAR(255)";

    $conn->exec($sql);

    echo "Column created successfully";

} catch (Exception $e) {

    echo "Column not created";

}

?>