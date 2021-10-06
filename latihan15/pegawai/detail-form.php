<?php

include("../config.php");

//kalau tidak ada id di query string
if(!isset($_GET['id'])){
    header('location: index.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql ="SELECT * FROM pegawai where id=$id";
$query  = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($query);

//jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1) {
    die("data tidak di temukan...");
}

?>

<!DOCTYPE html>
<head>
    <title>CRUD</title>
</head>

<body>
        <h3>Detail Data</h3>   
         <form action="update-proses.php" method="POST">
             <fieldset>
                 <table>
                     <tr>
                         <td><label for="kode">kode: <?=$row['kode']?> </label></td>
                     </tr>
                     <tr>
                         <td><label for="nama">nama: <?=$row['nama']?> </label></td>
                     </tr>
                     <tr>
                         <td><label for="jk">jenis kelamin : 
                            <?php if($row['jk'] == "L" ) {echo 'laki-laki';
                        } else {
                            echo "perempuan";
                        }?></label></td>
                     </tr>
                      <tr>
                         <td><label for="tempat_lahir">tempat_lahir: <?=$row['tempat_lahir']?> </label></td>
                     </tr>
                     <tr>
                         <td><label for="tanggal_lahir">tanggal_lahir: <?=$row['tanggal_lahir']?> </label></td>
                     </tr>
                     <tr>
                         <td><label for="alamat">alamat: <?=$row['alamat']?> </label></td>
                     </tr>
                     <tr>
                         <td><label for="kecamatan">kecamatan: <?=$row['kecamatan']?> </label></td>
                     </tr>
                    <tr>
                         <td><label for="kelurahan">kelurahan: <?=$row['kelurahan']?> </label></td>
                     </tr>
                      <tr>
                         <td><label for="kab">kab: <?=$row['kab']?> </label></td>
                     </tr>
                      <tr>
                         <td><label for="kode_pos">kode_pos: <?=$row['kode_pos']?> </label></td>
                     </tr>
                      <tr>
                         <td><label for="email">email: <?=$row['email']?> </label></td>
                     </tr>
                     <tr>
                         <td><label for="jabatan">jabatan : 
                            <?php if($row['jabatan'] == "0" ) { echo 'admin';
                        } else {
                            echo "kasir";
                        }?> </label></td>
                     </tr>
                     <tr>
                        <td><label for="pendidikan">pendidikan : 
                            <?php if($row['pendidikan'] == "0" ) {echo 'smp';
                        } elseif ($row['pendidikan'] == "1"){ echo "sma/smk"; 
                        } else {echo "s1";}?> </label>
                         </td>
                     </tr>
                     <tr>
                         <td><a href="index.php">Kembali</a></td>
                     </tr>
                    </table>
                </fieldset>
         </form>
    </body>

