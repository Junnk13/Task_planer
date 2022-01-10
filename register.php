<?php
$title = 'Форма регистрации';
require "inc/header.php";
?>

<div class="container">

    <h1>Регистрация</h1>
    <form class="form" action="signUp.php" method="post" name="registerform">
        <label>Имя пользователя<br>
            <input class="input" id="input" name="user_name" type="text" placeholder="Введите имя"></label><br>
        <label>Логин<br>
            <input class="input" id="input" name="user_login" type="text" placeholder="Введите логин"></label><br>
        <label>Пароль<br>
            <input class="input" id="input" name="password" type="password" placeholder="Введите пароль"></label><br>
        <button type="submit" name="register">Зарегистрироваться</button>
        <p>Уже зарегистрированы? <a href="lk.php">Введите имя пользователя</a>!</p>
    </form>
    <?php
    require_once "inc/regiterErr.php";
    ?>
</div>
<?php
require "inc/footer.html";




