<?php
require_once "core/Controller.php";

class ReportesController extends Controller{
    
    public function __construct(){
        parent::__construct();
        //$this->auth();
    }

    public function Inicio(){
        require_once "view/reportes/indexView.php";
        
    } 
    
    public function calcular(){
        var_dump($_POST);
    }

}
