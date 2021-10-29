<?php

$nome = "Glaucio";

function teste(){

global $nome;
echo $nome;

}

function teste2(){
    $nome = "<br/>"."Matheus";
echo $nome." agora no teste2";
}

teste();
teste2();
?>