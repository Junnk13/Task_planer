<?php
session_start();
require 'DBconnection.php';

if (empty($_SESSION['login'])) {

    header("Location:../index.php");
    exit();
}

if (isset($_POST['send_task'])) {
    $task = $mysql->real_escape_string($_POST['task_name']);
    $userId = $_SESSION['login'];
    if ($task == '') {
        header("location:../index.php?error=empty");
        exit();
    }

    $mysql->query("INSERT INTO task(`user_login`,`tasks`) VALUES ('$userId','$task' )");
    $mysql->close();
    header("location:../tasks.php");
}