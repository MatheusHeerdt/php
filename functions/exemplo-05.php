<?php

$a =10;
// & antes do parametro = passagem de parametro por referencia, 
//ou seja, o que acontece dentro da function alatera a variavel fora
function trocaValor(&$b){

$b += 50;

return $b;

}

echo trocaValor($a);
echo "<br>";
echo $a;
?>