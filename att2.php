<?php

class Trapezio
{
    //atributos
    private $baseMaior;
    private $baseMenor;
    private $altura;

    public function __toString()
    {
        return "Trapézio com altura:" . $this->altura . "\nBase maior:" . $this->baseMaior . "\nBase menor:" . $this->baseMenor . "\nÁrea:" . $this->getArea() . "\n";
    }
    //metodos
    public function getArea()
    {
        return (($this->baseMaior + $this->baseMenor) * $this->altura)/2;
    }

    //gets and setts

    public function getBaseMaior()
    {
        return $this->baseMaior;
    }

    public function setBaseMaior($baseMaior): self
    {
        $this->baseMaior = $baseMaior;

        return $this;
    }

    public function getBaseMenor()
    {
        return $this->baseMenor;
    }

    public function setBaseMenor($baseMenor): self
    {
        $this->baseMenor = $baseMenor;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}
$trapezios = array();
for ($i=0; $i < 4; $i++) 
{ 
    $trapezio[$i] = new Trapezio();
    $trapezio[$i]->setAltura(readline("Informe a altura do trapézio: "));
    $trapezio[$i]->setBaseMaior(readline("Informe a base maior do trapézio: "));
    $trapezio[$i]->setBaseMenor(readline("Informe a base menor do trapézio: "));

    array_push($trapezios, $trapezio[$i]);
}

$area = 0;
$trapezioMaiorArea = new Trapezio();
//verificacao para imprimir
for ($i=0; $i < count($trapezios); $i++) 
{ 
    if ($trapezio[$i]->getArea() > $area) 
    {
       $area = $trapezio[$i]->getArea();
       $trapezioMaiorArea = $trapezio[$i];
    }
}

print "O trapezio com maior área é: \n" . $trapezioMaiorArea;
