<?php
$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server,  $user, $password,"test");
if(!$connection){
    die("Error " . mysqli_connect_error());
}else{
    echo "conexion successfull";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<!-- Header -->
<?php include_once("./php/menu.php"); ?>

    <div class="addCar text-[white] bg-[coral] p-[5px] rounded-[5px] w-fit mt-[30px] mb-0 mx-auto">
        <button id="addCarButton">Add Car</button>
    </div>

<main class="flex justify-center flex-wrap gap-5 mt-[30px] p-5">
    <div id="1" class="cardVoiture w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://www.kbb.com/wp-content/uploads/2022/10/2023-toyota-rav4-prime-frt-3qtr.jpg?w=918" alt="">
        <div class="carInfo flex justify-around m-2.5">
            <p>Name: Toyota</p>
            <p>price: 300$</p>
        </div>
        <div class="buttons flex justify-around m-2.5">
            <button class="modifyCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>

    <div id="2" class="cardVoiture w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://assets.apnews.com/d4/cc/ae38a696a251824ac10ad888aca7/dbf99d5981df4283a8df3b1d144ce842" alt="">
        <div class="carInfo flex justify-around m-2.5">
            <p>Name: Toyota</p>
            <p>price: 300$</p>
        </div>
        <div class="buttons flex justify-around m-2.5">
            <button class="modifyCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>

    <div id="3" class="cardVoiture w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://assets.apnews.com/d4/cc/ae38a696a251824ac10ad888aca7/dbf99d5981df4283a8df3b1d144ce842" alt="">
        <div class="carInfo flex justify-around m-2.5">
            <p>Name: Toyota</p>
            <p>price: 300$</p>
        </div>
        <div class="buttons flex justify-around m-2.5">
            <button class="modifyCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>

    <div id="4" class="cardVoiture w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://assets.apnews.com/d4/cc/ae38a696a251824ac10ad888aca7/dbf99d5981df4283a8df3b1d144ce842" alt="">
        <div class="carInfo flex justify-around m-2.5">
            <p>Name: Toyota</p>
            <p>price: 300$</p>
        </div>
        <div class="buttons flex justify-around m-2.5">
            <button class="modifyCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>

    <div id="5" class="cardVoiture w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://assets.apnews.com/d4/cc/ae38a696a251824ac10ad888aca7/dbf99d5981df4283a8df3b1d144ce842" alt="">
        <div class="carInfo flex justify-around m-2.5">
            <p>Name: Toyota</p>
            <p>price: 300$</p>
        </div>
        <div class="buttons flex justify-around m-2.5">
            <button class="modifyCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>

    <div id="6" class="cardVoiture w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://assets.apnews.com/d4/cc/ae38a696a251824ac10ad888aca7/dbf99d5981df4283a8df3b1d144ce842" alt="">
        <div class="carInfo flex justify-around m-2.5">
            <p>Name: Toyota</p>
            <p>price: 300$</p>
        </div>
        <div class="buttons flex justify-around m-2.5">
            <button class="modifyCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>
</main>


<!-- Form add Car -->
<form class="AddCarForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="./php/addCar.php" method="POST">
        <div class="inputsAndLabels h-[85%]">
            <label for="">
            Name:
                <input class="w-full rounded-[10px]" type="text">
            </label>
            <label for="">
            Price:
                <input pattern="\d+" class="w-full rounded-[10px]" type="text">
            </label>
            <label for="">
            Image:
                <input class="w-full rounded-[10px]" type="text">
            </label>
        </div>
        <div class="addClientButts clientButtons buttons flex justify-around m-2.5">
            <button class="cancelAddClientForm bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Cancel</button>
            <button  class="saveAddClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]" type="submit">Add</button>
        </div>
        
    </form>


<!-- Form Modify Car -->
<form class="modifyCarForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="" method="">
        <input class="carIdModify" type="text" hidden>
        <div class="inputsAndLabels h-[85%]">
            <label for="">
            Name:
                <input class="modifyCarNameInput w-full rounded-[10px]" type="text">
            </label>
            <label for="">
            Price:
                <input class="modifyCarInput w-full rounded-[10px]" type="text">
            </label>
            <label for="">
            Image:
                <input class="modifyCarInput w-full rounded-[10px]" type="text">
            </label>
        </div>
        <div class="addCarButts clientButtons buttons flex justify-around m-2.5">
            <button class="cancelModifyCarForm bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Cancel</button>
            <button  class="saveModifyCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]" type="submit">Modify</button>
        </div>
        
</form>

<!-- Form Delete Car -->
<form class="deleteCarForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="" method="">
        <input class="carIdDelete" type="text" hidden>
        <div class="h-[85%] text-center text-white">
            <h1>Are You Sure ?</h1>
        </div>
        <div class="deleteCarButts clientButtons buttons flex justify-around m-2.5">
            <button class="cancelDeleteCarForm bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Cancel</button>
            <button  class="saveDeleteCar bg-[chocolate] text-[white] p-[5px] rounded-[5px]" type="submit">Delete</button>
        </div>
        
</form>
    

    <script src="./js/scriptCars.js"></script>
</body>
</html>
