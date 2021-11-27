<?php
session_start();
$title = 'Задачи';
require "header.php";
require "DBconnection.php";

$sesLog = $_SESSION['login'];

$result = $mysql->query("SELECT * FROM `task` WHERE `user_login`='$sesLog'");

while ($row = $result->fetch_assoc())
    :?>
    <li class="border"><?= $row['tasks'] ?><a href="/delete.php?id=<?= $row['id'] ?>">
            <button>Удалить</a></button></li>
<?php

endwhile;

$mysql->close();

require "footer.html";