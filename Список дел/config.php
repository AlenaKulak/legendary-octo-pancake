<?php
$ServerName = "localhost";
    $dbName = "base_1";
    $Username = "root";
    $Password = "";

    //создаем соединние к базе данных
    $pdo = new PDO("mysql:host=$ServerName; dbname=$dbName", $Username, $Password);
?>