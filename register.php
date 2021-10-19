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
            echo "<p>Вы ввели не всю информацию, заполните все поля!</p>";
        } elseif ($_GET["error"] == "invalid") {
            echo "<p>Извините, введённый вами логин уже зарегистрирован. Введите другой логин.</p>";
        } elseif ($_GET["error"] == "fatal") {
            echo "<p>Ошибка! Вы не зарегистрированы.</p>";
        } elseif ($_GET["error"] == "ln") {
            echo "<p>Имя слишком короткое !</p>";
        } elseif ($_GET["error"] == "lp") {
            echo "<p>Пароль слишком короткий !</p>";
        }

    }
    ?>
</div>
<?php
require "footer.html";




