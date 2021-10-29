<?php
// não pode-se ter erro de sintax no arquico incluido

/* include "inc/exemplo-01.php"; */

//obriga existencia do arquivo e que ele estaja correto
require "inc/exemplo-01.php";

//require once chama o arquivo e reutiliza sem erro
/* require_once "inc/exemplo-01.php"; */

$resultado = somar(10,20);

echo $resultado;
?>