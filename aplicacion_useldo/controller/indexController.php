<?php
class IndexController {
    public function __construct(){
        #
    }
    public function Inicio(){
        require_once "view/page/indexView.php";
    }   

    public function About(){
        require_once "view/page/aboutView.php";
    }
}