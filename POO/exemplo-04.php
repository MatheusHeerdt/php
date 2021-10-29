<?php

//magic methods
class endereco {
    private $logradouro;
    private $numero;
    private $cidade;


public function __construct($a,$b,$c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    public function __destruct()
    {
       /*  var_dump("DESTRUIR"); */
    }

    public function __toString()
    {
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }

}

$meuendereco = new endereco("Rua Ademar Saraiva Leão","123","santos");

/* var_dump($meuendereco);

unset($meuendereco);
 */

 echo $meuendereco;