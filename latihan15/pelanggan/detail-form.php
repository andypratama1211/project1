<?php

include("../config.php");

//kalau tidak ada id di query string
if(!isset($_GET['id'])){
    header('location: index.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql ="SELECT * FROM pemilik WHERE id=$id";
$query  = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($query);

//jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1) {
    die("data tidak di temukan...");
}

?>

<!DOCTYPE html>
<head>
    <title>Belajar CRUD</title>
</head>

<body>
        <h3>Detail Data</h3>   
         <form action="update-proses.php" method="POST">
             <fieldset>
                 <table>
                     <tr>
                         <td><label for="nama">nama: <?=$row['nama']?> </label></td>
                     </tr>
                     <tr>
                         <td><label for="alamat">alamat:  <?=$row['alamat']?> </label></td>
                     </tr>
                     <tr>
                         <td><label for="kelurahan">kelurahan: <?=$row['kelurahan']?> </label></td>
                     </tr>
                     <tr>
                         <td><label for="kecamatan">kecamatan: <?=$row['kecamatan']?> </label></td>
                     </tr>
                     <tr>    
                         <td><label for="kab_kota">kab kota: <?=$row['kab_kota']?> </label></td>
                    </tr>
                    <tr>
                        <td><a href="index.php">Kembali</a></td>
                     </tr>
                    </table>
                </fieldset>
         </form>
    </body>
</html>
