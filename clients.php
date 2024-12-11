

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

    <div class="addClient text-[white] bg-[coral] p-[5px] rounded-[5px] w-fit mt-[30px] mb-0 mx-auto">
        <button id="addClientButton">Add Client</button>
    </div>

    <main class="flex justify-center flex-wrap gap-5 mt-[30px] p-5">
    <div id="1" class="cardClient w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
            <input type="text" class="hiddenClientId" hidden>
            <img src="https://img.freepik.com/vecteurs-libre/homme-affaires-caractere-avatar-isole_24877-60111.jpg?semt=ais_hybrid" alt="">
            <div class="clientInfo flex justify-around m-2.5">
                <p>Name: <span class="clientName">Reda</span></p>
                <p>CIN: <span class="clientCIN">J125486</span></p>
            </div>
            <div class="clientButtons buttons flex justify-around m-2.5">
                <button class="deleteClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
                <button class="modifyClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            </div>
    </div>

    <div id="2" class="cardClient w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
            <img src="https://img.freepik.com/vecteurs-libre/homme-affaires-caractere-avatar-isole_24877-60111.jpg?semt=ais_hybrid" alt="">
            <div class="clientInfo flex justify-around m-2.5">
            <p>Name: <span class="clientName">Reda</span></p>
            <p>CIN: <span class="clientCIN">C125412</span></p>
            </div>
            <div class="clientButtons buttons flex justify-around m-2.5">
                <button class="deleteClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
                <button class="modifyClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            </div>
    </div>

    <div id="3" class="cardClient w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
            <img src="https://img.freepik.com/vecteurs-libre/homme-affaires-caractere-avatar-isole_24877-60111.jpg?semt=ais_hybrid" alt="">
            <div class="clientInfo flex justify-around m-2.5">
            <p>Name: <span class="clientName">Reda</span></p>
            <p>CIN: <span class="clientCIN">X210325</span></p>
            </div>
            <div class="clientButtons buttons flex justify-around m-2.5">
                <button class="deleteClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
                <button class="modifyClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            </div>
    </div>

    <div id="4" class="cardClient w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
            <img src="https://img.freepik.com/vecteurs-libre/homme-affaires-caractere-avatar-isole_24877-60111.jpg?semt=ais_hybrid" alt="">
            <div class="clientInfo flex justify-around m-2.5">
            <p>Name: <span class="clientName">Reda</span></p>
            <p>CIN: <span class="clientCIN">Q2102354</span></p>
            </div>
            <div class="clientButtons buttons flex justify-around m-2.5">
                <button class="deleteClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
                <button class="modifyClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            </div>
    </div>

    <div id="5" class="cardClient w-[300px] overflow-hidden bg-[cadetblue] rounded-[10px]">
            <img src="https://img.freepik.com/vecteurs-libre/homme-affaires-caractere-avatar-isole_24877-60111.jpg?semt=ais_hybrid" alt="">
            <div class="clientInfo flex justify-around m-2.5">
            <p>Name: <span class="clientName">Reda</span></p>
            <p>CIN: <span class="clientCIN">M145287</span></p>
            </div>
            <div class="clientButtons buttons flex justify-around m-2.5">
                <button class="deleteClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Delete</button>
                <button class="modifyClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Modify</button>
            </div>
    </div>

    </main>
<!-- Form add client -->
    <form class="AddClientForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="" method="">
        <div class="inputsAndLabels h-[85%]">
            <label for="">
            Name:
                <input class="w-full rounded-[10px]" type="text">
            </label>
            <label for="">
            CIN:
                <input class="w-full rounded-[10px]" type="text">
            </label>
        </div>
        <div class="addClientButts clientButtons buttons flex justify-around m-2.5">
            <button class="cancelAddClientForm bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Cancel</button>
            <button  class="saveAddClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]" type="submit">Add</button>
        </div>
        
    </form>

<!-- Form Modify client -->
<form class="modifyClientForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="" method="">
        <input class="clientIdModify" type="text" hidden>
        <div class="inputsAndLabels h-[85%]">
            <label for="">
            Name:
                <input class="modifyNameInput w-full rounded-[10px]" type="text">
            </label>
            <label for="">
            CIN:
                <input class="modifyCinInput w-full rounded-[10px]" type="text">
            </label>
        </div>
        <div class="addClientButts clientButtons buttons flex justify-around m-2.5">
            <button class="cancelModifyClientForm bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Cancel</button>
            <button  class="saveModifyClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]" type="submit">Modify</button>
        </div>
        
</form>

<!-- Form Delete Client -->
<form class="deleteClientForm hidden w-[600px] bg-[brown] h-[300px] fixed left-[calc(50%_-_300px)] p-10 rounded-[20px] top-[120px]" action="" method="">
        <input class="clientIdDelete" type="text" hidden>
        <div class="h-[85%] text-center text-white">
            <h1>Are You Sure ?</h1>
        </div>
        <div class="addClientButts clientButtons buttons flex justify-around m-2.5">
            <button class="cancelDeleteClientForm bg-[chocolate] text-[white] p-[5px] rounded-[5px]">Cancel</button>
            <button  class="saveDeleteClient bg-[chocolate] text-[white] p-[5px] rounded-[5px]" type="submit">Delete</button>
        </div>
        
</form>




    <script src="./js/scriptClients.js"></script>
</body>
</html>
