<?php 

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "DELETE FROM cars WHERE id = {$_POST["idCar"]}";
mysqli_execute_query($connection, $sql_command);
header('Location: ../voitures.php');