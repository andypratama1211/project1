<?php
include "../config.php";

$result = mysqli_query($connect, "select*from pemilikk");
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
            <th>alamat</th>
            <th>kecamatan</th>
            <th>kelurahan</th>
            <th>kab_kota</th>
            <th>kode_pos</th>
            <th>email</th>
            <th>notelp</th>
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
                <td><?= $row['alamat']?></td>
                <td><?= $row['kecamatan']?></td>
                <td><?= $row['kelurahan']?></td>
                <td><?= $row['kab_kota']?></td>
                <td><?= $row['kode_pos']?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['notelp']?></td>


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