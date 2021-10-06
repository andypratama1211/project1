<?php

include("../config.php");

// cek apakah tombol daftar sudah di klik atau belum?
if(isset($_POST['update'])){

    // ambil data dari formulir
    $nama       = $_POST['nama']; 
    $alamat     = $_POST['alamat'];
    $kelurahan  = $_POST['kelurahan'];
    $kecamatan  = $_POST['kecamatan'];
    $kab_kota   = $_POST['kab_kota'];



    //buat query 
    $sql = "UPDATE pemilik SET
    nama='$nama',alamat='$alamat',kelurahan='$kelurahan',kecamatan='$kecamatan',kab='$kab_kota' WHERE id=$id";
    $query = mysqli_query($connect,$sql);

    //apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('location: index.php?status=sukses tambah data');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('location: index.php?status=gagal tambah data');
    }
} else {
    die("akses dilarang...");
}

?> 