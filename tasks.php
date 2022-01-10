<?php
session_start();
$title = 'Задачи';
require "inc/header.php";
require "classes/dbConn.php";
require "classes/taskClass.php";

$sesLog = $_SESSION['login'];
$tasks = new Tasks;
?>
    <div id="tasks">
        <?php
        $tasks->getTask($sesLog);
        ?>
    </div>
<?php
require "inc/footer.html";