<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY nama LIMIT 20");

//ambil data dari query
//$result = mysqli_query($conn, "SELECT id, nim, nama FROM mahasiswa ORDER BY nama LIMIT 10");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiwa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br><br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>NO</th>
        <th>ID</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>ACTION</th>
    </tr>

    <?php 
    $i = 1;
    foreach( $mahasiswa as $row) :
    ?>

    

    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["id"]?></td>
        <td><?= $row["nim"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>" >ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>


</table>


</body>
</html>