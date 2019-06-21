<?php

class Db
{
    public static function getConnection() {
        $server = 'remotemysql.com';
        $dbname = '0EhqmC71No';
        $user = '0EhqmC71No';
        $pass = 'o8F07QaCns';
//        $server = 'sql212.epizy.com';
//        $dbname = 'b9_22959100_graphauth';
//        $user = 'b9_22959100';
//        $pass = '54985754';

        $db = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass, array( PDO::ATTR_TIMEOUT => "180", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
        $db->exec("set names utf8");

        return $db;
    }
}


?>
