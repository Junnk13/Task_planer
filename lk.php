<?php
$title = 'Личный кабинет';
require 'header.php';

?>
    <body>
    <div class="container">
        <?php
        if (empty($_SESSION['login'])) {
            ?>
            <h1>Авторизация</h1>
            <form action="login.php" method="post">
                <label>Логин<br><input type="text" name="login" id="input" placeholder="Ваш логин"></label><br>
                <label>Пароль<br><input type="password" name="password" id="input" placeholder="Пароль"></label><br>
                <button type="submit" name="auth">Войти</button>
            </form><p>Вы вошли на сайт, как гость<br>Еще не зарегистрированы ? <a href="register.php">Регистрация !</a></p>
            <?php
        } else {
            ?><p style='text-align: center'>Вы вошли на сайт, как <?= $_SESSION['name'] ?><br>Для выхода нажмите <a
                    href="exit.php">здесь</a></p>
            <?php
        }
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "empty") {
                ?><p>Вы ввели не всю информацию, заполните все поля!</p>
                <?php
            } elseif ($_GET["error"] == "invalid") {
                ?><p> Login или пароль введен неверно !</p>
                <?php
            } elseif ($_GET["error"] == "none") {
                ?><p>Вы успешно зарегистрированы! Теперь вы можете зайти на сайт </p>
                <?php
            }
        }
        ?>
    </div>

<?php
require "footer.html";