<?php

class Login extends DbConn
{
    protected function getUser($login, $password)
    {
        $stmt = $this->connect()->prepare('SELECT pass FROM users WHERE login=?;');

        if (!$stmt->execute([$login])) {
            $stmt = null;
            header("location:../lk.php?error=invalid");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("Location:../lk.php?error=invalid");
            exit();
        }
        $hashPwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPass = password_verify($password, $hashPwd[0]["pass"]);

        if ($checkPass == false) {
            $stmt = null;
            header("Location:../lk.php?error=invalid");
            exit();
        } else {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE login=? AND pass=?;');
            if (!$stmt->execute([$login, $hashPwd[0]["pass"]])) {
                $stmt = null;
                header("location:../lk.php?error=invalid");
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("Location:../lk.php?error=invalid");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['name'] = $user[0]["name"];
            $_SESSION['login'] = $user[0]["login"];
            $stmt = null;
        }
    }
}