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
        //validaciones.
        //$
        $tipos = $_POST['tipo'];
        $horas = $_POST['horas'];
        $cc = $_POST['cc'];
        $total = 0;
        

        switch($tipos){
            case '1':
                $total = $horas * 50;
                break;
            case '2':
                $total = $horas * 150;
                break;
            case '3':
                $total = $horas * 250;
                break;
            default: 
                echo "opcion no validad";
                break;                                    
        }
        $reporte = new Registro($horas, $tipos, $cc, $total);
        //enviar a base de datos. 
        require_once "view/reportes/rtaView.php";
        
    }

}
