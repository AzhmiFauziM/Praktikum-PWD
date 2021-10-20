<?php
include_once("koneksi.php");	//Menyertakan file 'koneksi.php' dan dieksekusi sekali saja
 
$nim = $_GET['nim'];	//Memanggil data nim

$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim= '$nim'"); //Variabel berisi nilai untuk mengirimkan perintah query terdiri dari 2 parameter yaitu koneksi '$con' dan Sql 'DELETE FROM mahasiswa WHERE nim='$nim'' untuk menghapus data dari tabel mahasiswa dengan kondidi nim = $nim

header("Location:index.php");	//Untuk berpindah menuju halaman index.php
?>