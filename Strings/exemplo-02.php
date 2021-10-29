<?php

$nome = "joao rangel";

//strtoupper é uma função para transformar todo texto em maiusculo (não funciona com caracteres especiais)
$nome = strtoupper($nome);

echo $nome;
// strtolower passa tudo para minusculo
$nome = strtolower($nome);
 
echo "<br>";

echo $nome;

echo "<br>";
// ucwords deixa apenas as primeiras letras de cada palavra maiusculas
echo ucwords ($nome);
// ucfirst deixa apenas a primeira letra de toda string em maiusculo

echo"<br>";

echo ucfirst ($nome);

?>