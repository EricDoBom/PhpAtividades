<?php

$n1 = 5;
$n2 = 6;
$n3 = 7;
function calcularMedia($n1, $n2, $n3){
    return (($n1 + $n2 + $n3) /3);
}

echo "Média = ". calcularMedia($n1,$n2,$n3);