<?php

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";





$connection = mysqli_connect($server, $user, $password, $database);



$sql_command_2 = "SELECT carId FROM contracts WHERE id = {$_POST["contractDelete"]};";
$action = mysqli_query($connection, $sql_command_2);
$line = mysqli_fetch_assoc($action);

$sql_command_3 = "UPDATE cars SET rented = 0 WHERE id = {$line["carId"]};";
mysqli_query($connection, $sql_command_3);



$sql_command = "DELETE FROM contracts WHERE id = {$_POST["contractDelete"]};";
mysqli_query($connection, $sql_command);



header("Location: ../contrats.php");