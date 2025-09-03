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
                        Data Pasien
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-primary">Tambah Data</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    #1. Koneksi
                                    include('../koneksi.php');

                                    #2. Menuliskan query
                                    $qry = "SELECT * FROM pasien";

                                    #3. Menjalankan query
                                    $result = mysqli_query(mysql: $koneksi,query: $qry);

                                    #4. Melakukan Looping data pasien
                                    $nomor = 1;
                                    foreach($result as $row){
                                ?>
                                <tr>
                                    <th scope="row"><?=$nomor++?></th>
                                    <td><?=$row['Nama_pasienKlinik']?></td>
                                    <td><?=$row['Tanggal_LahirPasien']?></td>
                                    <td><?=$row['Jenis_KelaminPasien']?></td>
                                    <td><?=$row['Alamat_Pasien']?></td>
                                    <td>
                                        <a href="" class="btn btn-info btn-sm">edit</a>
                                        <a href="" class="btn btn-danger btn-sm">harus</a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>