<?php

    $numeros = [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    $pares = 0;

    foreach ($numeros as $num) {
        if ($num % 2 == 0) {
            $pares++;
        }
    }

    echo "Quantidade de pares: $pares<br>";