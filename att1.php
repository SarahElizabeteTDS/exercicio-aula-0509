<?php

class Prato
{
    //set atributos
    private $descricao;
    private $quantidade;
    private $valorUnitario;

    public function __toString()
    {
        return $this->descricao . "|" . $this->quantidade . "kg|R$:" . $this->valorUnitario . "\n";
    }

    public function getValorTotal()
    {
        return $this->quantidade * $this->valorUnitario;
    }

    //gets and sets

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

$pratos = array();
for ($i=0; $i < 3; $i++) 
{ 
    $prato[$i] = new Prato();
    $prato[$i]->setDescricao(readline("Informe a descrição:"));
    $prato[$i]->setQuantidade(readline("Informe a quantidade (em KG):"));
    $prato[$i]->setValorUnitario(readline("Informe o valor unitário (em R$):"));

    array_push($pratos, $prato[$i]);
}

$inx = 1;
$valorTotalTodos = 0;
foreach($pratos as $pratinho)
{
    print "\n" . $inx . "-" . $pratinho . "\n";
    $inx++;
    $valorTotalTodos += $pratinho->getValorTotal();
}

print "O preço total da janta é: R$" . $valorTotalTodos . "\n";
