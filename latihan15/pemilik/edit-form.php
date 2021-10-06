<?php

include("../config.php");

//kalau tidak ada id di query string
if(!isset($_GET['id'])){
    header('location: index.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql ="SELECT * FROM pemilikk WHERE id=$id";
$query  = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($query);

//jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1) {
    die("data tidak di temukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tambah-proses.php" method="POST">

    <fieldset>

        <table>
            <tr>
                <td><label for="kode"></label></td>
                <td><input type="hidden" name="kode" id="kode" placeholder="kode" value="=<?=$row {'kode'}?>" /></td>
            </tr>
            <tr>
            <td><label for="nama">nama: </label></td>
                <td><input type="text" name="nama" id="nama"  placeholder="nama" value="<?= $row {'nama'}?>"/></td>
            </tr>

            <tr>
                <td><label for="alamat">alamat: </label></td>
                <td><input type="text" name="alamat" id="alamat" placeholder="alamat" value="<?=$row {'alamat'}?>"/><td>
            </tr>
            <tr>
                 <td><label for="kecamatan">kecamatan: </label></td>
                <td><input type="text" name="kecamatan" id="kecamatan" placeholder="kecamatan" value="<?=$row {'kecamatan'}?>"/><td>
            </tr>
            <tr>
                 <td><label for="kelurahan">kelurahan: </label></td>
                <td><input type="text" name="kelurahan" id="kelurahan" placeholder="kelurahan" value="<?=$row {'kelurahan'}?>"/><td>
            </tr>
            <tr>
                 <td><label for="kab_kota">kab_kota: </label></td>
                <td><input type="text" name="kab_kota" id="kab_kota" placeholder="kab_kota" value="<?=$row {'kab_kota'}?>"/><td>
            </tr>
            <tr>
                <td><label for="kode_pos">kode pos: </label></td>
                <td><input type="text" name="kode_pos" id="kode_pos" placeholder="kode_pos" value="<?=$row{'kode_pos'}?>" /></td>
            </tr>
            <tr>
                <td><label for="notelp">notelp: </label></td>
                <td><input type="text" name="notelp" id="notelp" placeholder="notelp" value="<?=$row{'notelp'}?>" /></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="tambah" name="tambah" /></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>