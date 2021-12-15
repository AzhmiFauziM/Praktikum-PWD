<?php
	include "koneksi.php";							//Menyertakan file 'koneksi.php'
	$sql="select * from mahasiswa order by nim";	//Variabel berisi query untuk menampilkan semua data pada tabel mahasiswa dengan mengurutkan data berdasarkan nim dari terkecil ke besar
	$tampil = mysqli_query($con,$sql);				//Variabel berisi perintah untuk mengirim query pada variabel '$sql'dengan koneksi '$con'
	if (mysqli_num_rows($tampil) > 0) {				//Percabangan dengan kondisi jumlah baris pada tabel mahasiswa > 0
		$no=1;										//Variabel '$no' berisi nilai 1
		$response = array();						//Variabel '$response' berisi inisialisasi array
		$response["data"] = array();				//Memberikan nama pada array yaitu dengan nama 'data'
		while ($r = mysqli_fetch_array($tampil)) {	//Perulangan untuk menampilkan seluruh data pada tabel mahasiswa
			$h['nim'] = $r['nim'];					//Pada indeks 'nim' berisi data pada tabel mahasiswa kolom 'nim'
			$h['nama'] = $r['nama'];				//Pada indeks 'nama' berisi data pada tabel mahasiswa kolom 'nama'
			$h['jkel'] = $r['jkel'];				//Pada indeks 'jkel' berisi data pada tabel mahasiswa kolom 'jkel'
			$h['alamat'] = $r['alamat'];			//Pada indeks 'alamat' berisi data pada tabel mahasiswa kolom 'alamat'
			$h['tgllhr'] = $r['tgllhr'];			//Pada indeks 'tgllhr' berisi data pada tabel mahasiswa kolom 'tgllhr'
			array_push($response["data"], $h);		//Menambahkan elemen pada array dengan variabel '$response' dan '$h'
		}
		echo json_encode($response);				//Untuk encoding array pada variabel '$response' menjadi JSON
	}
	else {											//Percabangna jika jumlah baris pada tabel mahasiswa ≤ 0
		$response["message"]="tidak ada data";		//Pada indeks message berisi kalimat 'tidak ada data'
		echo json_encode($response);				//Untuk encoding array pada variabel '$response' menjadi JSON
	}
?>