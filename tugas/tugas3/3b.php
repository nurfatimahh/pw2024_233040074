<?php

function urutan_Angka($angka)
{
    $nomor = 1;
    for ($i = 1; $i <=$angka; $i++){
        for ($j = 1; $j <= $i; $j++){
            echo $nomor. " ";
            $nomor++;
        }
        echo "<br>";
    }
}

urutan_Angka(5);
