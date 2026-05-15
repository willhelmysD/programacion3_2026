<?php
require_once "core/BaseDatos.php";
require_once "entities/Empleado.php";
class EmpleadoModel extends Conectar{
    public function __construct(){
        parent::__construct();
    }
    //READ
    public function findById($id){
        try{
            $sql = "select * from empleado where empleado_id = :id";				
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(':id', $id);						
            $sentencia->execute();			
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);	
            if($resultado){ 
                $empleado = new Empleado($resultado['empleado_id'], $resultado['nombre'], $resultado['cargo'], $resultado['celular']);
                return $empleado;
            }else{
                return null;
            }
        }catch(Exception $e){
            die($e->getMessage());
        }
    }    
    public function findAll(){

        try{           
            $sql = "select * from empleado"; 
            $consulta =  $this->conexion->prepare($sql);
            $consulta->execute();	
            $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);                           
            $lista = [];
            foreach ($resultados as $fila) {
                $empleado = new Empleado($fila['empleado_id'], $fila['nombre'], $fila['cargo'], $fila['celular']);
                $lista[] = $empleado;
            }
            return $lista;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    //CREATE
    public function create(Empleado $empleado){
        try{
            $sql = "INSERT INTO empleado (nombre, cargo, celular) VALUES (:nombre, :cargo, :celular)";
            $sentencia = $this->conexion->prepare($sql);	
            $sentencia->bindValue(':nombre', $empleado->getNombre());		
            $sentencia->bindValue(':cargo',$empleado->getCargo());	
            $sentencia->bindValue(':celular',$empleado->getCelular());	
            $sentencia->execute();
            $result = $this->conexion->lastInsertId();
            return $result;
        }catch(Exception $e){
            die($e->getMessage());
        }
    } 
    public function update(Objeto $objeto){
        try{
            $sql = "UPDATE tabla SET valor1 = :valor1 WHERE valorID = :id";
            $sentencia = $this->conexion->prepare($sql);	
            $sentencia->bindValue(':valor1', $objeto->getValor1);		            
            $sentencia->bindValue(':id', $estudiante->getEstudianteId());		            
            $sentencia->execute();
            return($sentencia->rowCount() > 0) ? true : false;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }     
}    