<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
</head>

<div class="menu">
    <header>
        <ul>
            <li><a href="../index.php">Главная</a></li>
            <?php
            if ($_SESSION['login'])
                :?>
                <li><a href="../tasks.php">Задачи</a></li>
            <?php
            endif;
            
            if (!$_SESSION['login'])
                :?>
                <li><a href="../lk.php">Личный кабинет</a></li>
            <?php else :?>
                <li><a href="../lk.php"><?= $_SESSION['name'] ?></a></li>
            <?php
            endif;
            ?>
            
        </ul>

    </header>
</div>
<body>
