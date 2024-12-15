<?php 
session_start();
if(!isset($_SESSION["user"])){

    header("Location: ./index.php");
}



$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server, $user,$password, $database);
$sql_command1 = "SELECT * FROM cars WHERE rented = false;";
$action1 = mysqli_query($connection, $sql_command1);

$sql_command2 = "SELECT * FROM clients";
$action2 = mysqli_query($connection,$sql_command2);

$sql_command3 = "SELECT contracts.id AS id, dateBegin, dateEnd, clients.name AS clientName, cars.name AS carName FROM contracts JOIN clients ON clients.id = contracts.clientId JOIN cars ON cars.id = contracts.carId";
$action3 = mysqli_query($connection, $sql_command3);
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
    
    <div class="addContract text-[white] bg-[coral] p-[5px] rounded-[5px] w-fit mt-[100px] mb-0 mx-auto">
        <button id="addContractButton">Add Contract</button>
    </div>
    <main class="flex justify-center flex-wrap gap-5 mt-[30px] p-5">

    <?php while($line = mysqli_fetch_assoc($action3)): ?>
    <div id="<?php echo $line["id"]; ?>" class="w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://mae-avocats.com/wp-content/uploads/2022/06/images-contrat.jpg" alt="">
        <div class="contratInfo text-[white] gap-5 text-xs flex justify-center m-2.5 text-center">
            <p>Begin:<br> <span class="beginContract"><?php echo $line["dateBegin"]; ?></span></p>
            <p>End:<br> <span class="endContract"><?php echo $line["dateEnd"]; ?></span></p>
            <p>Signed by:<br> <span class="signedBy"><?php echo $line["clientName"]; ?></span></p>
            <p>Car: <?php echo $line["carName"]; ?></p>
        </div>
        <div class="buttons flex justify-around m-2.5 flex justify-around m-2.5">
            <button class="modifyContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>
    <?php endwhile; ?>

    </main>


    <!-- Form add Contract -->
    <form class="AddContractForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="./php/addContract.php" method="POST">

        <div class="inputsAndLabels h-[85%]">
            <label for="" class="block">
                Clients:
                <select class="block w-full rounded-[10px]" name="addClientSelect">
                    <?php while($line2 = mysqli_fetch_assoc($action2)): ?>
                    <option value="<?php echo $line2["id"]; ?>"><?php echo $line2["name"]; ?></option>
                    <?php endwhile; ?>
                </select> 
            </label>
            <label for="">
                Cars:
                <select class="block w-full rounded-[10px]" name="AddCarSelect">
                    <?php while($line1 = mysqli_fetch_assoc($action1)): ?>
                    <option value="<?php echo $line1["id"]; ?>"><?php echo $line1["name"]; ?></option>
                    <?php endwhile; ?>
                </select>
            </label>
            <label for="">
            Begin:
                <input required class="w-full rounded-[10px]" name="beginDate" type="date">
            </label>
            <label for="">
            End:
                <input required class="w-full rounded-[10px]" name="endDate" type="date">
            </label>
        </div>
        <div class="addContractButts buttons flex justify-around m-2.5">
            <button class="cancelAddContractForm bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Cancel</button>
            <button  class="saveAddContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]" type="submit">Add</button>
        </div>
        
    </form>

    <!-- Form Modify Contract -->
<form class="modifyContractForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="./php/modifyContract.php" method="POST">
        <input name="ContractId" class="ContractIdModify" type="text" hidden>
        <div class="inputsAndLabels h-[85%]">
            <label for="" class="block">
                Clients:
                <select name="nameIdClient" class="block w-full rounded-[10px]">
                        <?php mysqli_data_seek($action2, 0); ?>
                    <?php while($line3 = mysqli_fetch_assoc($action2)): ?>
                    <option value="<?php echo $line3["id"]; ?>"><?php echo $line3["name"]; ?></option>
                    <?php endwhile; ?>

                </select>
            </label>
            <label for="">
                Cars:
                <select class="block w-full rounded-[10px]" name="nameIdCar">
                <?php mysqli_data_seek($action1, 0); ?>        
                <?php while($line4 = mysqli_fetch_assoc($action1)): ?>
                <option value="<?php echo $line4["id"]; ?>"><?php echo $line4["name"]; ?></option>
                <?php endwhile; ?>
                
                </select>
            </label>
            <label for="">
            Begin:
                <input name="beginDateContract" class="beginDateContract w-full rounded-[10px]" type="date">
            </label>
            <label for="">
            End:
                <input name="endDateContract" class="endDateContract w-full rounded-[10px]" type="date">
            </label>
        </div>
        <div class="addContractButts buttons flex justify-around m-2.5">
            <button class="cancelModifyContractForm bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Cancel</button>
            <button  class="saveModifyContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]" type="submit">Modify</button>
        </div>
        
</form>

<!-- Form Delete Contract -->
<form class="deleteContractForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="./php/deleteContract.php" method="POST">
        <input name="contractDelete" class="contractIdDelete" type="text" hidden>
        <div class="h-[85%] text-center text-white">
            <h1>Are You Sure ?</h1>
        </div>
        <div class="addContractButts contractButtons buttons flex justify-around m-2.5">
            <button class="cancelDeleteContractForm bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Cancel</button>
            <button  class="saveDeleteContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]" type="submit">Delete</button>
        </div>
        
</form>



    <script src="./js/scriptContracts.js"></script>
</body>
</html>


