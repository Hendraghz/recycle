<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $username = $_POST['username'];
  $tipe_fasilitas = $_POST['tipe_fasilitas'];
  $tahun = $_POST['tahun'];
  $kab = $_POST['kab'];
  $nama_fasilitas = $_POST['nama_fasilitas'];
  $jenis = $_POST['jenis'];
  $status = $_POST['status'];
  $sampah_masuk = $_POST['sampah_masuk'];
  $sampah_terkelola = $_POST['sampah_terkelola'];

  // Validate required fields
  if (empty($username) || empty($tipe_fasilitas) || empty($tahun) || empty($kab) || empty($nama_fasilitas) || empty($jenis) || empty($status) || empty($sampah_masuk) || empty($sampah_terkelola)) {
    echo "<script>alert('Isi semua Data yang berada di dalam form.'); window.location.href = document.referrer';</script>";
  } else {
    // Prepare the SQL statement
    $sql = "INSERT INTO fasilitas (username, tipe_fasilitas, tahun, kab, nama_fasilitas, jenis, status, sampah_masuk, sampah_terkelola) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($koneksi, $sql)) {
      // Bind the variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ssissssii", $username, $tipe_fasilitas, $tahun, $kab, $nama_fasilitas, $jenis, $status, $sampah_masuk, $sampah_terkelola);

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Data berhasil Ditambahkan.');  window.location.href = document.referrer;</script>";
      } else {
        echo "<script>alert('ERROR: Could not execute query. " . mysqli_error($koneksi) . "');  window.location.href = document.referrer;</script>";
      }
    } else {
      echo "<script>alert('ERROR: Could not prepare query. " . mysqli_error($koneksi) . "');  window.location.href = document.referrer;</script>";
    }

    // Close statement
    mysqli_stmt_close($stmt);
  }

  // Close connection
  mysqli_close($koneksi);
}