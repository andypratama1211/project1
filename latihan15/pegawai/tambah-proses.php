<?php

include("../config.php");

// cek apakah tombol daftar sudah di klik atau belum?
if(isset($_POST['tambah'])) {
    
    // ambil data dari formulir
    $kode           = $_POST['kode'];
    $nama           = $_POST['nama'];
    $jk             = $_POST['jk'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $alamat         = $_POST['alamat'];
    $kecamatan      = $_POST['kecamatan'];
    $kelurahan      = $_POST['kelurahan'];
    $kab            = $_POST['kab'];
    $kode_pos       = $_POST['kode_pos'];
    $email          = $_POST['email'];
    $jabatan        = $_POST['jabatan'];
    $pendidikan     = $_POST['pendidikan'];

    //buat query
    $sql = "INSERT INTO pegawai (kode,nama,jk,tempat_lahir,tanggal_lahir, alamat,kecamatan,kelurahan,kab,kode_pos,email,jabatan,pendidikan) VALUES
        ('$kode','$nama','$jk','$tempat_lahir','$tanggal_lahir','$alamat','$kecamatan','$kelurahan','$kab','kode_pos','email','$jabatan','$pendidikan')";
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