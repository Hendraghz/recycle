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

$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
$nama = $_FILES['gambar']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['gambar']['size'];
$file_tmp = $_FILES['gambar']['tmp_name'];	

if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 5044070){			
        move_uploaded_file($file_tmp, '../assets/static/images/bukti/'.$nama);
        $result = mysqli_query($koneksi, "INSERT INTO input VALUES('','$username','$sampah_organik','$rw','$rt','$kelurahan','$kecamatan','$edukasi','$rumah','$nama')");
        if ($result) {
            echo "<script>alert('Data berhasil ditambahkan!');window.location='input-data.php';</script>";
        }    
        else{
            echo "<script>alert('Data gagal ditambahkan!');window.location='input-data.php';</script>";
        }
    }else{
        echo "<script>alert('Data gagal ditambahkan!');window.location='input-data.php';</script>";
    }
}else{
    echo "<script>alert('Data gagal ditambahkan!');window.location='input-data.php';</script>";
}
