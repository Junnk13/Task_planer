<?php
session_start();
require "classes/dbConn.php";
require "classes/addClass.php";

if (empty($_SESSION['login'])) {
    header("Location:../index.php");
    exit();
}

//if (isset($_POST['send_task'])) {
    $task = $_POST['task_name'];
    $userId = $_SESSION['login'];
    $addTask = new Add($userId, $task);
    header("location:../tasks.php");
//}

