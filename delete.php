<?php
require "DBconnection.php";

$id = $_GET['id'];

$mysql->query("DELETE FROM `task` WHERE `id`='$id'");

$mysql->close();

header('location: /tasks.php');