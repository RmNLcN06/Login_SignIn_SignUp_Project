<?php

class Dbh 
{
    protected function connect()
    {
        try
        {
        $host = 'localhost';
        $port = '3306';
        $database = 'login';
        $username = 'root';
        $password = '';
        $dbh = new PDO("mysql:host=$host;port=$port;dbname=$database;charset=utf8", $username, $password);
        return $dbh;
        }
        catch(PDOException $e)
        {
            die('Error: ' . $e->getMessage());
        }
    }

}