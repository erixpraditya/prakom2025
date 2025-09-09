<?php
#Mengambil data pasien berdasarkan ID pasien yang dipilih

#1. membuat koneksi
include("../koneksi.php");

#2. mengambil value ID hapus
$id = $_GET["id"];

#3. menjalankan query hapus
$qry = mysqli_query(mysql: $koneksi,query: "SELECT * FROM poli WHERE Poli_ID = '$id'");

#4. Memisahkan field/kolom tabel pasien menjadi data array
$row = mysqli_fetch_array(result: $qry);

$nama = $row['Nama_Poli'];

?>

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
                        <b>Form Edit Data Poli</b>
                    </div>
                    <div class="card-body">
                        <form method="post" action="prosesedit.php">
                            <input type="hidden" value="<?=$id?>" name="idedit" id="">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Poli</label>
                                <input name="namapoli" value="<?=$nama?>" placeholder="Masukan Nama Poli" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">edit</button>
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