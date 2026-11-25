<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border:1px solid black;
            border-collapse:collapse;
        }
    td,th{
        padding:10px 20px;
    }
    </style>
</head>
<body>
    
<?php

include_once('conecction.php');

$sql="select * from users";
$getUsers=$conn->prepare($sql);
$getUsers->execute();
$getUsers->execute();
$users=$getUsers->fetchAll();
?>  

    <h2>Users</h2>
        <table>
            <tr>
            <th>ID</th>
        <th>email</th>
        <th>password</th>
    </tr>

        
<?php

foreach($users as $user){
    echo "<tr>";
    echo "<td>" . $user['id'] . "</td>";
   echo "<td>" . $user['email'] . "</td>";
   echo "<td>" . $user['password'] . "</td>";
   echo "<tr>";
}


?>  

</table>
<br>
<a href="index.php">Add users </a>

</body>
</html>