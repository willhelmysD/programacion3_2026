<?php
class IndexController {
    public function __construct(){
        #
    }
    public function Inicio(){        
        require_once "view/indexView.php";
    }   

    public function Autor(){
        echo "Will";
        //require_once "view/page/aboutView.php";
    }

    public function Contacto(){
        echo "contacto";
        //require_once "view/page/aboutView.php";
    }
}