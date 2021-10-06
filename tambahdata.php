<?php
    include "config.php";

    if(isset($_POST['proses'])){
        mysqli_query($connect, "INSERT into produk set
        id_barang = '$_POST[id_barang]',
        nama_barang = '$_POST[nama_barang]',
        date = '$_POST[date]',
        jenis = '$_POST[jenis]',
        stok = '$_POST[stok]',
        harga = '$_POST[harga]',
        id_suplier = '$_POST[id_suplier]'");

/*if( $query ) {
  // kalau berhasil alihkan ke halaman index.php dengan status=sukses
  header('location: index.php?status=sukses tambah data');
} else {
  // kalau gagal alihkan ke halaman index.php dengan status=gagal
  header('location: tambah.php?status=gagal tambah data');
}
} else {
die("akses dilarang...");
}
*/
    
    }
?>