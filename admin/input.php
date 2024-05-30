<?php

include '../koneksi.php';

$username = $_POST['username'];
$sampah_organik = $_POST['sampah_organik'];
$rw = $_POST['rw'];
$rt = $_POST['rt'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$edukasi = $_POST['edukasi'];
$rumah = $_POST['rumah'];


$result = mysqli_query($koneksi, "INSERT INTO input VALUES('','$username','$sampah_organik','$rt','$rw','$kelurahan','$kecamatan','$edukasi','$rumah')");

if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='input-data.php';</script>";
    
} else {
    echo "<script>alert('Data gagal ditambahkan!');window.location='input-data.php';</script>";
}
