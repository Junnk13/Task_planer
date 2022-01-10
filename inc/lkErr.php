<?php

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