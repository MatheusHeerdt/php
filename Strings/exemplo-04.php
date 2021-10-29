<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

//acha a casa dp que foi pedido
$q = strpos($frase, "mãe");

// pega o texto anterior ao que foi pedido (no strpos nesse caso)
$texto = substr($frase,0,$q);

var_dump($texto);

// vai buscar a parte do texto de acordo com as coordenadas passadas no parenteses
$texto2 = substr($frase,$q+ strlen($palavra), strlen($frase));

echo"<br>";

var_dump($texto2);
?>