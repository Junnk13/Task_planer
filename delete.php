<?php
require "classes/dbConn.php";
require "classes/deleteClass.php";

$id =(int)$_GET['id'];
$delete=new Delete;
$delete->deleteTask($id);

header('location: /tasks.php');