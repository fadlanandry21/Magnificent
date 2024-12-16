<?php

// Fungsi untuk validasi data
function validasiData($data)
{
    foreach ($data as $index => $value) {
        $value = trim($value);
        if ($value === '' || $value === 0 || $value === null || $value === false) {
            return $index; // Mengembalikan indeks yang salah
        }
    }
    return 0; // Data valid
}

// Fungsi untuk memasukkan barang ke database
function inputbrg($data, $koneksi)
{
    // Sanitasi data
    $namabrg = htmlspecialchars($data['nama_brg']);
    $hargabrg = intval($data['harga_brg']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $jbarang = htmlspecialchars($data['jenis_brg']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    // Validasi input dropdown
    if (empty($ukuran)) {
        return "Ukuran belum dipilih";
    }
    if (empty($jbarang)) {
        return "Jenis barang belum dipilih";
    }

    // SQL untuk memasukkan data
    $sql = "INSERT INTO tb_barang (nama_brng, harga_brng, ukuran_brng, jenis_brng, deskripsi_brng) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    if ($stmt === false) {
        return false; // Gagal menyiapkan pernyataan
    }

    // Bind parameter
    mysqli_stmt_bind_param($stmt, 'sisss', $namabrg, $hargabrg, $ukuran, $jbarang, $deskripsi);
    $result = mysqli_stmt_execute($stmt);

    // Tutup pernyataan dan kembalikan hasil
    mysqli_stmt_close($stmt);
    return $result;
}

// Fungsi untuk menampilkan data barang
function viewbrg($koneksi)
{
    $query = "SELECT * FROM `tb_barang`";
    $result = $koneksi->query($query);

    if ($result && $result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC); // Mengembalikan data dalam bentuk array asosiatif
    }
    return []; // Mengembalikan array kosong jika tidak ada data
}
