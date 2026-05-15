<?php

class Empleado
{
    private $empleado_id;
    private $nombre;
    private $cargo;
    private $celular;

    public function __construct($empleado_id = null, $nombre = null, $cargo = null, $celular = null)
    {
        $this->empleado_id = $empleado_id;
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->celular = $celular;
    }

    public function getEmpleado_id()
    {
        return $this->empleado_id;
    }

    public function setEmpleado_id($empleado_id)
    {
        $this->empleado_id = $empleado_id;
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
        return $this;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
        return $this;
    }
}