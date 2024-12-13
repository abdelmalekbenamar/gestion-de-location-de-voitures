<?php
echo "addClientSelect: " . $_POST["addClientSelect"] . "<br>AddCarSelect: " . $_POST["AddCarSelect"] . "<br>beginDate: " . $_POST["beginDate"] . "<br>endDate: " . $_POST["endDate"];

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "INSERT INTO contracts (dateBegin, dateEnd, clientId, carId) VALUES ('{$_POST["beginDate"]}', '{$_POST["endDate"]}', '{$_POST["addClientSelect"]}', '{$_POST["AddCarSelect"]}');";
$sql_command .= "UPDATE cars SET rented = true WHERE id = {$_POST["AddCarSelect"]};";
mysqli_multi_query($connection, $sql_command);
header('Location: ../contrats.php');