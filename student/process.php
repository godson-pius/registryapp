<?php
	require_once 'config.php';

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$tmp_password = $_POST['password'];
		$password = sha1($tmp_password);
		$check = $_POST['check'];

		$sql = "SELECT * FROM students WHERE Email_address = '$email' AND Password = '$password'";
		$query = mysqli_query($link, $sql);

		if (mysqli_num_rows($query) > 0) {
			$data = mysqli_fetch_assoc($query);
			$name = $data['First_name'];
			header("Location: dashboard.html?name=$name");
		} else {
			header("Location: index.php?err=Not Valid");
		}
	}



?>
