<?php

$host="localhost";
$user="root"; $pass="";

try{
    $conn= new PDO ("mysql:host=$host", $user, $pass); $sql="Create database digital2";
    $conn->exec($sql);
    
echo "databas is created"; }catch(exception $e){
echo "databas is not created";
}
?>