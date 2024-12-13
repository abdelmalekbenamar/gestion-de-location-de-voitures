<?php

echo $_POST["nameIdCar"];

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command_contract = "UPDATE contracts SET dateBegin = '{$_POST["beginDateContract"]}', dateEnd = '{$_POST["endDateContract"]}', clientId = {$_POST["nameIdClient"]}, carId = {$_POST["nameIdCar"]} WHERE id = {$_POST["ContractId"]};";
$sql_command_chosen_car = "UPDATE cars SET rented = 1 WHERE id = {$_POST["nameIdCar"]};";
$sql_command_old_car = "SELECT carId FROM contracts WHERE id = {$_POST["ContractId"]};";//


mysqli_query($connection, $sql_command_chosen_car);
$action = mysqli_query($connection, $sql_command_old_car);
$leId = mysqli_fetch_assoc($action);
echo $leId["carId"];
$sql_command_change_old_car_status = "UPDATE cars SET rented = 0 WHERE id = {$leId["carId"]};";//
mysqli_query($connection, $sql_command_change_old_car_status);
mysqli_query($connection, $sql_command_contract);
mysqli_query($connection, $sql_command_chosen_car);

header("Location: ../contrats.php");
// echo "ContractId: " . $_POST["ContractId"] . " nameIdClient: " . $_POST["nameIdClient"] . " nameIdCar: " . $_POST["nameIdCar"] . " beginDateContract: " . $_POST["beginDateContract"] . " endDateContract: " . $_POST["endDateContract"];