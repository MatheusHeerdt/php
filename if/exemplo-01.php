<?php

$qualASuaIdade = 66;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

// if e else tradicional
if ($qualASuaIdade < $idadeCrianca) {

    echo "Criança";
} else if ($qualASuaIdade < $idadeMaior) {

    echo "Adolescente";
} else if ($qualASuaIdade < $idadeMelhor) {

    echo "Adulto";
} else {

    echo "Idoso";
}
echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"menor de idade": "maior de idade";
?>
