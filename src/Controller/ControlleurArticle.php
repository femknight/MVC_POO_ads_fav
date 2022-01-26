<?php

class ControlleurArticle{

    public $modele="article";
    function show(){
        $modele="article";
        $articles = $this->Modele->show();
        $articles->$task($id);
    }
}