<?php 
session_id('k2uahijfun1iko0t80ni5ac3l7');
require_once("config.php");

session_regenerate_id(); 

echo session_id();

var_dump($_SESSION);

?>