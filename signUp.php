<?php
require "DBconnection.php";

if (isset($_POST['user_login'])) {
    $login = htmlspecialchars($_POST['user_login']);
    $login = $mysql->real_escape_string($login);
    if ($login == '') {
        unset($login);
    }
}
if (isset($_POST['user_name'])) {
    $name = htmlspecialchars($_POST['user_name']);
    $name = $mysql->real_escape_string($name);
    if (mb_strlen($name) <= 1) {
        unset($name);
        header("location:../register.php?error=ln");
        exit();
    }
}

if (isset($_POST['password'])) {
    $password = htmlspecialchars($_POST['password']);
    $password = $mysql->real_escape_string($password);
    if (mb_strlen($password) <= 3) {
        unset($password);
        header("Location:../register.php?error=lp");
        exit();
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);


}

if (isset($_POST['register'])) {
    if (empty($login) or empty($password) or empty($name)) {

        header("location:../register.php?error=empty");
        exit();
    } else {

        $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
        $myrow = $result->fetch_assoc();
        if (isset($myrow['login'])) {
            header("location:../register.php?error=invalid");
            exit();
        }
        $result2 = $mysql->query("INSERT INTO users(`name` ,`login` ,`pass`) VALUES ('$name','$login' ,'$hash')");
        if ($result2 == 'TRUE') {
            echo "<p>Вы успешно зарегистрированы! Теперь вы можете зайти на сайт через <a href='lk.php'>личный кабинет</a></p>";
            header("location:../lk.php?error=none");
        } else {
            header("location:../register.php?error=fatal");

        }
        $mysql->close();
    }
}




