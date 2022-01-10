<?php

class Add extends DbConn{
    public function __construct($login, $task)
    {
        $task=htmlspecialchars($task);
        $stmt = $this->connect()->prepare("INSERT INTO task(user_login,tasks) VALUES (?,? );");

        if (!$stmt->execute([$login,$task])) {
            $stmt = null;
            header("location:../index.php?error=empty");
            exit();
        }
    }
}