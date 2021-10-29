<?php

$json = '[{"nome":"Jonas","idade":20},{"nome":"Matheus","idade":21}]';
//json_decode pega json e transforma em array
$data = json_decode($json, true);

var_dump($data);

?>