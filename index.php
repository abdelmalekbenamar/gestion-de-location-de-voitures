
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

<form class="connexionForm" action="">
    <label for="">
        Email:
        <input class="formInput mail" type="email">
    </label>
    <label for="">
        Password:
        <input class="formInput pass" type="password">
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


