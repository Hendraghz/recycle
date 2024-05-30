<?php
$koneksi = mysqli_connect("localhost", "root", "", "pkk");
// $koneksi = mysqli_connect("localhost", "root", "", "pkk");


// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
