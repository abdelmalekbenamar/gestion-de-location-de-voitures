<?php 
$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "UPDATE clients SET name='{$_POST["name"]}', cin='{$_POST["cin"]}' WHERE id={$_POST["id"]};";
mysqli_query($connection, $sql_command);
header('Location: ../clients.php');