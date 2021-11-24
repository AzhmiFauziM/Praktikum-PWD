<?php
	session_start();
	session_destroy();
	echo "Anda telah sukses keluar sistem <b>LOGOUT</b><br>";
	echo "<a href='form_login.php'>Login</a>";
?>