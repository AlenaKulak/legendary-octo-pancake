<?php
    session_start();
    if ($_SESSION == null){
        header("Location: Sign Up.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\styles\Styletodo.css">
    <script src="../scripts/script.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
    <a href="../index.php">
        <img src="../img/pngegg (2).png" alt="Ссылка" class="img">
    </a>
    </header>
    <div id="myDIV" class="header">
        <h1>Мой список дел</h1>
        <input type="text" id="myInput" placeholder="Напишите что-нибудь">
        <span onclick="newElement()">
            <input type="submit" name="submit" value="Добавить" class="addBtn">
        </span>
    </div>
    <ul id="myUL">
        <!-- гипотетические пункты -->
    </ul>
</body>
</html>

