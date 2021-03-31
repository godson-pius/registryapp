<?php
require_once("config.php");
extract($_POST);
$errl="";
if(isset ($_POST['submit'])){
$sql = "SELECT * from students where Student_id = '$email' || Email_address = '$email'";
$result = mysqli_query($link,$sql);
$count = mysqli_num_rows($result);
if($count==1){
	if($pass==$con){
 $sql2="UPDATE students SET Passwords='$pass' where Email_address ='$email' || Student_id='$email'";
 $result2 = mysqli_query($link, $sql2);
if($result2){
	$errl="success! Password updated successfully";
	header("location:index.php?errl=$errl");
}
else{
		$errl= "Sorry! not successful Please try again";
		header("location:login.php?errl=$errl");
	
}
}
else{
	$errl= "The two passwords does not match";
	header("location:login.php?errl=$errl");

}
}
else{
	$errl= "sorry this user does not exist in our database";
header("location:login.php?errl=$errl");
}
}

?>