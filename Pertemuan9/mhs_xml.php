<?php
	include "koneksi.php"; 						//Menyertakan file 'koneksi.php'
	header('Content-Type: text/xml');			//Mengirimkan header 'Content-Type: text/xml' untuk mengatur content-type
	$query = "SELECT * FROM mahasiswa";			//Variabel berisi query untuk menampilkan semua data pada tabel mahasiswa
	$hasil = mysqli_query($con,$query);			//Variabel berisi perintah untuk mengirim query pada variabel '$query'dengan koneksi '$con'
	$jumField = mysqli_num_fields($hasil);		//Variabel berisi perintah untuk mengembalikan jumlah kolom pada tabel mahasiswa
	echo "<?xml version='1.0'?>";				//Menampilkan tag <?xml version'1,0'>
	echo "<data>";								//Menampilkan tag <data>
	while ($data = mysqli_fetch_array($hasil)){	//Perulangan untuk menampilkan seluruh data pada tabel mahasiswa
		echo"<mahasiswa>";								//Menampilkan tag <mahasiswa>
		echo"<nim>",$data['nim'],"</nim>";				//Menampilkan data dari tabel mahasiswa kolom 'nim' pada tag <nim>
		echo"<nama>",$data['nama'],"</nama>";			//Menampilkan data dari tabel mahasiswa kolom 'nama' pada tag <nama>
		echo"<jkel>",$data['jkel'],"</jkel>";			//Menampilkan data dari tabel mahasiswa kolom 'jkel' pada tag <jkel>
		echo"<alamat>",$data['alamat'],"</alamat>";		//Menampilkan data dari tabel mahasiswa kolom 'alamat' pada tag <alamat>
		echo"<tgllhr>",$data['tgllhr'],"</tgllhr>";		//Menampilkan data dari tabel mahasiswa kolom 'tgllhr' pada tag <tgllhr>
		echo "</mahasiswa>";							//Menampilkan tag penutup </mahasiswa>
	}
	echo "</data>";										//Menampilkan tag penutup </data>
?>