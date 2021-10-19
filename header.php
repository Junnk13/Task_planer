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
    <link rel="stylesheet" href="css/style.css">
</head>

<div class="menu">
    <header>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <?php
            if (isset($_SESSION['login'])) {
                echo '<li><a href="tasks.php">Задачи</a></li>';
            } ?>
            <li><a href="lk.php">Личный кабинет</a></li>
        </ul>

    </header>
</div>