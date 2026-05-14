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
    private $curso6;
    private $curso7;
    private $curso8;
    private $curso9;
    private $curso10;
    private $periodo1;
    private $periodo2;
    private $periodo3;
    private $periodo4;
    private $periodo5;
    private $periodo6;
    private $periodo7;
    private $periodo8;
    private $periodo9;
    private $periodo10;

 public function __construct(
        $cc = null, 
        $estudiante = null, 
        $curso1 = null, 
        $curso2 = null, 
        $curso3 = null, 
        $curso4 = null, 
        $curso5 = null,
        $curso6 = null, 
        $curso7 = null, 
        $curso8 = null, 
        $curso9 = null, 
        $curso10 = null,
        $periodo1 = null,
        $periodo2 = null,
        $periodo3 = null,
        $periodo4 = null,
        $periodo5 = null,
        $periodo6 = null,
        $periodo7 = null,
        $periodo8 = null,
        $periodo9 = null,
        $periodo10 = null,        
        )
    {
        $this->cc = $cc;
        $this->estudiante = $estudiante;
        $this->curso1 = $curso1;
        $this->curso2 = $curso2;
        $this->curso3 = $curso3;
        $this->curso4 = $curso4;
        $this->curso5 = $curso5;
        $this->curso6 = $curso6;
        $this->curso7 = $curso7;
        $this->curso8 = $curso8;
        $this->curso9 = $curso9;
        $this->curso10 = $curso10;        
        $this->periodo1 = $periodo1;
        $this->periodo2 = $periodo2;
        $this->periodo3 = $periodo3;
        $this->periodo4 = $periodo4;
        $this->periodo5 = $periodo5;
        $this->periodo6 = $periodo6;
        $this->periodo7 = $periodo7;
        $this->periodo8 = $periodo8;
        $this->periodo9 = $periodo9;
        $this->periodo10 = $periodo10;        
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

    public function getCurso6()
    {
        return $this->curso6;
    }

    public function setCurso6($curso6)
    {
        $this->curso6 = $curso6;
        return $this;
    }

    public function getCurso7()
    {
        return $this->curso7;
    }

    public function setCurso7($curso7)
    {
        $this->curso7 = $curso7;
        return $this;
    }

    public function getCurso8()
    {
        return $this->curso8;
    }

    public function setCurso8($curso8)
    {
        $this->curso8 = $curso8;
        return $this;
    }

    public function getCurso9()
    {
        return $this->curso9;
    }

    public function setCurso9($curso9)
    {
        $this->curso9 = $curso9;
        return $this;
    }

    public function getCurso10()
    {
        return $this->curso10;
    }

    public function setCurso10($curso10)
    {
        $this->curso10 = $curso10;
        return $this;
    }

    public function getPeriodo1()
    {
        return $this->periodo1;
    }

    public function setPeriodo1($periodo1)
    {
        $this->periodo1 = $periodo1;
        return $this;
    }

    public function getPeriodo2()
    {
        return $this->periodo2;
    }

    public function setPeriodo2($periodo2)
    {
        $this->periodo2 = $periodo2;
        return $this;
    }

    public function getPeriodo3()
    {
        return $this->periodo3;
    }

    public function setPeriodo3($periodo3)
    {
        $this->periodo3 = $periodo3;
        return $this;
    }

    public function getPeriodo4()
    {
        return $this->periodo4;
    }

    public function setPeriodo4($periodo4)
    {
        $this->periodo4 = $periodo4;
        return $this;
    }

    public function getPeriodo5()
    {
        return $this->periodo5;
    }

    public function setPeriodo5($periodo5)
    {
        $this->periodo5 = $periodo5;
        return $this;
    }

    public function getPeriodo6()
    {
        return $this->periodo6;
    }

    public function setPeriodo6($periodo6)
    {
        $this->periodo6 = $periodo6;
        return $this;
    }

    public function getPeriodo7()
    {
        return $this->periodo7;
    }

    public function setPeriodo7($periodo7)
    {
        $this->periodo7 = $periodo7;
        return $this;
    }

    public function getPeriodo8()
    {
        return $this->periodo8;
    }

    public function setPeriodo8($periodo8)
    {
        $this->periodo8 = $periodo8;
        return $this;
    }

    public function getPeriodo9()
    {
        return $this->periodo9;
    }

    public function setPeriodo9($periodo9)
    {
        $this->periodo9 = $periodo9;
        return $this;
    }

    public function getPeriodo10()
    {
        return $this->periodo10;
    }

    public function setPeriodo10($periodo10)
    {
        $this->periodo10 = $periodo10;
        return $this;
    }
}