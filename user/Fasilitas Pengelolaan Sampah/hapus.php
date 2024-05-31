<?php
include '../../koneksi.php';

$id = $_GET['id'];

// Validate the ID
if (filter_var($id, FILTER_VALIDATE_INT) === false) {
    echo '<script>
            alert("ID tidak valid");
            window.location.href = document.referrer;
          </script>';
    exit;
}

// Prepare and execute the delete query
$stmt = $koneksi->prepare("DELETE FROM fasilitas WHERE id = ?");
$stmt->bind_param("i", $id);

// Execute the query
if ($stmt->execute()) {
    echo '<script>
            alert("Data berhasil dihapus!");
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