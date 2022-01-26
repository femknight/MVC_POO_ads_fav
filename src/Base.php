<?php

class Base {
     static function getPDO(){
{
    $dsn = 'mysql:dbname=ads;host=localhost:8889';
    $user = 'root';
    $password = 'root';

    try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->exec('SET NAMES utf8');
        $pdo->setAttribute(
            PDO::ATTR_DEFAULT_FETCH_MODE,
            PDO::FETCH_ASSOC
        );
        return $pdo;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

     }
}