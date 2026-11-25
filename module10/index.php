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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODULE 10</title>
</head>
<body>
    <a href="dashboard.php">Dashboard</a>
   <form method="post" action="index.php">

    <label>Email:</label>
    <input type="email" name="email" >

    <label>Password:</label>
    <input type="password" name="password">

    <input type="submit" name="submit" value="Submit">

</form>
</body>
</html>