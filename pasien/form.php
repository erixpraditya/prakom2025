<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Klinik Sehat</title>
</head>

<body style="background-color: #DDF4E7;">
    <?php
    include('../navbar.php');
    ?>
    <div class="container">
        <!-- Konten nya -->
        <div class="row">
            <div class="col-10 m-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <b>Form Tambah Data Pasien</b>
                    </div>
                    <div class="card-body">
                        <form method="post" action="proses_form.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
                                <input name="nama" placeholder="Masukan Nama Lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                <input name="tgl" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="d-flex gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" id="jkLaki" value="1">
                                        <label class="form-check-label" for="jkLaki">
                                            <i class="bi bi-gender-male"></i> Laki - Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" id="jkPerempuan" value="2">
                                        <label class="form-check-label" for="jkPerempuan">
                                            <i class="bi bi-gender-female"></i> Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                <input name="alamat" placeholder="Masukan Alamat Lengkap" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>