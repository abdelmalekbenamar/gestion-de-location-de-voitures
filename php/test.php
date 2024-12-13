<?php 
$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server, $user,$password, $database);

$sql_command3 = "SELECT dateBegin, dateEnd, CLIENTS.name AS client_name, CARS.name AS car_name FROM CONTRACTS JOIN CLIENTS ON CLIENTS.id = CONTRACTS.clientId JOIN CARS ON CARS.id = CONTRACTS.carId";
$action3 = mysqli_query($connection, $sql_command3);
$line = mysqli_fetch_assoc($action3);

print_r($line);