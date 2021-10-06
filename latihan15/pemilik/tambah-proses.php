<?php

include("../config.php");

// cek apakah tombol daftar sudah di klik atau belum?
if(isset($_POST['tambah'])) {
    
    // ambil data dari formulir
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $kab_kota   = $_POST['kab_kota'];
    $kode_pos   = $_POST['kode_pos'];
    $email      = $_POST['email'];
    $notelp     = $_POST['notelp'];

    //buat query
    $sql = "INSERT INTO pemilikk (kode,nama, alamat,kecamatan,kelurahan,kab_kota,kode_pos,email,notelp) VALUES
                                ('$kode','$nama','$alamat','$kecamatan','$kelurahan','$kab_kota','kode_pos','email','notelp')";
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