<?php
#### PROSES FORM TAMBAH DATA PASIEN ####
#1. Koneksi
include('../koneksi.php');
#2. Menangkap data dari form
$id = $_POST['idedit'];
$nama = $_POST['namapoli'];
#3. Menuliskan query
$qry = mysqli_query($koneksi, "UPDATE poli SET Nama_Poli='$nama'
WHERE Poli_ID='$id'");

#5. Pengalihan halaman
header(header: "location:index.php");

// tambahkan validasi minimal tanggal lahir lebih kecil dari hari ini, jika gagal kembalikan ke form.php dan berikan pesan erorr
