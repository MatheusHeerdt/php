<?php

$total = 1500;
$desconto = 0.9;

do {
    $total *= $desconto;
    echo $total."<br>";
} while ($total > 100);

?>