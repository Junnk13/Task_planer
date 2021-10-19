<?php
$host = "#";
$username = "#";
$pass = "#";
$db = "#";


$mysql = new mysqli($host, $username, $pass, $db);
$mysql->query("SET NAMES 'utf8'");
if ($mysql->connect_error) {
    echo 'Error Number:' . $mysql->connect_errno . '<br>';
    echo 'Error: ' . $mysql->connect_error;
}
