<?php

class Tasks extends DbConn
{
    public function getTask($sesLog)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM task WHERE user_login=?;');
        if (!$stmt->execute([$sesLog])) {
            $stmt = null;
            header("location:../lk.php?error=invalid");
            exit();
        }
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while ($task = $stmt->fetch()) {
            ?>
            <li class="border"><?= $task['tasks'] ?>
                <button onclick="deleteTask(<?= $task['id'] ?>)">Удалить</button>
            </li>
            <?php
        }
        $stmt = null;
    }
}