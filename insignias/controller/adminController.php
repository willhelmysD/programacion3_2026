<?php
require_once 'entities/Nota.php';
require_once 'core/leerCsv.php';
class AdminController{
    private $leer;
    public function __construct(){
        $this->leer = new LeerCsv();
    }
    public function ruta1(){        
        require_once "view/admin/ruta1View.php";
    }
    
    public function ruta2(){
        require_once "view/admin/ruta2View.php";
    }

    public function ruta3(){
        require_once "view/admin/ruta3View.php";
    }

    public function csv1(){
        $cont = 0;
        $curso1 = "8233B";
        $curso2 = "8111B";
        $curso3 = "5721B";
        $curso4 = "8153B";
        $curso5 = "8158B";
        $curso6 = "8029B";
        $curso7 = "";

        $vector_cc = array();
        $array =  array();
        $array_notas =  array();

        if (isset($_FILES['csv'])){
            $archivo = $_FILES['csv']['tmp_name'];
            $array = $this->leer->matrizDatos($archivo);
            $vector_lista_cc = $this->leer->vectorCc($archivo);
            foreach($vector_lista_cc as $fila){
                $estu = new Nota();
                $estu->setcc($fila);                    
                    foreach($array as $filas){                            
                        if($filas[0]==$fila){
                            $estu->setEstudiante($filas[1]);
                            switch($filas[4]){
                                case $curso1:
                                    $estu->setCurso1($filas[5]);
                                    $estu->setPeriodo1($filas[7]);
                                    break;
                                case $curso2:
                                    $estu->setCurso2($filas[5]);
                                    $estu->setPeriodo2($filas[7]);
                                    break;
                                case $curso3:
                                    $estu->setCurso3($filas[5]);
                                    $estu->setPeriodo3($filas[7]);
                                    break;  
                                case $curso4:
                                    $estu->setCurso4($filas[5]);
                                    $estu->setPeriodo4($filas[7]);
                                    break;  
                                case $curso5:
                                    $estu->setCurso5($filas[5]);
                                    $estu->setPeriodo5($filas[7]);
                                    break;   
                                case $curso6:
                                    $estu->setCurso6($filas[5]);
                                    $estu->setPeriodo6($filas[7]);
                                    break;                                                                       
                                default:
                                    $estu->setCurso7($filas[5]);
                                    $estu->setPeriodo7($filas[7]);
                                break;
                                    
                            }
                        }                        
                    }
                $array_notas[] = $estu;                                        
            }
            require_once "view/admin/rta1View.php";
        } else {
                echo "Error al abrir el archivo";
        }
    }

    public function csv2(){
        $cont = 0;
        $curso1 = "4346B";
        $curso2 = "4368B";
        $curso3 = "8033B";
        $curso4 = "4372B";

        $vector_cc = array();
        $array =  array();
        $array_notas =  array();        

        if (isset($_FILES['csv'])){
            $archivo = $_FILES['csv']['tmp_name'];
            $array = $this->leer->matrizDatos($archivo);
            $vector_lista_cc = $this->leer->vectorCc($archivo);
            foreach($vector_lista_cc as $fila){
                $estu = new Nota();
                $estu->setcc($fila);                    
                    foreach($array as $filas){                            
                        if($filas[0]==$fila){
                            $estu->setEstudiante($filas[1]);
                            switch($filas[4]){
                                case $curso1:
                                    $estu->setCurso1($filas[5]);
                                    $estu->setPeriodo1($filas[7]);
                                    break;
                                case $curso2:
                                    $estu->setCurso2($filas[5]);
                                    $estu->setPeriodo2($filas[7]);
                                    break;
                                case $curso3:
                                    $estu->setCurso3($filas[5]);
                                    $estu->setPeriodo3($filas[7]);
                                    break;  
                                case $curso4:
                                    $estu->setCurso4($filas[5]);
                                    $estu->setPeriodo4($filas[7]);
                                    break;                                      
                            }
                        }                        
                    }
                $array_notas[] = $estu;                                        
            }
            require_once "view/admin/rta2View.php";
        } else {
                echo "Error al abrir el archivo";
        }


    }

    public function csv3(){
        $cont = 0;
        $curso1 = "5213B";
        $curso2 = "5808B";
        $curso3 = "8155B";
        $curso4 = "5725B";
        $curso5 = "1752B";
        $curso6 = "8023B";
        $curso7 = "8024B";

        $vector_cc = array();
        $array =  array();
        $array_notas =  array();

        if (isset($_FILES['csv'])){
            $archivo = $_FILES['csv']['tmp_name'];
            $array = $this->leer->matrizDatos($archivo);
            $vector_lista_cc = $this->leer->vectorCc($archivo);
            foreach($vector_lista_cc as $fila){
                $estu = new Nota();
                $estu->setcc($fila);                    
                    foreach($array as $filas){                            
                        if($filas[0]==$fila){
                            $estu->setEstudiante($filas[1]);
                            switch($filas[4]){
                                case $curso1:
                                    $estu->setCurso1($filas[5]);
                                    $estu->setPeriodo1($filas[7]);
                                    break;
                                case $curso2:
                                    $estu->setCurso2($filas[5]);
                                    $estu->setPeriodo2($filas[7]);
                                    break;
                                case $curso3:
                                    $estu->setCurso3($filas[5]);
                                    $estu->setPeriodo3($filas[7]);
                                    break;  
                                case $curso4:
                                    $estu->setCurso4($filas[5]);
                                    $estu->setPeriodo4($filas[7]);
                                    break;  
                                case $curso5:
                                    $estu->setCurso5($filas[5]);
                                    $estu->setPeriodo5($filas[7]);
                                    break;   
                                case $curso6:
                                    $estu->setCurso6($filas[5]);
                                    $estu->setPeriodo6($filas[7]);
                                    break;                                                                       
                                case $curso7:
                                    $estu->setCurso7($filas[5]);
                                    $estu->setPeriodo7($filas[7]);
                                break;                                    
                            }
                        }                        
                    }
                $array_notas[] = $estu;                                        
            }
            require_once "view/admin/rta3View.php";
        } else {
                echo "Error al abrir el archivo";
        }
    }
    
}