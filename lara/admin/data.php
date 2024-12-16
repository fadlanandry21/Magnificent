<?php
require_once '../config/config.php';

if (isset($_POST['btnsubmit'])) {
    // Filter dan validasi data input
    $namabrg = htmlspecialchars(trim($_POST['nama_brg']));
    $hargabrg = filter_var($_POST['harga_brg'], FILTER_VALIDATE_FLOAT);
    $ukuran = htmlspecialchars(trim($_POST['ukuran']));
    $jbarang = htmlspecialchars(trim($_POST['jenis_brg']));
    $deskripsi = htmlspecialchars(trim($_POST['deskripsi']));

    // Menyusun data menjadi array
    $data = [
        'nama_brg' => $namabrg,
        'harga_brg' => $hargabrg,
        'ukuran' => $ukuran,
        'jenis_brg' => $jbarang,
        'deskripsi' => $deskripsi,
    ];

    // Validasi data (fungsi validasiData harus didefinisikan)
    $validasi = validasiData($data);

    if ($validasi === 0) {
        echo "Data sudah lengkap, siap diinputkan";

        // Simpan data ke database (fungsi insertData harus didefinisikan)
        $result = inputbrg($data, $koneksi);

        // Periksa apakah data berhasil disimpan
        if ($result) {
            header("location:form.php?status=1");
        } else {
            header("location:form.php?errno=1");
        }
    } else {
        echo "Data kurang: $validasi";
    }
}
