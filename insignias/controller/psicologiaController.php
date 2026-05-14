<?php
require_once 'entities/Nota.php';
require_once 'core/leerCsv.php';
class PsicologiaController{
    private $leer;
    public function __construct(){
        $this->leer = new LeerCsv();
    }
    public function ruta1(){        
        require_once "view/Psicologia/ruta1View.php";
    }
    
    public function ruta2(){
        require_once "view/Psicologia/ruta2View.php";
    }

    public function ruta3(){
        require_once "view/Psicologia/ruta3View.php";
    }


    public function csv1(){
        $cont = 0;
        $curso1 = "9817B";
        $curso2 = "5561B";
        $curso3 = "9823B";
        $curso4 = "9827B";
        $curso5 = "9819B";
        $curso6 = "9828B";
        $curso7 = "9833B";    
        $curso8 = "9842B";
        $curso9 = "9841B"; 
        $curso10 = "";            

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
                                $estu->setPeriodo7($filas[7]);
                            break;
                            case $curso9:
                                $estu->setCurso9($filas[5]);
                                $estu->setPeriodo7($filas[7]);
                            break;  
                            default:
                                $estu->setCurso10($filas[5]);
                                $estu->setPeriodo10($filas[7]);
                                break;                                                                                                                                                                                                         
                        }
                    }
                        
                }
                $array_notas[] = $estu;                                        
            }
            require_once "view/Psicologia/rta1View.php";
        }else{
            echo "Error al abrir el archivo";            
        }
        

    }

    public function csv2(){
        $cont = 0;
        $curso1 = "9825B";
        $curso2 = "9821B";
        $curso3 = "9832B";
        $curso4 = "9837B";
        $curso5 = "9834B";
        $curso6 = "9840B";
        $curso7 = "9847B";            

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
                        }
                    }
                        
                }
                $array_notas[] = $estu;                                        
            }
            require_once "view/Psicologia/rta2View.php";
        }else{
            echo "Error al abrir el archivo";            
        }
    }

    public function csv3(){
        $cont = 0;
        $curso1 = "9846B";
        $curso2 = "5574B";
        $curso3 = "9844B";
        $curso4 = "";
        
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
            require_once "view/Psicologia/rta3View.php";
        } else {
                echo "Error al abrir el archivo";
        }
    }     
    
}