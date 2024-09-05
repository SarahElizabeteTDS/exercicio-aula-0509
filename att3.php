<?php

class Posto
{
    //atributos
    private $litrosGasolina;
    private $abastecimentosGasolina;

    //construct
    public function __construct()
    {
        $this->litrosGasolina = 0;
        $this->abastecimentosGasolina = array();
    }

    //metodos
    public function abastecer($litros)
    {
        if ($litros <= $this->litrosGasolina) 
        {
            array_push($this->abastecimentosGasolina, $litros);
            $this->litrosGasolina -= $litros;
            return true;
        }else{
            return false;
        }
    }
    
    public function reporEstoque($litros)
    {
        $this->litrosGasolina += $litros;
    }

    //gets e sets

    public function getLitrosGasolina()
    {
        return $this->litrosGasolina;
    }

    public function setLitrosGasolina($litrosGasolina): self
    {
        $this->litrosGasolina = $litrosGasolina;

        return $this;
    }

    public function getAbastecimentosGasolina()
    {
        return $this->abastecimentosGasolina;
    }

    public function setAbastecimentosGasolina($abastecimentosGasolina): self
    {
        $this->abastecimentosGasolina = $abastecimentosGasolina;

        return $this;
    }
}

$posto = new Posto();

$escolha = 0;
do 
{
    print "\n-----------MENU-----------\n";
    print "1- Abastecer\n";
    print "2- Repor Estoque\n";
    print "3- Listar Abastecimento\n";
    print "0- SAIR\n";
    $escolha = readline("Escolha a opção: ");
    switch($escolha) 
    {
    case 0:
        print "\nPrograma encerrado!\n";
    break;

    case 1:
        $verifica = $posto->abastecer(readline("Informe a quantidade de litros: "));
        if ($verifica) 
        {
            print "Seu abastecimento foi realizado com êxito.\n";
        }else{
            print "Não há estoque suficiente.\n";
        }
    break;

    case 2:
        $posto->reporEstoque(readline("Informe a quantidade de litros que você irá repor: "));
        print "Estoque reposto com sucesso.";
    break;

    case 3:
        $inx;
        foreach ($abastecimentosGasolina as $abastecimentos) 
        {
            print "Abastecimento " . $inx . ": " . $abastecimentos . " litros.\n";
        }
    break;

    default:
        print "Opção inválida\n";
    }
}while($escolha != 0);
