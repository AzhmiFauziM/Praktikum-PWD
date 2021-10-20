<?php

include_once("koneksi.php");	//Menyertakan file 'koneksi.php' dan dieksekusi sekali saja
 
$result = mysqli_query($con, "SELECT * FROM mahasiswa "); //Variabel berisi nilai untuk mengirimkan perintah query terdiri dari 2 parameter yaitu koneksi '$con' dan Sql 'SELECT * FROM mahasiswa' untuk menampilkan semua data dari tabel mahasiswa
?> 
 
<html>
<head>
	<title>Halaman Utama</title>  <!-- Judul dokuman html 'Halaman Utama'-->
</head>
<body>
	<a href="tambah.php">Tambah Data Baru</a><br/><br/>	<!-- Link ke halaman 'tambah.php' -->
    <table width='80%' border=1>	<!-- Tabel dengan widht 80% dan border '1'-->
	    <tr>						<!-- Pada baris pertama menampilkan teks nim, nama, gender, alamat, tgl lahir, update-->
	    	<th>Nim</th>
	    	<th>Nama</th>
	    	<th>Gender</th>
	    	<th>Alamat</th>
	    	<th>tgl lahir</th>
	    	<th>Update</th>
	    </tr>
	    <?php
	    	while($user_data = mysqli_fetch_array($result)) {	//Perulangan untuk mengambil array asosiatif dari variabel $result
	    		echo "<tr>";
	    		echo "<td>".$user_data['nim']."</td>";	//Menampilkan data dari field nim tabel mahasiswa
	    		echo "<td>".$user_data['nama']."</td>";	//Menampilkan data dari field nama tabel mahasiswa
	    		echo "<td>".$user_data['jkel']."</td>";	//Menampilkan data dari field jkel tabel mahasiswa
	    		echo "<td>".$user_data['alamat']."</td>"; //Menampilkan data dari field alamat tabel mahasiswa
	    		echo "<td>".$user_data['tgllhr']."</td>"; //Menampilkan data dari field tgllhr tabel mahasiswa
	    		echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>"; //Link menuju halaman 'edit.php' serta mengirim data nim dan link menuju halaman 'delete.php' serta mengirim data nim
	    	}
	    ?>
	</table>
</body>
</html>