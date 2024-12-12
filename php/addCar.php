<?php
$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server,  $user, $password,$database);
if(!$connection){
    die("Error " . mysqli_connect_error());
}
$carName = $_POST["nameCar"];
$carPrice = $_POST["price"];
$carImage = $_POST["image"];

$sqlCommand = "INSERT INTO cars (name, rented, image, price) VALUES ('$carName', false, '$carImage', $carPrice)";

if(mysqli_query($connection, $sqlCommand)){
    echo "SQL Connected :";
}else{
    echo "SQL Error :" . mysqli_error($connection);
}
header('Location: ../voitures.php');
