<?php
	require_once "koneksi.php";					//Menyisipkan file 'koneksi.php'
	$sql = "select * from mahasiswa";			//Variabel berisi query untuk menampilkan semua data pada tabel mahasiswa
	$query = mysqli_query($con,$sql);			//Variabel berisi perintah untuk mengirim query pada variabel '$sql' dengan koneksi '$con'
	while ($row = mysqli_fetch_assoc($query)) { //Perulangan untuk mengambil data pada tabel mahasiswa berupa array asosiatif
		$data[] = $row;							//Variabel tipe array untuk menampung data dari variabal '$row'
	}
	header('content-type: application/json');	//Mengirimkan header 'Content-type: application/json' untuk mengatur content-type
	echo json_encode($data);					//Untuk encoding array pada variabel '$data' menjadi JSON
	mysqli_close($con);							//Menutup koneksi database
?>