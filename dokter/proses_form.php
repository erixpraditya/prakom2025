<?php
    #### PROSES FORM TAMBAH DATA PASIEN ####
    #1. Koneksi
    include('../koneksi.php');
    #2. Menangkap data dari form
    $nama = $_POST['namadokter'];
    $poli = $_POST['poli'];
    #3. Menuliskan query
    $qry = mysqli_query(mysql: $koneksi,query: "INSERT INTO dokter (Nama_Dokter, Poli_ID) VALUES ('$nama', '$poli')");

    #5. Pengalihan halaman
    header(header: "location:index.php");

    // tambahkan validasi minimal tanggal lahir lebih kecil dari hari ini, jika gagal kembalikan ke form.php dan berikan pesan erorr
?>