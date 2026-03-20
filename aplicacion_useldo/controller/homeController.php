<?php
require_once "core/Controller.php";

class HomeController extends Controller{
    
    public function __construct(){
        parent::__construct();
        $this->auth();
    }

    public function Inicio(){
        require_once "view/homeView.php";
        var_dump($_SESSION);
    }    

}
