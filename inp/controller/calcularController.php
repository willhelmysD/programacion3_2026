<?php
class calcularController {
    public function __construct(){
        #
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
                var_dump($_POST);
            }
        }        
        //require_once "view/page/aboutView.php";
    }

}