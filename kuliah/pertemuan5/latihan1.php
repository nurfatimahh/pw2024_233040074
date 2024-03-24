<?php 

// 1. Membuat Array
$hari = array ("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mhs = ["Nurfatimah", 3.99 ];
echo "<br>";

// 2. Mencetak Array (1)
// cetak 1 nilai menggunakan index
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];

// cetak seluruh isi array
//var_dump() atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mhs);
echo "<br>";

// 3. Manipulasi Array
// Menambah isi array
// Dibelakang : [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jumat";
print_r($hari);
ehco "<br>";
array_push($bulan "April");
print_r($bulan);
echo "<br>";

// Diawal array
array_unshift($mhs);

//menghapus isi array
//dibelakang: array_pop()
//didepan: array_ 

// 4. Mencetak Array (2)