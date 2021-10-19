<?php
session_start();
require 'DBconnection.php';

if (isset($_POST['login'])) {
    $login = $mysql->real_escape_string($_POST['login']);
    if ($login == '') {
        unset($login);
    }
}
if (isset($_POST['password'])) {
    $password = $mysql->real_escape_string($_POST['password']);
    if ($password == '') {
        unset($password);
    }
}
if (isset($_POST['auth'])) {
    if (!isset($login) or !isset($password)) {
        header("location:../lk.php?error=empty");

    } else {
        $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' ");
        $myrow = $result->fetch_assoc();

        if ($passwordHash = password_verify($password, $myrow['pass'])) {
            if ($myrow['pass'] == $passwordHash) {
                $_SESSION['login'] = $myrow['login'];
                $_SESSION['name'] = $myrow['name'];
                header('location: /index.php');
            }
        } else {
            header("location:../lk.php?error=invalid");
        }
    }
}
$mysql->close();

?>