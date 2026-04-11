<?php
require_once 'entities/Nota.php';
require_once 'core/leerCsv.php';
class IndexController{
    private $leer;
    public function __construct(){
        $this->leer = new LeerCsv();
    }
    public function Inicio(){        
        require_once "view/indexView.php";
    }
    
    public function ruta2(){
        require_once "view/sistemas/ruta2View.php";
    }

    public function ruta3(){
        require_once "view/sistemas/ruta3View.php";
    }

    public function csv(){
        $cont = 0;
        $curso1 = "9790B";
        $curso2 = "4630B";
        $curso3 = "9797B";
        $curso4 = "9815B";
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
                                    break;
                                case $curso2:
                                    $estu->setCurso2($filas[5]);
                                    break;
                                case $curso3:
                                    $estu->setCurso3($filas[5]);
                                    break;  
                                case $curso4:
                                    $estu->setCurso4($filas[5]);
                                    break;                                                                                                                       
                            }
                        }                        
                    }
                $array_notas[] = $estu;                                        
            }
            require_once "view/rtaView.php";
        } else {
                echo "Error al abrir el archivo";
        }
    }
    public function csv2(){
        $cont = 0;
        $curso1 = "4642B";
        $curso2 = "4643B";

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
                                break;
                            case $curso2:
                                $estu->setCurso2($filas[5]);
                                break;                                                                                                                       
                        }
                    }
                        
                }
                $array_notas[] = $estu;                                        
            }
            require_once "view/sistemas/rta2View.php";
        }else{
            echo "Error al abrir el archivo";            
        }
        

    }
    public function csv3(){
        $cont = 0;
        $curso1 = "4579B";
        $curso2 = "9792B";
        $curso3 = "9794B";
        $curso4 = "9795B";
        $curso5 = "9796B";
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
                                    break;
                                case $curso2:
                                    $estu->setCurso2($filas[5]);
                                    break;
                                case $curso3:
                                    $estu->setCurso3($filas[5]);
                                    break;  
                                case $curso4:
                                    $estu->setCurso4($filas[5]);
                                    break;
                                case $curso5:
                                    $estu->setCurso4($filas[5]);
                                    break;                                                                                                                                                           
                            }
                        }                        
                    }
                $array_notas[] = $estu;                                        
            }
            require_once "view/rtaView.php";
        } else {
                echo "Error al abrir el archivo";
        }
    }     
    
}