<?php
session_start();
$title = 'Задачи';
require "inc/header.php";
require "classes/dbConn.php";
require "classes/taskClass.php";

$sesLog = $_SESSION['login'];
$tasks= new Tasks;
$tasks->getTask($sesLog);

require "inc/footer.html";