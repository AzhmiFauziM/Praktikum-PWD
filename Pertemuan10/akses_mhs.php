<?php
	$url = "http://localhost/PWD10/getdatamhs.php";		//Variabel berisi URL menuju file web service
	$client = curl_init($url);							//inisialisasi sesi Curl menuju url web service
	curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);	//set option pada Curl yang berfungsi untuk mengembalikan transfer menjadi bentuk string
	$response = curl_exec($client);						//Mengeksekusi sesi Curl
	$result = json_decode($response);					//Mengubah objek JSON menjadi objek PHP
	foreach ($result as $r) {							//Perulangan pada nilai array variabel '$result'
		echo "<p>";								
		echo "NIM : " . $r->nim . "<br />";				//Menampilkan data array index nim 
		echo "Nama : " . $r->nama . "<br />";			//Menampilkan data array index nama
		echo "jenis kel : " . $r->jkel . "<br />";		//Menampilkan data array index jkel
		echo "Alamat : " . $r->alamat . "<br />";		//Menampilkan data array index jkel
		echo "Tgl Lahir : " . $r->tgllhr . "<br />";	//Menmapilkan data array index tgllhr
		echo "</p>";
	}
?>