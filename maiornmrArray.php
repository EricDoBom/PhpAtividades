<?php

function maiorNumero($array){
    return max($array);
}
$numeros = [23, 171, 56, 101, 1];

echo "Maior Número = " . maiorNumero($numeros);