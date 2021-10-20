<?php
include_once("koneksi.php"); //Menyertakan file 'koneksi.php' dan dieksekusi sekali saja
 
if(isset($_POST['update'])) {	//Percabangan jika variabel update ada maka kondisi terpenuhi
	$nim = $_POST['nim'];	//Variabel berisi nim
	$nama=$_POST['nama'];	//Variabel berisi nama
	$jkel=$_POST['jkel'];	//Variabel berisi jkel
	$alamat=$_POST['alamat'];	//Variabel berisi alamat
	$tgllhr=$_POST['tgllhr']; 	//Variabel berisi tgllhr
 
    $result = mysqli_query($con, "UPDATE mahasiswa SET nama='$nama',jkel='$jkel',alamat='$alamat',tgllhr='$tgllhr' WHERE nim='$nim'"); //Variabel berisi nilai untuk mengirimkan perintah query terdiri dari 2 parameter yaitu koneksi '$con' dan Sql 'UPDATE mahasiswa SET nama='$nama', jkel='$jkel', alamat='$alamat', tgllhr='$tgllhr' WHERE nim='$nim'' untuk mengubah data dari tabel mahasiswa dengan data baru nama = $nama, jkel = $jkel, alamat = $alamat, tgllhr = $tgllhr dengan kondisi nim = $nim
 
    header("Location: index.php"); //Untuk berpindah menuju halaman index.php
} 
?> 
 
<?php

$nim = $_GET['nim']; //Memanggil data nim agar bisa ditampilkan di file action
 
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'");  //Variabel berisi nilai untuk mengirimkan perintah query terdiri dari 2 parameter yaitu koneksi '$con' dan Sql 'SELECT * FROM mahasiswa WHERE nim='$nim'' untuk menampilkan semua data dari tabel mahasiswa dengan kondisi nim = $nim
 
while($user_data = mysqli_fetch_array($result)) {	//Perulangan untuk mengambil array asosiatif dari variabel $result
	$nim = $user_data['nim'];	//Menampilkan data dari field nim
	$nama = $user_data['nama'];	//Menampilkan data dari field nama
	$jkel = $user_data['jkel'];	//Menampilkan data dari field jkel
	$alamat = $user_data['alamat'];	//Menampilkan data dari field alamat
	$tgllhr = $user_data['tgllhr'];	//Menampilkan data dari field tgllhr
} 
?> 
<html>
<head>
	<title>Edit Data Mahasiswa</title>	<!-- Judul dokuman html 'Edit Data Mahasiswa'-->
</head>
</head>  
<body>
	<a href="index.php">Home</a> <!-- Link menuju halaman index.php-->
	<br><br> 

	<form name="update_mahasiswa" method="post" action="edit.php">	<!-- Form dengan method post dan action edit.php-->
		<table border="0">	<!-- Tabel dengan border '0'-->
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?= $nama ?>"></td>	<!-- input tipe text dengan value dari variabel $nama-->
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="jkel" value="<?= $jkel ?>"></td>	<!-- input tipe text dengan value dari variabel $jkel-->
			</tr>
			<tr>
				<td>alamat</td>
				<td><input type="text" name="alamat" value="<?= $alamat;?>"></td>	<!-- input tipe text dengan value dari variabel $alamat-->
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td><input type="text" name="tgllhr" value="<?= $tgllhr;?>"></td>	<!-- input tipe text dengan value dari variabel $tgllhr-->
			</tr>
			<tr>
				<td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>	<!-- input tipe hidden dengan value dari variabel $nim -->
				<td><input type="submit" name="update" value="Update"></td>	<!-- input tipe submit-->
			</tr>
		</table>
	</form>
</body>
</html>