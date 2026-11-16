<?php

$host = "localhost";
$user = "root";
$dbname = "digital2";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    $sql = "Create Table users (id INT(6) not null auto_increment primary key,
        username varchar(30) not null,
        password varchar(30) not null)";

    $conn->exec($sql);

    echo "TABLE is created";
} catch (exception $e) {
    echo "TABLE is not created";
}

?>