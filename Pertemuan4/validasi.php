<html>
<head>
	<style>
	.error {color: #FF0000;}
	</style>
</head>
<body>
	<?php
 		// define variables and set to empty values
 		$namaErr = $emailErr = $genderErr = $websiteErr = "";
		$nama = $email = $gender = $comment = $website = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["nama"])) {
				$namaErr = "Nama harus diisi";
			}
 			if (empty($_POST["email"])) {
				$emailErr = "Email harus diisi";
			}else{
				if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Email tidak sesuai format";
				}
			}
	 
			if (empty($_POST["website"])) {
				$website = "";
			}
	 
			if (empty($_POST["comment"])) {
				$comment = "";
			}
	 
			if (empty($_POST["gender"])) {
				$genderErr = "Gender harus dipilih";
			}

		}
 
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
	<h2>Posting Komentar </h2>
 	<p><span class = "error">* Harus Diisi.</span></p>
 
	<form method = "post" action = "<?php
		echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td>Nama:</td>
				<td><input type = "text" name = "nama">
				<span class = "error">* <?php echo $namaErr;?></span>
				</td>
			</tr>
 
			<tr>
				<td>E-mail: </td>
				<td><input type = "text" name = "email">
				<span class = "error">* <?php echo $emailErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Website:</td>
				<td> <input type = "text" name = "website">
				<span class = "error"><?php echo $websiteErr;?></span>
				</td>
			</tr> 
			<tr>
				<td>Komentar:</td>
				<td> <textarea name = "comment" rows = "5" cols = "40"></textarea></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					<input type = "radio" name = "gender" value = "L">Laki-Laki
					<input type = "radio" name = "gender" value = "P">Perempuan
					<span class = "error">* <?php echo $genderErr;?></span>
				</td>
			</tr>
			<tr>
				<td><input type = "submit" name = "submit" value = "Submit"></td>
			</tr>
		</table>
	</form>
 
	<?php
		echo "<h2>Data yang anda isi:</h2>";
		if (!empty($_POST["nama"]) && !empty($_POST["email"]) && !empty($_POST["gender"])) {
				if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Email tidak sesuai format";
				}else{
					$nama = test_input($_POST["nama"]);
					$email = test_input($_POST["email"]);
					$website = test_input($_POST["website"]);
					$comment = test_input($_POST["comment"]);
					$gender = test_input($_POST["gender"]);
					echo "<table border='1' cellspacing='0'>";
					echo "<tr><td>Nama</td><td>".$nama."</td></tr>";
					echo "<tr><td>Email</td><td>".$email."</td></tr>";
					echo "<tr><td>Website</td><td>".$website."</td></tr>";
					echo "<tr><td>Comment</td><td>".$comment."</td></tr>";
					echo "<tr><td>Gender</td><td>".$gender."</td></tr>";
				}
			}

	?>
</body>
</html>
