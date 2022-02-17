<?php

class DataBaseHandler
{
    private function connect()
    {
        try {
            $username = "root";
            $password = "BMW530GranTurismo**";
            $dataBaseHandler = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
            return $dataBaseHandler;
        } catch (PDOException $exception) {
            print "Error: " . $exception->getMessage() . "<br/>";
            die;
        }
    }
}