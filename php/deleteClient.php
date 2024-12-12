<?php
$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "DELETE FROM clients WHERE id={$_POST["id"]};";
mysqli_query($connection, $sql_command);
header('Location: ../clients.php');