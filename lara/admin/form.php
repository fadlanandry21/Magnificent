<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Database Magnificent</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<body>
    <div class="container">
        <div class="text-center mt-5">
            <h1>Input Data Barang</h1>
        </div>

        <form action="view.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <div class="controls">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="form_nama_barang">Nama Barang</label>
                                            <input id="form_nama_barang" type="text" name="nama_brg" class="form-control" placeholder="Masukkan Nama Barang" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="form_harga">Harga Barang</label>
                                            <input id="form_harga" type="number" name="harga_brg" class="form-control" placeholder="Masukkan Harga Barang" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_ukuran">Ukuran</label>
                                                <select id="form_ukuran" name="ukuran" class="form-control" required>
                                                    <option value="" selected disabled>Pilih Ukuran</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_jenis_barang">Jenis Barang</label>
                                                <select id="form_jenis_barang" name="jenis_brg" class="form-control" required>
                                                    <option value="" selected disabled>Pilih Jenis Barang</option>
                                                    <option value="Tas Carrier">Tas Carrier</option>
                                                    <option value="Sepatu">Sepatu</option>
                                                    <option value="Tenda">Tenda</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Deskripsi Barang</label>
                                                <textarea name="deskripsi" id="form_message" class="form-control" placeholder="Masukkan Deskripsi Barang" rows="4" required></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="imageUpload">Unggah Gambar:</label>
                                                <input type="file" id="imageUpload" name="imageUpload" accept="image/*">
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <button type="submit" class="btn btn-success btn-send btn-block" name="btnsubmit">Kirim Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>