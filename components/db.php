<?php

class Db
{
    public static function getConnection()
    {
        $db = new PDO("mysql:host=localhost;dbname=mvc_site", "root", "");
        return $db;
    }
}