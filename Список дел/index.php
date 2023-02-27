<?php
    session_start();
    if ($_SESSION == null){
        header("Location: taskList.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h1>Вход</h1>
        <h4>Пожалуйста, заполните поля</h4>
        <h4>Логин</h4>
        <input type="text" name="login" class="input">
        <h4>Пароль</h4>
        <input type="text" name="password" class="input"><br />
        <input type="submit" name="submit" value="Войти" class="button" />
        <h4>Нет аккаунта? <a href="pages/SignUp.php">Создайте его</a></h4>
    </form>
</body>
</html>

<?php
    //создаем соединние к базе данных
    require "config.php";

    //нажимаем на регистрацию
    if (isset($_POST['submit'])){
        $login = $_POST["login"];
        $password = $_POST["password"];  

        $request = "SELECT login FROM users WHERE login = ? AND password = ?";

        $result = $pdo->prepare($request);
        $result->execute([$login, $password]);

        //вывод имени пользователя при его наличии в базе
        if($row=$result->fetch()) {
            //как бы то ни было удивительно, но запуск сессии
            session_start();

            //сохранить логин
            $_SESSION['login'] = $row['login'];
            //открытие туду листа
            header("Location: taskList.php");
        }
    }
?>
