<?php

include_once ('conecction.php');

if(isset($_POST['username'],$_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 9</title>
</head>
<body>

    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">


        <input type="submit" value="Submit">
    </form>

</body>
</html>
