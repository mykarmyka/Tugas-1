<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "web_schoolar");

//ambil data dari query
$result = mysqli_query($conn, "SELECT id, nim, nama FROM mahasiswa ORDER BY nama LIMIT 10");
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

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No</th>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
    </tr>

    <?php 
    $no = 1;
    while( $row = mysqli_fetch_assoc($result)) :
    ?>

    

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row["id"]?></td>
        <td><?= $row["nim"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>


</table>


</body>
</html>