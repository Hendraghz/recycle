<?php
session_start();
include '../koneksi.php'; // Include your database connection

// Retrieve form data
$username = $_SESSION['username'];
$tahun = $_POST['tahun'];
$kab = $_POST['kab'];
$timbulan_harian = $_POST['timbulan_harian'];
$timbulan_tahunan = $_POST['timbulan_tahunan'];

// Prepare and bind
$stmt = $koneksi->prepare("INSERT INTO timbulsampah (username, tahun, kab, timbulan_harian, timbulan_tahunan) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sisii", $username, $tahun, $kab, $timbulan_harian, $timbulan_tahunan);

// Execute the query
if ($stmt->execute()) {
  echo '<script>
          alert("Data berhasil ditambahkan!");
          window.location.href = document.referrer;
        </script>';
} else {
  echo '<script>
          alert("Terjadi kesalahan: ' . $stmt->error . '");
          window.location.href = document.referrer;
        </script>';
}

// Close connections
$stmt->close();
$koneksi->close();