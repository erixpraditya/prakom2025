<?php
#### PROSES FORM TAMBAH DATA PASIEN ####
#1. Koneksi
include('../koneksi.php');
#2. Menangkap data dari form
$id = $_POST['idedit'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
if ($jk == 1) {
    $jk = "Laki - Laki";
} else {
    $jk = "Perempuan";
}
#3. Menuliskan query
$qry = mysqli_query($koneksi, "UPDATE pasien SET Nama_pasienKlinik='$nama', 
Tanggal_LahirPasien='$tgl_lahir',Jenis_KelaminPasien='$jk', Alamat_Pasien='$alamat' 
WHERE pasienKlinik_ID='$id'");

#5. Pengalihan halaman
header(header: "location:index.php");

// tambahkan validasi minimal tanggal lahir lebih kecil dari hari ini, jika gagal kembalikan ke form.php dan berikan pesan erorr
