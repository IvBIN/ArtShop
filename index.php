<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Главная</title>
    </head>
    <body>
        <header>
            <div class="container">
                <a href="#"><img class="logo" src="assets/images/Logo1.png" alt="logo"></a>
                <form method="get">
                    <input type="text" placeholder="Поиск">
                    <input type="submit" value="Найти">
                </form>
                <a href="./pages/login.php"><img class="auth" src="assets/images/avatar1.png" alt="profile"></a>
            </div>
        </header>
        <?php require './moduls/header.php';?>
    </body>
</html>
