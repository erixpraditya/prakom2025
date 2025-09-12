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
                        <b>Form Tambah Data Dokter</b>
                    </div>
                    <div class="card-body">
                        <form method="post" action="proses_form.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Dokter</label>
                                <input name="namadokter" placeholder="Masukan Nama Lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Pilih poli</label>
                                <select name="poli" class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Poli</option>
                                    <?php
                                        include('../koneksi.php');
                                        $qry = mysqli_query($koneksi,"SELECT * FROM poli");
                                        foreach ($qry as $row) {
                                            ?>
                                            <option value="<?=$row['Poli_ID']?>"><?=$row['Nama_Poli']?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
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