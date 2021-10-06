<?php

include("../config.php");

// cek apakah tombol daftar sudah di klik atau belum?
if(isset($_POST['update'])){

    // ambil data dari formulir
    $kode       = $_POST['kode'];
    $nama       = $_POST['nama']; 
    $alamat     = $_POST['alamat'];
    $kecamatan  = $_POST['kecamatan'];
    $kelurahan  = $_POST['kelurahan'];
    $kab_kota   = $_POST['kab_kota'];
    $kode_pos   = $_POST['kode_pos'];
    $email      = $_POST['email'];
    $notelp     = $_POST['notelp'];



    //buat query 
    $sql = "UPDATE pemilikk SET
    kode='$kode',nama='$nama',alamat='$alamat',kecamatan='$kecamatan',kelurahan='$kelurahan',kab_kota='$kab_kota',kode_pos='$kode_pos',email='$email',notelp='$notelp' WHERE id=$id";
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