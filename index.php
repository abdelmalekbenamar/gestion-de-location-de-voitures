<?php 
session_start();
if(isset($_POST["mail"]) && isset($_POST["pass"])){
    $server = "localhost";
    $user = "root";
    $password = "azl,kkk!";
    $database = "location";

    $connection = mysqli_connect($server, $user, $password, $database);
    $sql_command = "SELECT * FROM users;";
    $action = mysqli_query($connection, $sql_command);
    while($line = mysqli_fetch_assoc($action)){
        if($line["email"] == $_POST["mail"] && $line["pass"] == $_POST["pass"]){
            $monEmail = $line["email"];
        }
    }
    if(isset($monEmail)){
        $_SESSION["user"] = $monEmail;
        header("Location: ./voitures.php");
    }
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
<body class="body">

<!-- Header -->

<form class="connexionForm" action="./index.php" method="POST">
    <label for="">
        Email:
        <input name="mail" class="formInput mail" type="email">
    </label>
    <label for="">
        Password:
        <input name="pass" class="formInput pass" type="password">
    </label>
    <label class="submit" for="">
        <button class="connexionButtin" type="submit">Connexion</button>
    </label>
</form>

<script>
    const mail =document.querySelector(".mail");
    const pass =document.querySelector(".pass");
    mail.value = "";
    pass.value= "";
</script>
    
</body>
</html>


