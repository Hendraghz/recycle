<?php

include './koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$notelp = $_POST['notelp'];
$ktp = $_POST['ktp'];
$password = $notelp;
$asal = &$_POST['asal'];

// Cecking username already exist
$sql = "SELECT * FROM users WHERE username='$username'";
$query = mysqli_query($koneksi, $sql);
$count = mysqli_num_rows($query);

if ($count > 0) {
    echo "<script>alert('Username sudah terdaftar!');window.location='regis.php';</script>";
    exit;
}

// Inserting data to table data
$insert = mysqli_query($koneksi, "INSERT INTO data (nama, username, notelp, ktp, asal) VALUES ('$nama', '$username', '$notelp', '$ktp', '$asal')");

if ($insert) {
    mysqli_query($koneksi, "INSERT INTO users (nama, username, password ,role) VALUES ('$nama', '$username', '$password', 'user')");
    echo "<script>alert('Registrasi Berhasil, Silahkan Login!');window.location='auth-login.php';</script>";
} else {
    header('Location: regis.php?status=gagal');
}
