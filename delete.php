<?php
require "classes/dbConn.php";
require "classes/deleteClass.php";

$id =(int)$_POST['id'];
$delete=new Delete;
$delete->deleteTask($id);