<?php
// valores de parametros obrigatórios vão ao lado esquerdo, do contrario tudo que vem antes deverá ser declarado
// ou seja $periodo deveria estar na esquerda antes de $texto
function ola($texto = "mundo" , $periodo ){

return "olá $texto! $periodo!<br> ";

}

echo ola("Mundo","bom dia");
echo ola("", "boa noite");
echo ola("Matheus", "boa tarde");
echo ola("Leandro","boa madrugada");
?>