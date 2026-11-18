<?php

include_once('conecction.php');

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (email, password)
            VALUES (:email, :password)";

    $sqlQuery = $conn->prepare($sql);

    $sqlQuery->bindParam(':email', $email);
    $sqlQuery->bindParam(':password', $password);

    $sqlQuery->execute();

    echo "Data saved successfully";

    echo "<br>Email: " . $email;

}

?>