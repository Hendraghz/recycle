<?php

include '../koneksi.php';

$id = $_POST['id'];
$sampah_organik = $_POST['sampah_organik'];
$rw = $_POST['rw'];
$rt = $_POST['rt'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$edukasi = $_POST['edukasi'];
$rumah = $_POST['rumah'];


$result = mysqli_query($koneksi, "UPDATE input SET sampah_organik='$sampah_organik', rw='$rw', rt='$rt', kelurahan='$kelurahan', kecamatan='$kecamatan', edukasi='$edukasi', rumah='$rumah' WHERE id = $id");

if ($result) {
    echo "<script>alert('Data berhasil Diubah!');window.location='input-data.php';</script>";
} else {
    echo "<script>alert('Data gagal Diubah!');window.location='input-data.php';</script>";
}
