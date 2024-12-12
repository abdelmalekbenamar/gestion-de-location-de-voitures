<?php 
$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "location";

$connection = mysqli_connect($server, $user,$password, $database);
$sql_command1 = "SELECT * FROM cars";
$action1 = mysqli_query($connection, $sql_command1);

$sql_command2 = "SELECT * FROM clients";
$action2 = mysqli_query($connection,$sql_command2);
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
    
    <div class="addContract text-[white] bg-[coral] p-[5px] rounded-[5px] w-fit mt-[30px] mb-0 mx-auto">
        <button id="addContractButton">Add Contract</button>
    </div>
    <main class="flex justify-center flex-wrap gap-5 mt-[30px] p-5">

    <div id="1" class="w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://mae-avocats.com/wp-content/uploads/2022/06/images-contrat.jpg" alt="">
        <div class="contratInfo text-[white] text-xs flex justify-center m-2.5 text-center">
            <p>Begin: <span class="beginContract">2025-01-13</span></p>
            <p>End: <span class="endContract">2025-03-14</span></p>
            <p>Signed by: Abdelmalek</p>
        </div>
        <div class="buttons flex justify-around m-2.5 flex justify-around m-2.5">
            <button class="modifyContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>

    <div id="2" class="w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://mae-avocats.com/wp-content/uploads/2022/06/images-contrat.jpg" alt="">
        <div class="contratInfo text-[white] text-xs flex justify-center m-2.5 text-center">
        <p>Begin: <span class="beginContract">2025-01-13</span></p>
            <p>End: <span class="endContract">2025-03-14</span></p>
            <p>Signed by: Abdelmalek</p>
        </div>
        <div class="buttons flex justify-around m-2.5 flex justify-around m-2.5">
            <button class="modifyContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>

    <div id="3" class="w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://mae-avocats.com/wp-content/uploads/2022/06/images-contrat.jpg" alt="">
        <div class="contratInfo text-[white] text-xs flex justify-center m-2.5 text-center">
        <p>Begin: <span class="beginContract">2025-01-13</span></p>
            <p>End: <span class="endContract">2025-03-14</span></p>
            <p>Signed by: Abdelmalek</p>
        </div>
        <div class="buttons flex justify-around m-2.5 flex justify-around m-2.5">
            <button class="modifyContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>

    <div id="4" class="w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://mae-avocats.com/wp-content/uploads/2022/06/images-contrat.jpg" alt="">
        <div class="contratInfo text-[white] text-xs flex justify-center m-2.5 text-center">
            <p>Begin: <span class="beginContract">2025-01-13</span></p>
            <p>End: <span class="endContract">2025-03-14</span></p>
            <p>Signed by: Abdelmalek</p>
        </div>
        <div class="buttons flex justify-around m-2.5 flex justify-around m-2.5">
            <button class="modifyContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>

    <div id="5" class="w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
        <img src="https://mae-avocats.com/wp-content/uploads/2022/06/images-contrat.jpg" alt="">
        <div class="contratInfo text-[white] text-xs flex justify-center m-2.5 text-center">
            <p>Begin: <span class="beginContract">2025-01-13</span></p>
            <p>End: <span class="endContract">2025-03-14</span></p>
            <p>Signed by: Abdelmalek</p>
        </div>
        <div class="buttons flex justify-around m-2.5 flex justify-around m-2.5">
            <button class="modifyContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            <button class="deleteContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
        </div>
    </div>
    </main>


    <!-- Form add Contract -->
    <form class="AddContractForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="" method="">

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
                <select class="block w-full rounded-[10px]" name="" name="AddCarSelect">
                    <?php while($line1 = mysqli_fetch_assoc($action1)): ?>
                    <option value="<?php echo $line1["id"]; ?>"><?php echo $line1["name"]; ?></option>
                    <?php endwhile; ?>
                </select>
            </label>
            <label for="">
            Begin:
                <input class="w-full rounded-[10px]" type="date">
            </label>
            <label for="">
            End:
                <input class="w-full rounded-[10px]" type="date">
            </label>
        </div>
        <div class="addContractButts buttons flex justify-around m-2.5">
            <button class="cancelAddContractForm bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Cancel</button>
            <button  class="saveAddContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]" type="submit">Add</button>
        </div>
        
    </form>

    <!-- Form Modify Contract -->
<form class="modifyContractForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="" method="">
        <input class="ContractIdModify" type="text" hidden>
        <div class="inputsAndLabels h-[85%]">
            <input type="text" class="contractHiddenId hidden">
            
        <label for="" class="block">
                Clients:
                <select class="block w-full rounded-[10px]" name="" id="">
                    <option value="">Client 1</option>
                    <option value="">Client 2</option>
                    <option value="">Client 3</option>
                </select>
            </label>
            <label for="">
                Cars:
                <select class="block w-full rounded-[10px]" name="" id="">
                    <option value="">Car 1</option>
                    <option value="">Car 2</option>
                    <option value="">Car 3</option>
                </select>
            </label>
            <label for="">
            Begin:
                <input class="beginDateContract w-full rounded-[10px]" type="date">
            </label>
            <label for="">
            End:
                <input class="endDateContract w-full rounded-[10px]" type="date">
            </label>
        </div>
        <div class="addContractButts buttons flex justify-around m-2.5">
            <button class="cancelModifyContractForm bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Cancel</button>
            <button  class="saveModifyContract bg-[chocolate] text-[white] p-[5px] rounded-[5px]" type="submit">Modify</button>
        </div>
        
</form>

<!-- Form Delete Contract -->
<form class="deleteContractForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="" method="">
        <input class="contractIdDelete" type="text" hidden>
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


