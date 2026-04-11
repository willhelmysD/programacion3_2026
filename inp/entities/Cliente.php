<?php

class Cliente
{
    private $nombre;
    private $apellido;
    private $cc;
    private $cel;
    private $id;

    public function __construct($nombre = null, $apellido = null, $cc = null, $cel = null, $id = null)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cc = $cc;
        $this->cel = $cel;
        $this->id = $id;
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

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
    }

    public function getCc()
    {
        return $this->cc;
    }

    public function setCc($cc)
    {
        $this->cc = $cc;
        return $this;
    }

    public function getCel()
    {
        return $this->cel;
    }

    public function setCel($cel)
    {
        $this->cel = $cel;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}