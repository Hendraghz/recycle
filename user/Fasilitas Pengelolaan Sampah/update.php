<?php
session_start();
include '../../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_GET['id'];
  $tipe_fasilitas = $_POST['tipe_fasilitas'];
  $tahun = $_POST['tahun'];
  $kab = $_POST['kab'];
  $nama_fasilitas = $_POST['nama_fasilitas'];
  $jenis = $_POST['jenis'];
  $status = $_POST['status'];
  $sampah_masuk = $_POST['sampah_masuk'];
  $sampah_terkelola = $_POST['sampah_terkelola'];

  // Prepare and execute the update statement
  $query = "UPDATE fasilitas SET tipe_fasilitas = ?, tahun = ?, kab = ?, nama_fasilitas = ?, jenis = ?, status = ?, sampah_masuk = ?, sampah_terkelola = ? WHERE id = ?";
  $stmt = $koneksi->prepare($query);
  $stmt->bind_param('sissssddi', $tipe_fasilitas, $tahun, $kab, $nama_fasilitas, $jenis, $status, $sampah_masuk, $sampah_terkelola, $id);

  if ($stmt->execute()) {
    echo '<script>alert("Data berhasil diperbarui!");  window.location.href="../Fasilitas Pengelolaan Sampah/InputFasilitas.php";</script>';
  } else {
    echo '<script>alert("Terjadi kesalahan: ' . $stmt->error . '"); window.history.back();</script>';
  }
}
?>