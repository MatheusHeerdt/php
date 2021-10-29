<?php
 
$name = 'Hcode Treinamentos';
 
$repor = 'Cursos';

$new_name = substr($name,0, strpos($name,'T')) . $repor;

echo $new_name;
 
?>