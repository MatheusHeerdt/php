<?php
// chama a cofig que deu incio a sessão
require_once("config.php");
//cria a sessão nome
$_SESSION["nome"] = "Hcode";
echo $_SESSION["nome"];
?>