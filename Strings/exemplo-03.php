<?php

$empresa = "Hcode";
// str_replace vai mudar a string escolhida através das condições definidas nos parenteses.
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;
?>