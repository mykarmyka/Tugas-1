<?php
require 'functions.php';

//ambil data di url
$id = $_GET["id"];

//query data mahasiswa
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];



//cek apakah tombol sudah submit
if( isset($_POST["submit"]))  {

//cek keberhasilan
if( ubah($_POST) > 0) {
    echo "
    <script>
        alert('data berhasil diubah!') ;
        document.location.href='index.php';
    </script>
    
    ";
} else{
    echo "
    <script>
        alert('data gagal diubah!') ;
        document.location.href='index.php';
    </script>
    
    ";
}



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" 
                required value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" required
                value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
    
</body>
</html>