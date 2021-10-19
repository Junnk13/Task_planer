<?php
$title = 'Список дел';
require 'header.php';
?>
    <body>
    <div class="container">
        <h1>Список дел</h1>
        <form action="add.php" method="post">
            <label><input type="text" name="task_name" id="task" placeholder="Что нужно сделать"></label>
            <?php if (empty($_SESSION['login'])) {
                echo '<button type="submit" name="send_task" disabled>Оформить</button>';
            } else
                echo '<button type="submit" name="send_task">Оформить</button>';
            ?>
        </form>
        <?php
        if (empty($_SESSION['login']))
            echo '<p>Для получения доступа к задачам - зарегестрируйтесь на сайте</p>';
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "empty")
                echo "<p>Введите что нужно сделать</p>";
        }
        ?>
    </div>
    </body>
<?php
require "footer.html";
