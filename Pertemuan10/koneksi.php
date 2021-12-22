<?php
	$host="localhost";			  //Variabel berisi nama host yaitu 'localhost'
	$username="root";			    //Variabel berisi username mysql yaitu 'root'
	$password="";				      //Variabel berisi password mysql yaitu kosong karena tidak menggunakan password
	$databasename="akademik";	//Variabel berisi nama database yaitu 'akademik'
	$con=@mysqli_connect($host,$username,$password,$databasename);	//Variabel berisi perintah untuk menghubungkan ke database dengan nama host 'localhost', username 'root', password '', dan nama database 'akademik'
 
	if (!$con) {									//Percabangan dengan kondisi jika variabel $con bernilai false
		echo "Error: " . mysqli_connect_error();	//Menampilkan pesan 'error' dan mengembalikan kode kesalahan dari kesalahan koneksi terakhir
		exit();										//Untuk mengakhiri skrip
	}
?>
