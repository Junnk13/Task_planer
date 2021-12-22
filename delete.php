<?php
require "DBconnection.php";

$id =(int) $_GET['id'];

$mysql->query("DELETE FROM `task` WHERE `id`='$id'");

$mysql->close();

header('location: /tasks.php');