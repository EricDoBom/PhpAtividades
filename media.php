<?php


    $num1 = 4;
    $num2 = 7;
    $num3 = 7;

    $media = ($num1 + $num2 + $num3) / 3;

    if ($media >= 7 ) {
        echo "Você está aprovado";
        
    } 
    elseif($media >= 5 && $media <7 ) {
        echo "Você está em Recuperação";

    }
    else {
        echo "Você está reprovado";
    }