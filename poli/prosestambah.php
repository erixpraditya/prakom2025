<?php
    #### PROSES FORM TAMBAH DATA POLI####
    #1. Koneksi
    include('../koneksi.php');
    #2. Menangkap data dari form
    $nama = $_POST['namapoli'];
    #3. Menuliskan query
    $qry = mysqli_query(mysql: $koneksi,query: "INSERT INTO poli (Nama_poli) VALUES ('$nama')");

    #5. Pengalihan halaman
    header(header: "location:index.php");

    // tambahkan validasi minimal tanggal lahir lebih kecil dari hari ini, jika gagal kembalikan ke form.php dan berikan pesan erorr
?>