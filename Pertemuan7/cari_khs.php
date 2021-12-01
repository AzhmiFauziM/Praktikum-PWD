<?php 
	include 'koneksi.php';								//Menyertakan file 'koneksi.php'
?>
	<h3>Form Pencarian DATA KHS Dengan PHP </h3>		<!--Menampilkan teks -->
	<form action="" method="get">						<!--Form dengan method 'get' -->
		<label>Cari :</label>							<!--Label berisi teks 'Cari :' -->
		<input type="text" name="cari">					<!--Input tipe 'text' dan name 'cari' -->
		<input type="submit" value="Cari">				<!--Input tipe 'submit' dan value 'Cari' -->	
	</form>
<?php 
	if(isset($_GET['cari'])){							//Kondisi jika nilai "$_GET['cari']" tersedia, maka terpenuhi
		$cari = $_GET['cari'];							//Variabel berisi hasil inputan dari input cari
		echo "<b>Hasil pencarian : ".$cari."</b>";		//Menampilkan teks dan isi variabel '$cari'
	}
?>
	<table border="1">									<!--Tabel dengan border 1 -->
		<tr>
			<th>No</th>									<!--Kolom dengan isi teks 'No' -->
			<th>NIM</th>								<!--Kolom dengan isi teks 'NIM' -->
			<th>Kode MK</th>							<!--Kolom dengan isi teks 'Kode MK' -->
			<th>Nilai</th>								<!--Kolom dengan isi teks 'Nilai' -->
		</tr>
		<?php 
		if(isset($_GET['cari'])){						//Kondisi jika nilai "$_GET['cari']" tersedia, maka terpenuhi
			$cari = $_GET['cari'];						//Variabel berisi hasil inputan dari input 'cari'
			$sql="select * from KHS where nim = '".$cari."'";	//Variabel berisi query untuk menampilkan semua data pada tabel KHS dengan kondisi nim = '$cari'
			$tampil = mysqli_query($con,$sql);
		}else{											//Jika tidak memenuhi kondisi di atas
			$sql="select * from KHS";					//Variabel berisi query untuk menampilkan semua data pada tabel KHS
			$tampil = mysqli_query($con,$sql);			//Variabel berisi perintah untuk mengirimkan query pada variabel '$sql' dengan koneksi '$con'
		}
		$no = 1;										//Variabel '$no' berisi nilai 1
		while($r = mysqli_fetch_array($tampil)){	//Perulangan untuk menampilkan array dari seluruh data pada tabel KHS
		?>
		<tr>
			<td><?php echo $no++; ?></td>			<!--Menampilkan isi variabel '$no' dan menambahkan 1 pada nilainya -->
			<td><?php echo $r['NIM']; ?></td>		<!--Menampilkan data array pada kolom 'NIM' -->
			<td><?php echo $r['kodeMK']; ?></td>	<!--Menampilkan data array pada kolom 'kodeMK' -->
			<td><?php echo $r['nilai']; ?></td>		<!--Menampilkan data array pada kolom 'nilai' -->
		</tr>
		<?php } ?>
	</table>
