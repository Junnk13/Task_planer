<?php
$title = 'Личный кабинет';
require "inc/header.php";

?>

<div class="container">
    <?php
    if (empty($_SESSION['login'])) {
        ?>
        <h1>Авторизация</h1>
        <form  class="form" action="login.php" method="post">
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
    require_once "inc/lkErr.php";
        ?>
</div>
<?php
require "inc/footer.html";