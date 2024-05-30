<?php

include '../koneksi.php';


$id = $_GET['id'];

$result = mysqli_query($koneksi, "DELETE FROM input WHERE id = $id");

if ($result) {
    // alert konfirmasi ya atau tidak hapus data lalu redirect ke halaman data
    echo "<script>alert('Data berhasil Dihapus!');window.location='input-data.php';</script>";
} else {
    echo "<script>alert('Data gagal Dihapus!');window.location='input-data.php';</script>";
}
