<?php
$title = 'Форма регистрации';
require 'header.php';
?>
    <body>
<div class="container">

    <h1>Регистрация</h1>
    <form action="signUp.php" method="post" name="registerform">
        <label>Имя пользователя<br>
            <input class="input" id="task" name="user_name" type="text" placeholder="Введите имя"></label><br>
        <label>Логин<br>
            <input class="input" id="task" name="user_login" type="text" placeholder="Введите логин"></label><br>
        <label>Пароль<br>
            <input class="input" id="task" name="password" type="password" placeholder="Введите пароль"></label><br>
        <button type="submit" name="register">Зарегистрироваться</button>
        <p>Уже зарегистрированы? <a href="lk.php">Введите имя пользователя</a>!</p>
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "empty") {
            ?>
            <p>Вы ввели не всю информацию, заполните все поля!</p>
            <?php
        } elseif ($_GET["error"] == "invalid") {
            ?>
            <p>Извините, введённый вами логин уже зарегистрирован. Введите другой логин.</p>
            <?php
        } elseif ($_GET["error"] == "fatal") {
            ?><p>Ошибка! Вы не зарегистрированы.</p>
            <?php
        } elseif ($_GET["error"] =="ln"){
            ?><p>Имя слишком короткое !</p>
            <?php
        }elseif ($_GET["error"]=="lp"){
            ?><p>Пароль слишком короткий !</p>
            <?php
        }

    }
    ?>
</div>
<?php
require "footer.html";




