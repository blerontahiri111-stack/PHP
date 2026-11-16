<?php

try {

    $conn = new PDO("mysql:host=localhost;dbname=bleroni1", "root", "");

    $username = "oltiona";
    $password = password_hash("testtest", PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username,password) VALUES ('$username', '$password')";

    $conn->exec($sql);

    echo "Insert successfully";

} catch (Exception $e) {

    echo "Insert not successfully";

}

?>