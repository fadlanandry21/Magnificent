<?php
require_once '../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM tb_barang WHERE id_brng = ?";
    $stmt = mysqli_prepare($koneksi, $query);

    if (!$stmt) {
        die("Error preparing statement: " . mysqli_error($koneksi));
    }

    mysqli_stmt_bind_param($stmt, 'i', $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='view.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "ID tidak ditemukan!";
}
