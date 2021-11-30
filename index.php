<?php
$title = 'Список дел';
require 'header.php';
?>

    <body>
<div class="container">
    <h1>Список дел</h1>
    <form action="add.php" method="post">
        <label><input type="text" name="task_name" id="input" placeholder="Что нужно сделать"></label>
        <?php if (empty($_SESSION['login'])){
        ?>
        <button type="submit" name="send_task" disabled>Оформить</button>
    </form>
    <?php
    } else {
        ?>
        <button type="submit" name="send_task">Оформить</button>
        </form>

        <?php
    }
    if (empty($_SESSION['login']))
        :?>
        <p>Для получения доступа к задачам - зарегестрируйтесь на сайте</p>
    <?php
    endif;
    if (isset($_GET["error"]) && isset($_SESSION['login'])) {
        if ($_GET["error"] == "empty")
            :?>
            <p>Введите что нужно сделать</p>
        <?php

        endif;
    }
    ?>
</div>

<?php
require "footer.html";
