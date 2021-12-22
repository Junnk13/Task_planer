<?php
session_start();
require 'DBconnection.php';

if (empty($_SESSION['login'])) {

    header("Location:../index.php");
    exit();
}

if (isset($_POST['send_task'])) {
    $task = $_POST['task_name'];
    $userId = $_SESSION['login'];
    if ($task == '') {
        header("location:../index.php?error=empty");
        exit();
    }
    $task = htmlspecialchars($task);
    $query = sprintf("INSERT INTO task(`user_login`,`tasks`) VALUES ('%s','%s' )", $userId, $mysql->real_escape_string($task));
    $result = $mysql->query($query);
    $mysql->close();
    header("location:../tasks.php");
}