<?php
$mahasiswa = [
    [ 
        "nama" => "Nurfatimah",
        "nrp" => 233040074,
        "email" => "nurfatimahh1603Z@gmail.com",
        "jurusan" =>  "Teknik Informatika",
        "gambar" => "nur.jpeg"
    ],
    [ 
        "nama" => "Nada Putri Aqilah Rukanda",
        "nrp" => 233040038,
        "email" => "putriaqilah05@gmail.com",
        "jurusan" =>  "Teknik Informatika",
        "gambar" => "nada.jpeg"
    ],
    [ 
        "nama" => "Chalida Rahma Listy Hidayat",
        "nrp" => 233040046,
        "email" => "chalidarld@gmail.com",
        "jurusan" =>  "Teknik Informatika",
        "gambar" => "chalida.jpeg"
    ],
    [ 
        "nama" => "Haifa Zahira Ramdan",
        "nrp" => 233040051,
        "email" => "haifazahirarahr@gmail.com",
        "jurusan" =>  "Teknik Informatika",
        "gambar" => "haifa.jpeg"
    ],
    [ 
        "nama" => "Faizal Akbar Budiansyah",
        "nrp" => 233040156,
        "email" => "faizalakbarbudiansyah@gmail.com",
        "jurusan" =>  "Teknik Informatika",
        "gambar" => "faizal.jpeg"
    ],
    [ 
        "nama" => "Asep Solehudin",
        "nrp" => "051368883",
        "email" => "asepsolehudin@gmail.com",
        "jurusan" =>  "Ilmu Administrasi Bisnis",
        "gambar" => "asep.jpeg"
    ],
    [ 
        "nama" => "Syifa Nurlaela",
        "nrp" => 223100,
        "email" => "syifanurlaela6@gmail.com",
        "jurusan" =>  "Ilmu Keperawatan",
        "gambar" => "syifanur.jpeg"
    ],
    [ 
        "nama" => "Dera Mahera Putri",
        "nrp" =>  231354037,
        "email" => "deramahera44@gmail.com",
        "jurusan" =>  "Teknik Elektro",
        "gambar" => "dera.jpeg"
    ],
    [ 
        "nama" => "Syifa Charla Althaur ",
        "nrp" => 231364061,
        "email" => "shifacharla170@gmail.com",
        "jurusan" =>  "Teknik Elektro",
        "gambar" => "syifa.jpeg"
    ],
    [ 
        "nama" => "Nurfatimah",
        "nrp" => 233040074,
        "email" => "nurfatimahh1603Z@gmail.com",
        "jurusan" =>  "Teknik Informatika",
        "gambar" => "nur.jpeg"
    ],

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs ["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>