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
            <li class="border"><?= $task['tasks'] ?><a href="/delete.php?id=<?= $task['id'] ?>">
                    <button>Удалить
                </a></button></li>
            <?php
        }
        $stmt = null;
    }
}