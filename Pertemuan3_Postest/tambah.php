<html>
<head>
	<title>Tambah data mahasiswa</title>   <!-- Judul dokumen HTML 'Tambah data mahasiswa'-->
</head> 
<body>
	<a href="index.php">Go to Home</a> <!-- Link menuju halaman 'index.php'-->
	<br/><br/> 
 
    <form action="tambah.php" method="post" name="form1">   <!-- Form dengan action 'tambah.php dan method post-->
    	<table width="25%" border="0">     <!-- Tabel dengan lebar 25% dan border '0'-->
    		<tr>
    			<td>Nim</td>
    			<td><input type="text" name="nim"></td>  <!-- Menampilkan input tipe text untuk mengisi nim-->
    		</tr>
    		<tr>
    			<td>Nama</td>
    			<td><input type="text" name="nama"></td>    <!-- Input tipe text untuk mengisi nama-->
    		</tr>
    		<tr>
    			<td>Gender (L/P)</td>
    			<td><input type="text" name="jkel"></td>     <!-- Input tipe text untuk mengisi jenis kelamin-->
    		</tr>
    		<tr>
    			<td>Alamat</td>
    			<td><input type="text" name="alamat"></td>   <!-- Input tipe text untuk mengisi alamat-->
    		</tr>
    		<tr>
    			<td>Tgl Lahir</td>
    			<td><input type="text" name="tgllhr"></td>   <!-- Input tipe text untuk mengisi tanggal lahir-->
    		</tr>
    		<tr>
    			<td></td>
    			<td><input type="submit" name="Submit" value="Tambah"></td>  <!-- Input tipe submit-->
    		</tr>
    	</table>
    </form> 
 
	<?php
		if(isset($_POST['Submit'])) { //Percabangan jika variabel submit ada maka kondisi terpenuhi 
			$nim = $_POST['nim'];    //Variabel berisi nim
			$nama = $_POST['nama'];  //Variabel berisi nama
			$jkel = $_POST['jkel'];  //Variabel berisi jkel
			$alamat = $_POST['alamat'];  //Variabel berisi alamat
			$tgllhr = $_POST['tgllhr'];  //Variabel berisi tgllhr
 
   			include_once("koneksi.php"); //Menyertakan file 'koneksi.php' dan dieksekusi sekali saja
 
			$result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr) VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr')");  //Variabel berisi nilai untuk mengirimkan perintah query terdiri dari 2 parameter yaitu koneksi '$con' dan Sql 'INSERT INTO mahasiswa(nim, nama, jkel, alamat, tgllhr' untuk menambahkan data pada tabel mahasiswa dengan values dari isi variabel $nim, $nama, $jkel, $alamat, $tgllhr
 
			echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";   //Menampilkan teks 'Data berhasil disimpan' dan link menuju halaman index.php
		} 
	?> 
</body>
</html>