<?php
require_once 'entities/Nota.php';
require_once 'core/leerCsv.php';
class IndustrialController{
    private $leer;
    public function __construct(){
        $this->leer = new LeerCsv();
    }
    public function ruta1(){        
        require_once "view/industrial/ruta1View.php";
    }
    
    public function ruta2(){
        require_once "view/industrial/ruta2View.php";
    }

    public function ruta3(){
        require_once "view/industrial/ruta3View.php";
    }

    public function csv1(){
        $cont = 0;
        $curso1 = "9732B";
        $curso2 = "8123B";
        $curso3 = "8130B";
        
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
                            }
                        }                        
                    }
                $array_notas[] = $estu;                                        
            }
            require_once "view/industrial/rta1View.php";
        } else {
                echo "Error al abrir el archivo";
        }
    }
    public function csv2(){
        $cont = 0;
        $curso1 = "8114B";
        $curso2 = "8116B";
        $curso3 = "9736B";
        $curso4 = "8121B";
        $curso5 = "8127B";
        $curso6 = "8128B";
        $curso7 = "9746B";    
        $curso8 = "8131B";
        $curso9 = "8133B";            

        $vector_cc = array();
        $array =  array();
        $array_notas =  array();

        if(isset($_FILES['csv'])) {
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
                            case $curso8:
                                $estu->setCurso8($filas[5]);
                                $estu->setPeriodo8($filas[7]);
                            break;
                            case $curso9:
                                $estu->setCurso9($filas[5]);
                                $estu->setPeriodo9($filas[7]);
                            break;                                                                                                                                                                                                           
                        }
                    }
                        
                }
                $array_notas[] = $estu;                                        
            }
            require_once "view/industrial/rta2View.php";
        }else{
            echo "Error al abrir el archivo";            
        }
        

    }
    public function csv3(){
        $cont = 0;
        $curso1 = "4389B";
        $curso2 = "4382B";
        $curso3 = "8125B";
        $curso4 = "8129B";
        
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
            require_once "view/industrial/rta3View.php";
        } else {
                echo "Error al abrir el archivo";
        }
    }     
    
}