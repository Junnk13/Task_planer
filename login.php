<?php

if (isset($_POST['auth'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    require "classes/dbConn.php";
    require "classes/loginClass.php";
    require "classes/login-contrl.php";
    $signUp = new LoginControl($login, $password);

    $signUp->LoginUser();
    header("location:../index.php?error=none");
}