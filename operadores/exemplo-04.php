<?php

$a = 55.0;

$b = 55;

//compara maior que
var_dump($a > $b);
echo "<br>";
//compara menor que
var_dump($a < $b);

echo "<br>";

// compara valor mas não compara tipo
var_dump($a == $b);

echo "<br>";

// compara valor e tipo
var_dump($a === $b);

echo "<br>";

//compara com negação sem diferenciar o tipo
var_dump($a != $b);

echo "<br>";

//compara com negação diferenciando o tipo
var_dump($a !== $b);

echo "<br>";
?>