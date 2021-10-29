<?php


require_once("config.php");

// acaba com a variavel se por  o nome ou a todas sem o nome sessão ativa
session_unset($_SESSION["nome"]);

// destroi as variaveis da sessão e limpa o usuario(quase resetando a sessão)
session_destroy();
echo $_SESSION["nome"];

?>