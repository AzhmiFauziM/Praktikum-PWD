<?php 
	include 'koneksi.php';
?>
	<h3>Form Pencarian DATA KHS Dengan PHP </h3>
	<form action="" method="get">
		<label>Cari :</label>
		<input type="text" name="cari">
		<input type="submit" value="Cari">
	</form>
<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		echo "<b>Hasil pencarian : ".$cari."</b>";
	}
?>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Mahasiswa</th>
			<th>Kode MataKuliah</th>
			<th>Nama MataKuliah</th>
			<th>Nilai</th>
		</tr>
		<?php 
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$sql = "SELECT * FROM khs INNER JOIN mahasiswa ON khs.NIM = mahasiswa.nim INNER JOIN matakuliah ON khs.kodemK = matakuliah.kode WHERE khs.NIM = '".$cari."'";
			$tampil = mysqli_query($con,$sql);
		}else{
			$sql = "SELECT * FROM khs INNER JOIN mahasiswa ON khs.NIM = mahasiswa.nim INNER JOIN matakuliah ON khs.kodemK = matakuliah.kode";
			$tampil = mysqli_query($con,$sql);
		}
		$no = 1;
		while($r = mysqli_fetch_array($tampil)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $r['NIM']; ?></td>
			<td><?php echo $r['nama']; ?></td>
			<td><?php echo $r['kodeMK']; ?></td>
			<td><?php echo $r['namaMK']; ?></td>
			<td><?php echo $r['nilai']; ?></td>
		</tr>
		<?php } ?>
	</table>
