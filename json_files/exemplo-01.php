<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' =>'Jonas',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' =>'Matheus',
    'idade' => 21
));
// json_encode pega o array e transforma em json 
 echo json_encode($pessoas);

?>