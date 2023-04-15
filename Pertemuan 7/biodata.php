<!DOCTYPE html>
<html>
<head>
	<title>Registration Successful</title>
	<style>
		body {
			font-size: 20px;
			line-height: 1.5;
			padding: 50px;
			text-align: center;
		}

		h1 {
			font-size: 30px;
			margin-bottom: 20px;
		}

		table {
			margin: 0 auto;
			text-align: left;
		}

		th {
			padding: 10px;
			background-color: #f2f2f2;
			font-weight: bold;
		}

		td {
			padding: 10px;
			border-bottom: 1px solid #ddd;
		}

	</style>
</head>
<body>
	<?php
	// Start the session
	session_start();

	// Check if session variables are set
	if (isset($_SESSION['name']) && isset($_SESSION['gender']) && isset($_SESSION['birth_place']) && isset($_SESSION['birth_date']) && isset($_SESSION['religion']) && isset($_SESSION['home_address'])) {
		// Display success message
		echo '<h1>Registration Successful!</h1>';
		echo '<p>Data anda berhasil tersimpan, berikut inputannya:</p>';

		// Display form data in a table
		echo '<table>';
		echo '<tr><th>Keterangan</th><th>Data</th></tr>';
		echo '<tr><td>Name:</td><td>' . $_SESSION['name'] . '</td></tr>';
		echo '<tr><td>Gender:</td><td>' . $_SESSION['gender'] . '</td></tr>';
		echo '<tr><td>Place of Birth:</td><td>' . $_SESSION['birth_place'] . '</td></tr>';
		echo '<tr><td>Date of Birth:</td><td>' . $_SESSION['birth_date'] . '</td></tr>';
		echo '<tr><td>Religion:</td><td>' . $_SESSION['religion'] . '</td></tr>';
		echo '<tr><td>Home Address:</td><td>' . $_SESSION['home_address'] . '</td></tr>';
		echo '</table>';

		// Unset session variables
		session_unset();

	} else {
		// Display error message
		echo '<h1>Error</h1>';
		echo '<p>Maaf error restart.</p>';
	}
	?>

	<p><a href="form.php">Kembali</a></p>

	<?php
	// Check if the cookie is set
	if (isset($_COOKIE['name'])) {
		echo '<p>Data Anda Berhasil disimpan !</p>';
	}
	?>
</body>
</html>
