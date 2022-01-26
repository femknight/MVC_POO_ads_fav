<?php

include ("./../src/Base.php");
include("./../src/Entity/Articles.php");
class Application {
   
    static function process(){
        echo "test";
        $task="show";
       
        if(!empty($_GET['controlleur'])){
            $controlleur=$_GET['controlleur'];
        }
        if(!empty($_GET['task'])){
            $task=$_GET['task'];
        }

        if(!empty($_GET['id'])){
            $id=$_GET['id'];
        }

        $articles= new Ads(); // on cherche en BD les articles
        $articles->$task($id);

    }
}