<?php

class Registro
{
    private $horas;
    private $tipo;
    private $cc;
    private $total;

    public function __construct($horas = null, $tipo = null, $cc = null, $total = null)
    {
        $this->horas = $horas;
        $this->tipo = $tipo;
        $this->cc = $cc;
        $this->total = $total;
    }

    public function getHoras()
    {
        return $this->horas;
    }

    public function setHoras($horas)
    {
        $this->horas = $horas;
        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
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

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }
}