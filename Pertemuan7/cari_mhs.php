<?php 
	include 'koneksi.php';								//Menyertakan file 'koneksi.php'
?>
	<h3>Form Pencarian Dengan PHP MAHASISWA</h3>		<!--Menampilkan teks -->
	<form action="" method="get">						<!--Form dengan method 'get' -->
		<label>Cari :</label>							<!--Label berisi teks 'Cari :' -->
		<input type="text" name="cari">					<!--Input tipe 'text' dan nama 'cari' -->
		<input type="submit" value="Cari">				<!--Input tipe 'submit' dan value 'Cari' -->
	</form>
<?php 
	if(isset($_GET['cari'])){							//Kondisi jika nilai "$_GET['cari']" tersedia, maka terpenuhi
		$cari = $_GET['cari'];							//Variabel berisi hasil inputan dari input 'cari'
		echo "<b>Hasil pencarian : ".$cari."</b>";		//Menampilkan teks dan isi variabel '$cari'
	}
?>
	<table border="1">									<!--Tabel dengan border 1 -->
		<tr>
			<th>No</th>									<!--Kolom dengan isi teks 'No' -->
			<th>Nama</th>								<!--Kolom dengan isi teks 'Nama' -->
		</tr>
		<?php 
		if(isset($_GET['cari'])){						//Kondisi jika nilai "$_GET['cari']" tersedia, maka terpenuhi
			$cari = $_GET['cari'];						//Variabel berisi hasil inputan dari input 'cari'
			$sql="select * from mahasiswa where nama like'%".$cari."%'";	//Variabel berisi query untuk menampilkan semua data pada tabel mahasiswa dengan kondisi nama mengandung karakter pada variabel '$cari'
			$tampil = mysqli_query($con,$sql);			//Variabel berisi perintah untuk mengirimkan query pada variabel '$sql'dengan koneksi '$con'
		}else{											//Jika tidak memenuhi kondisi di atas
			$sql="select * from mahasiswa";		//Variabel berisi query untuk menampilkan semua data pada tabel mahasiswa
			$tampil = mysqli_query($con,$sql);			//Variabel berisi perintah untuk mengirimkan query pada variabel '$sql' dengan koneksi '$con'
		}
		$no = 1;										//Variabel '$no' berisi nilai 1
		while($r = mysqli_fetch_array($tampil)){//Perulangan untuk menampilkan array dari seluruh data pada tabel mahasiswa
		?>
		<tr>
			<td><?php echo $no++; ?></td>		<!--Menampilkan isi variabel '$no' dan menambahkan 1 pada nilainya -->
			<td><?php echo $r['nama']; ?></td>	<!--Menampilkan data array pada kolom nama -->
		</tr>
		<?php } ?>
	</table>
