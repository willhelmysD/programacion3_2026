<?php
//require_once "core/controller.php"; //#
require_once 'model/CotizacionModel.php'; //#
class calcularController {

    private $modelo_cotizacion;//#

    public function __construct(){
        //parent::__construct(); //#
        $this->modelo_cotizacion = new CotizacionModel();//#
    }

    public function Inicio(){        
        require_once "view/calcular/indexView.php";
    }   

    public function Calculo(){
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validar campo obligatorio y tipo
            if (
                (empty(trim($_POST["altura"])) || !is_numeric($_POST["altura"])) ||
                empty(trim($_POST["ancho"])) || !is_numeric($_POST["ancho"]) ||
                empty(trim($_POST["tipo"]))

                ) {
                
                echo $error = "La altura y el ancho deben ser un número";
            } else {
                $altura = $_POST["altura"];
                $ancho = $_POST["ancho"];
                $tipo = $_POST["tipo"];
                

                $area = $altura * $ancho;

                switch($tipo){
                    case 1:
                        $total_ladrillo = $area * 50;
                        $total_cemento = $area * 9;
                        $total_arena = $area * 0.021;

                        $precio_ladrillo = 1300;
                        $precio_cemento = 35000;
                        $precio_arena = 5000;
                        
                        $total_precio_ladrillo = $precio_ladrillo * $total_ladrillo;
                        $total_precio_cemento = $precio_cemento * $total_cemento;
                        $total_precio_arena = $precio_arena * $total_arena;
                        $total = $total_precio_ladrillo + $total_precio_arena + $total_precio_cemento;
                        
                        //$cotizacion = new Cotizacion(null,$area,date('y-m-d'),$total,$tipo,null);
                        

                        require_once "view/calcular/paredView.php";
                        break;
                    case 2:

                        break;
                    case 3:

                        break;
                    case 4:

                        break;                                                                    
                    default:

                        break;

                }


            }
        }        
        //require_once "view/page/aboutView.php";
    }

    public function guardar(){
        
    }

}