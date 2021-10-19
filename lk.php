<?php
$title = 'Личный кабинет';
require 'header.php';

?>
    <body>
    <div class="container">
        <?php
        if (empty($_SESSION['login'])) {
            echo '   
    <h1>Авторизация</h1>
        <form action="login.php" method="post">
           <label>Логин<br><input type="text" name="login" id="task" placeholder="Ваш логин"></label><br>
            <label>Пароль<br><input type="password" name="password" id="task" placeholder="Пароль"></label><br>
            <button type="submit" name="auth">Войти</button>
        </form>' . "<p>Вы вошли на сайт, как гость<br>Еще не зарегистрированы ? " . '<a href= "register.php">Регистрация !</a> </p>';
        } else {
            echo "<p style='text-align: center'>Вы вошли на сайт, как " . $_SESSION['name'] . "<br>Для выхода нажмите " . '<a href="exit.php">здесь</a></p>';
        }
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "empty") {
                echo "<p>Вы ввели не всю информацию, заполните все поля!</p>";
            } elseif ($_GET["error"] == "invalid") {
                echo "<p> Login или пароль введен неверно !</p>";
            } elseif ($_GET["error"] == "none") {
                echo "<p>Вы успешно зарегистрированы! Теперь вы можете зайти на сайт </p>";
            }
        }
        ?>
    </div>
    </body>
<?php
require "footer.html";