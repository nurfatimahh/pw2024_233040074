<?php

function urutanAngka($angka)
{
    $currentNumber = 1;
    for ($i = 1; $i <=$angka; $i++){
        for ($j = 1; $j <= $i; $j++){
            echo $currentNumber. " ";
            $currentNumber++;
        }
        echo "<br>";
    }
}

urutanAngka(5);
