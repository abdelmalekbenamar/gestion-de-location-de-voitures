<?php 
$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "INSERT INTO clients (name, cin) VALUES ('{$_POST["name"]}', '{$_POST["cin"]}');";
mysqli_query($connection, $sql_command);
header('Location: ../clients.php');