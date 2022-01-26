<?php
require_once("./../src/Base.php");
require_once('./../src/Entity/Commentaires.php'); 
require_once ('./../src/Entity/Modele.php');
class Articles { 
    public $pdo;

    function __construct()
    {
        $this->pdo = Base::getPDO();
    }
    function show(){ 
    $sql= "SELECT * from ads.`Ads`";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute();
    $articles= $stmt->fetchAll();
    include ("./../templates/articles/index.php");
}

function showbyId($id){ 
    $sql= "SELECT * from ads.`Ads` where id= :id";
    $stmt= $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $articles= $stmt->fetch();
    include ("../templates/articles/index.php");
}

}