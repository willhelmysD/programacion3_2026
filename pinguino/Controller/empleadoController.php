<?php
require_once 'entities/Empleado.php';
require_once 'Model/EmpleadoModel.php';

class EmpleadoController {

    private $modelo_empleado;

    public function __construct(){
        //parent::__construct();
        
        $this->modelo_empleado = new EmpleadoModel();
        
    }    

    //get
    public function inicio(){
        $lista_empleado = $this->modelo_empleado->findAll();
        require_once "View/empleado/lista.php";
    }

    public function nuevo(){
        require_once "View/empleado/nuevo.php";
    }

    public function detalle($id){
        $datos = $this->modelo_empleado->findById($id);
        var_dump($datos);
        require_once "View/empleado/detalle.php";
    }

    //post
    public function createEmpleado(){
        if(
            isset($_POST["nombre"]) && !empty(trim($_POST["nombre"])) &&
            isset($_POST["cargo"]) && !empty(trim($_POST["apellidos"])) &&
            isset($_POST["celular"]) && !empty(trim($_POST["celular"])) 
        ){

            $nombre = trim($_POST["nombre"]);
            $cargo = trim($_POST["cargo"]);
            $celular = trim($_POST["celular"]);

            $emp = new Empleado($nombre,$cargo,$celular);
            
            $rta = $this->modelo_empleado->create($emp);


            if($rta){
                $_SESSION['msg'] = "Guardado correctamente";
                $_SESSION['tipo'] = "success";
            } else {
                $_SESSION['msg'] = "Error al guardar";
                $_SESSION['tipo'] = "danger";
            }    
            header("Location:".BASE_URL."perfil");        
                  
        } else {
            echo "Todos los campos son obligartorios";
        } 
        
    }

    public function updateEmpleado(){
        
    }

    public function deleteEmpleado(){
        
    }


    


}