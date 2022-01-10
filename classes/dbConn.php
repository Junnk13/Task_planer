<?php

class DbConn
{
    protected function connect()
    {
        try {
            $username = "mysql";
            $pass = "";
            $dbConn = new PDO('mysql:hast=TaskPlaner.ru;dbname=php-sql', $username, $pass);
            return $dbConn;
        } catch (PDOException $e) {
            print "Error: " . $e->getMessage() . "<br>";
            die();
        }
    }
}