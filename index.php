<?php
$title = 'Список дел';
require "inc/header.php";
?>
<div class="container">
    <h1>Список дел</h1>
    <div class="form">
        <label><input type="text" name="task_name" id="input" placeholder="Что нужно сделать"></label>
        <?php if (empty($_SESSION['login'])){
        ?>
        <button onclick="logInPls()">Оформить</button>
    </div>
    <?php
    } else {
        ?>
        <button onclick="addTask()">Оформить</button>
    </div>
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
require "inc/footer.html";
