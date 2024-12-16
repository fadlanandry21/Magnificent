    <?php
    require_once '../config/config.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Barang</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container mt-5">
            <h1>Data Barang</h1>

            <?php
            // Memanggil data dari fungsi viewbrg
            $databrg = viewbrg($koneksi);

            // Cek apakah data ada
            if (!$databrg || empty($databrg)) {
                echo "<p class='text-danger'>Data Kosong!</p>";
            } else {
            ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga Barang</th>
                            <th scope="col">Ukuran</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Deskripsi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($databrg as $data) {
                        ?>
                            <tr>
                                <th scope="row"><?= htmlspecialchars($no) ?></th>
                                <td><?= htmlspecialchars($data['id_brng']) ?></td>
                                <td><?= htmlspecialchars($data['nama_brng']) ?></td>
                                <td><?= htmlspecialchars($data['harga_brng']) ?></td>
                                <td><?= htmlspecialchars($data['ukuran_brng']) ?></td>
                                <td><?= htmlspecialchars($data['jenis_brng']) ?></td>
                                <td><?= htmlspecialchars($data['deskripsi_brng']) ?></td>
                                <td>
                                    <a href="edit_barang.php?id=<?= urlencode($data['id_brng']) ?>" class="btn btn-secondary">Edit</a>
                                    <a href="delete.php?id=<?= urlencode($data['id_brng']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Delete</a>
                                </td>

                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            <?php
            }
            ?>
        </div>
    </body>

    </html>