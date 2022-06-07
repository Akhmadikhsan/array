<?php
// array associative
// key nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Akhmad Ikhsan Nizhami",
        "nim" => "202157011",
        "jurusan" => "Manajemen Informatika",
        "email" => "akhmadikhsannizhami@gmail.com",
        "photo" => "photo1.jpg"
    ],
    [
        "nama" => "Reza hercahyo",
        "nim" => "202157014",
        "jurusan" => "Manajemen Informatika",
        "email" => "Reza hercahyo@gmail.com",
        "photo" => "photo2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["photo"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM :<?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>