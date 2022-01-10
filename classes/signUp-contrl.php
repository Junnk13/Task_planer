<?php

class SignUpControl extends SignUp
{
    private $login;
    private $name;
    private $password;

    public function __construct($login, $name, $password)
    {
        $this->login = $login;
        $this->name = $name;
        $this->password = $password;
    }

    public function signUpUser()
    {
        if ($this->emptyInput() == false) {
            header("location:../register.php?error=empty");
            exit();
        }
        if ($this->invalidLogin() == false) {
            header("location:../register.php?error=login");
            exit();
        }
        if ($this->invalidName() == false) {
            header("location:../register.php?error=name");
            exit();
        }
        if ($this->loginTakenCheck() == false) {
            header("location:../register.php?error=logintaken");
            exit();
        }
        if ($this->shortName() == false) {
            header("location:../register.php?error=ln");
            exit();
        }
        if ($this->shortPass() == false) {
            header("Location:../register.php?error=lp");
            exit();
        }

        $this->setUser($this->name, $this->login, $this->password);
    }

    private function emptyInput()
    {
        if (empty($this->login) || empty($this->name) || empty($this->password)) {
            $result = false;

        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidLogin()
    {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->login)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidName()
    {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->name)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function loginTakenCheck()
    {
        if (!$this->checkLogin($this->login)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function shortName()
    {
        if (mb_strlen($this->name) <= 1) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function shortPass()
    {
        if (mb_strlen($this->password) <= 5) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
