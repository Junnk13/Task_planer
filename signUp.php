<?php

if (isset($_POST['register'])) {
    $login = $_POST['user_login'];
    $name = $_POST['user_name'];
    $password = $_POST['password'];

    require "classes/dbConn.php";
    require "classes/signUpClass.php";
    require "classes/signUp-contrl.php";
    $signUp = new SignUpControl($login, $name, $password);

    $signUp->signUpUser();
    header("location:../lk.php?error=none");
}