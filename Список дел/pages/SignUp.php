<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\styles\Style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h1>Регистрация</h1>
        <h4>Пожалуйста, заполните поля</h4>
        <h4>Логин</h4>
        <input type="text" name="login" class="input">
        <h4>Пароль</h4>
        <input type="text" name="password" class="input">
        <h4>Повторите пароль</h4>
        <input type="text" name="Re_Password" class="input"> <br />
        <input type="submit" name="submit" value="Регистрация" class="button" />
        <h4>Уже есть аккаунт? <a href="../index.php">Войти</a></h4>
    </form>
</body>
</html>

<?php
    //создаем соединние к базе данных
    require "../config.php";

    //нажимаем на регистрацию
    if (isset($_POST["submit"])){
        $login = $_POST["login"];
        $password = $_POST["password"];  

        //создаем запрос на добавление
        $request = "INSERT INTO users(login, password) VALUES (?, ?)";

        //отправляем
        $result = $pdo->prepare($request);
        $result->execute([$login, $password]);

        if ($result) echo "OK";
        else echo "Error";
    }
?>
