<?php

class Peesoa
{

    public $nome = "Rasmus Lendorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados()
    {

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Peesoa();

/* echo $objeto->nome . "<br>"; */

$objeto-> verDados();