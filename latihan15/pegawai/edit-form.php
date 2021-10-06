<?php

include("../config.php");

//kalau tidak ada id di query string
if(!isset($_GET['id'])){
    header('location: index.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql ="SELECT * FROM pegawai WHERE id=$id";
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
                <td><label for="kode">kode</label></td>
                <td><input type="text" name="kode" id="kode" placeholder="kode" value="<?=$row {'kode'}?>" /></td>
            </tr>
            <tr>
            <td><label for="nama">nama: </label></td>
                <td><input type="text" name="nama" id="nama"  placeholder="nama" value="<?= $row {'nama'}?>"/></td>
            </tr>
            <tr>
                <td><label for="jk">jk: </label></td>
               <td>
                    <select>
                        <option value="L" <?php if($row['jk'] == "L") {echo 'selected = selected';}?> >laki-laki</option>
                        <option value="P" <?php if($row['jk'] == "P") {echo 'selected = selected';}?> >perempuan</option>
                    </select>
                </td>
            </tr>
             <tr>
                <td><label for="tempat_lahir">tempat_lahir: </label></td>
                <td><input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="tempat_lahir" value="<?=$row {'tempat_lahir'}?>"/><td>
            </tr>
             <tr>
                <td><label for="tanggal_lahir">tanggal_lahir: </label></td>
                <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal_lahir" value="<?=$row {'tanggal_lahir'}?>"/><td>
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
                 <td><label for="kab">kab: </label></td>
                <td><input type="text" name="kab" id="kab" placeholder="kab" value="<?=$row {'kab'}?>"/><td>
            </tr>
            <tr>
                <td><label for="kode_pos">kode pos: </label></td>
                <td><input type="text" name="kode_pos" id="kode_pos" placeholder="kode_pos" value="<?=$row{'kode_pos'}?>" /></td>
            </tr>
            <tr>
                <td><label for="email">email: </label></td>
                <td><input type="text" name="email" id="email" placeholder="email" value="<?=$row{'email'}?>" /></td>
            </tr>
            <tr>
            <td><label for="jabatan">jabatan: </label></td>
               <td>
                    <select>
                        <option value="0" <?php if($row['jabatan'] == "0") {echo 'selected = selected';}?> >admin</option>
                        <option value="1" <?php if($row['jabatan'] == "1") {echo 'selected = selected';}?> >keuangan</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td><label for="pendidikan">pendidikan: </label></td>
               <td>
                    <select>
                        <option value="0" <?php if($row['pendidikan'] == "0") {echo 'selected = selected';}?> >smp</option>
                        <option value="1" <?php if($row['pendidikan'] == "1") {echo 'selected = selected';}?> >sma/smk</option>
                        <option value="2" <?php if($row['pendidikan'] == "2") {echo 'selected = selected';}?> >s1</option>
                    </select>
                </td>
            </tr>
                <td></td>
                <td><input type="submit" value="tambah" name="tambah" /></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>