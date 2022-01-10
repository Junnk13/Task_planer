<?php

class SignUp extends DbConn
{
    protected function setUser($name, $login, $password)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (name ,login ,pass) VALUES (?,?,?);');
        $hashPwd = password_hash($password, PASSWORD_DEFAULT);
        if (!$stmt->execute([$name, $login, $hashPwd])) {
            $stmt = null;
            header("location:../register.php?error=invalid");
            exit();
        }
        $stmt = null;
    }

    protected function checkLogin($login)
    {
        $stmt = $this->connect()->prepare('SELECT login FROM users WHERE login =?;');
        if (!$stmt->execute([$login])) {
            $stmt = null;
            header("location:../register.php?error=invalid");
            exit();
        }
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}