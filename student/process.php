<?php
	// require_once 'config.php';

	// if (isset($_POST['submit'])) {
	// 	$email = $_POST['email'];
	// 	$tmp_password = $_POST['password'];
	// 	$password = sha1($tmp_password);
	// 	$check = $_POST['check'];

	// 	$sql = "SELECT * FROM students WHERE Email_address = '$email' AND Password = '$password'";
	// 	$query = mysqli_query($link, $sql);

	// 	if (mysqli_num_rows($query) > 0) {
	// 		$data = mysqli_fetch_assoc($query);
	// 		$name = $data['First_name'];
	// 		header("Location: dashboard.html?name=$name");
	// 	} else {
	// 		header("Location: index.php?err=Not Valid");
	// 	}
	// }


	include("config.php");

	session_start();


	if($_SERVER["REQUEST_METHOD"] =="POST"){
	if($_POST['check']==NULL){
		$err="please check the box to proceed";
header("location:index.php?err=$err");
	}
	else{
		$email = mysqli_real_escape_string($link, $_POST['email']);
		$password = mysqli_real_escape_string($link, $_POST['password']);



		$sql = "SELECT * from students where Student_id = '$email' || Email_address = '$email'";
		$sql2 = "SELECT * from students where Passwords = '$password' && Email_address = '$email'";
		$sql3 = "SELECT * from students where Passwords = '$password' && Student_id = '$email'";
		$result = mysqli_query($link,$sql);
		$result2 = mysqli_query($link,$sql2);
		$result3 = mysqli_query($link,$sql3);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


		$count = mysqli_num_rows($result);
		$count2 = mysqli_num_rows($result2);
		$count3 = mysqli_num_rows($result3);

		if($count == 1){
			if($count2 == 1 || $count3 == 1){
			$_SESSION['Id_no'] = $row['Id_no'];
			$_SESSION["user"] = $row;

			$fname = $row['First_name'];
			$lname = $row['Last_name'];
			$email2 = $row['Email_address'];
			$id = $row['Id_no'];

			$time = time() + 86400;

				setcookie('fname',$fname,$time);
				setcookie('lname',$lname,$time);
				setcookie('email',$email2,$time);
				setcookie('id',$id,$time);


			if(isset($_SESSION["Id_no"]) || $_SESSION["user"] == true){

				header("location: dashboard.php?");
				exit;
			}
		}
		else{
			header("Location: index.php?err=Invalid Password Please Enter Correctly");

		}
		}
		else{
			header("Location: index.php?err=SORRY! this email does not exist in our database");
		}


	}
}
?>
