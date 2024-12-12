<?php

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "UPDATE cars SET name = '{$_POST["name"]}', price = '{$_POST["price"]}', image = '{$_POST["image"]}' WHERE id = {$_POST["id"]}";
mysqli_query($connection, $sql_command);
header('Location: ../voitures.php');
