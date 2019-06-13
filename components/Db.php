<?php

class Db
{
    public static function getConnection() {
        $server = 'remotemysql.com';
        $dbname = '0EhqmC71No';
        $user = '0EhqmC71No';
        $pass = 'o8F07QaCns';

        $db = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
        $db->exec("set names utf8");

        return $db;
    }
}


?>
