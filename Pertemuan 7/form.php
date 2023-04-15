<!DOCTYPE html>
<html>
<head>
	<title>FORM BIODATA</title>
	<style>
		body{
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		label{
			font-weight: 500;
		}
		input[type=text], select {
			padding: 10px;
			border-radius: 20px;
			border: none;
			margin-bottom: 10px;
			font-size: 18px;
			width: 100%;
		}

		input[type=submit] {
			padding: 10px;
			background-color: #4CAF50;
			color: white;
			border-radius: 20px;
			border: none;
			cursor: pointer;
			font-size: 18px;
			width: 100%;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		form {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			border-radius: 20px;
			background-color: #f2f2f2;
		}

		h2 {
			text-align: center;
		}

	</style>
</head>
<body>
	<?php
	
	session_start();


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['gender'] = $_POST['gender'];
		$_SESSION['birth_place'] = $_POST['birth_place'];
		$_SESSION['birth_date'] = $_POST['birth_date'];
		$_SESSION['religion'] = $_POST['religion'];
		$_SESSION['home_address'] = $_POST['home_address'];

	
		setcookie('name', $_POST['name'], time() + (86400 * 30), '/'); // expires in 30 days


		header('Location: biodata.php');
		exit();
	}
	?>

	<form method="post" action="">
		<h2>BIODATA</h2>
		<label for="name">Nama lengkap:</label>
		<input type="text" id="name" name="name" required>

		<label for="gender">Jenis Kelamin:</label>
		<select id="gender" name="gender" required>
			<option value="">Jenis kelamin</option>
			<option value="Male">laki-laki</option>
			<option value="Female">perempuan</option>
		</select>

		<label for="birth_place">Tempat Lahir:</label> 
		
		<input type="text" id="birth_place" name="birth_place" required>

		<label for="birth_date">Tanggal Lahir:</label>
		<input type="date" id="birth_date" name="birth_date" required>
		<br>
		<label for="religion">Agama:</label>
		<select id="religion" name="religion" required>
			<option value="">pilih agama</option>
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
		</select>

		<label for="home_address">Alamat lengkap:</label>
		<textarea id="home_address" name="home_address" rows="4" required></textarea>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
