<?php

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990; // integer
$salario = 5500.99; // float
$bloqueado = false; // boolean
//////////////////////////////////////
$frutas = array("abacaxi", "laramja", "manga"); // array

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);
//////////////////////////////////////
$arquivo = fopen("exemplo-03.php", "r"); // resource
//var_dump($arquivo);

$nulo = null; // null

?>