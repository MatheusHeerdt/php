<?php

class pessoa {

    public $nome; // criando atributo

    public function falar(){  //método

        return "O meu nome é:".$this->nome;
    
    }

}
$glaucio = new pessoa();

$glaucio->nome = "Glaucio Daniel";
echo $glaucio-> falar();
?>