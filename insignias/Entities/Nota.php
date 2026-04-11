<?php

class Nota
{
    private $cc;
    private $estudiante;
    private $curso1;
    private $curso2;
    private $curso3;
    private $curso4;
    private $curso5;

    public function __construct($cc = null, $estudiante = null, $curso1 = null, $curso2 = null, $curso3 = null, $curso4 = null, $curso5 = null)
    {
        $this->cc = $cc;
        $this->estudiante = $estudiante;
        $this->curso1 = $curso1;
        $this->curso2 = $curso2;
        $this->curso3 = $curso3;
        $this->curso4 = $curso4;
        $this->curso5 = $curso5;
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

    public function getEstudiante()
    {
        return $this->estudiante;
    }

    public function setEstudiante($estudiante)
    {
        $this->estudiante = $estudiante;
        return $this;
    }

    public function getCurso1()
    {
        return $this->curso1;
    }

    public function setCurso1($curso1)
    {
        $this->curso1 = $curso1;
        return $this;
    }

    public function getCurso2()
    {
        return $this->curso2;
    }

    public function setCurso2($curso2)
    {
        $this->curso2 = $curso2;
        return $this;
    }

    public function getCurso3()
    {
        return $this->curso3;
    }

    public function setCurso3($curso3)
    {
        $this->curso3 = $curso3;
        return $this;
    }

    public function getCurso4()
    {
        return $this->curso4;
    }

    public function setCurso4($curso4)
    {
        $this->curso4 = $curso4;
        return $this;
    }

    public function getCurso5()
    {
        return $this->curso5;
    }

    public function setCurso5($curso5)
    {
        $this->curso5 = $curso5;
        return $this;
    }
}