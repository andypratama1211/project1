<?php
include "../config.php";

$result = mysqli_query($connect, "select*from pegawai");


function jk($data){
    if($data== 0){
        echo "laki-laki";
    }
    if($data== 1){
        echo "perempuan";
    }

}
function pendidikan($data){
    if($data== 0){
        echo "smk";
    } else
    if($data== 1){
        echo "sma/smk";
    } else
    if($data== 2){
        echo "s1";
    }

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
<h3>List Data</h3> 
<?php

if(isset($_GET['status'])){
    echo '<h3> ' .$_GET['status']. '</h3>';
}

?>

<a href="tambah-form.php">[+] Tambah Baru </a>

<table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <th>NO</th>
            <th>kode</th>
            <th>Nama</th>
            <th>jenis kelamin</th>
            <th>tempat lahir</th>
            <th>tanggal lahir</th>
            <th>alamat</th>
            <th>kecamatan</th>
            <th>kelurahan</th>
            <th>kab/kota</th>
            <th>kodepos</th>
            <th>email</th>
            <th>jabatan</th>
            <th>pendidikan</th>
            <th></th>
        </thead>
        <tbody>
        
        <?php
            $index =1;
        ?>

        <?php while ($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?= $index++ ?></td>
                <td><?= $row['kode']?></td>
                <td><?= $row['nama']?></td>
                <td><?= jk($row['jk'])?></td>
                <td><?= $row['tempat_lahir']?></td>
                <td><?= $row['tanggal_lahir']?></td>
                <td><?= $row['alamat']?></td>
                <td><?= $row['kecamatan']?></td>
                <td><?= $row['kelurahan']?></td>
                <td><?= $row['kab']?></td>
                <td><?= $row['kode_pos']?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['jabatan']?></td>
                <td><?= pendidikan($row['pendidikan'])?></td>


                <td>
                    <a href='edit-form.php?id="<?=$row['id'] ?>"'>Edit</a> |
                    <a href='hapus-proses.php?id="<?=$row['id'] ?>"' onClick="return confirm('yakin hapus?')">Hapus</a> |
                    <a href='detail-form.php?id="<?=$row['id'] ?>"'>Detail</a>
                </td>
            </tr>            
        <?php } ?>

      </tbody>
</table>
</body>
</html>