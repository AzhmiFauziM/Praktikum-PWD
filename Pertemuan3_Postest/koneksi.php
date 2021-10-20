<?php
$host="localhost";	// Variabel berisi nama host
$username="root";	// Variabel berisi username mysql
$password="";		// Variabel berisi password mysql
$databasename="akademik";	// Variabel berisi nama database
$con= mysqli_connect($host,$username,$password,$databasename); //Untuk menghubungkan ke database dengan nama 'localhost', username 'root', password '', dan nama database 'akademik'
 
if (!$con) {	// Percabangan jika variabel $con bernilai false
	echo "Error: " . mysqli_connect_error();	// menampilkan teks 'error' dan  mengambalikan kode kesalahan dari kesalahan koneksi terakhir
	exit();	// untuk menghentikan skrip
}
?>
