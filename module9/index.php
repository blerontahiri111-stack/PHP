<?php

include_once ('conecction.php');

if(isset($_POST['email'],$_POST['password'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODULE 9</title>
</head>
<body>

   <form method="post" action="add.php">

    <label>Email:</label>
    <input type="email" name="email">

    <label>Password:</label>
    <input type="password" name="password">

    <input type="submit" name="submit" value="Submit">

</form>
</body>
</html>