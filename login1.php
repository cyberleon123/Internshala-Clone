<?php
include("database.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM student WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($result);
	if($num_rows > 0)
	{
		$data = mysqli_fetch_assoc($result);
		$email = $data['email'];
		$name = $data['name'];
		$city = $data['city'];
		$phone = $data['phone'];
		$dob = $data['dob'];
		$_SESSION['email']=$email;
		$_SESSION['name']=$name;
		$_SESSION['city']=$city;
		$_SESSION['phone']=$phone;
		$_SESSION['dob']=$dob;
		echo "<script> alert('Login Successful!!!')</script>";
		include("welcome.html");
		exit();
		//header("Location: welcome.php");
	}

	else
	{
		echo "<script> alert('Wrong Username Or Password !')</script>";
	}
}

?>