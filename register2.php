<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	 
	 $name = $_POST['fullname'];
	 $email = $_POST['email'];
	 $password=$_POST['password'];
	 $confirm_password=$_POST['confirm_password'];
	 $phone=$_POST['phone'];
     $city=$_POST['city'];
     $dob=$_POST['dob'];

	$sql = "SELECT * FROM student WHERE email = '$email'";
	$result = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($result);
	if($num_rows > 0)
	{
		echo '<script>alert("Email Already Exists")</script>';
	}
	 //name_validation
	else if (!preg_match ("/^[a-z A-z]*$/", $name) ) {    
        echo '<script>alert("Only alphabets and whitespace are allowed.")</script>';  
	}

	else if($password != $confirm_password){
		echo '<script>alert("Password And Confirm Password Is Not Same !")</script>';
	}
	else
	{
		$sql = "INSERT INTO student VALUES ('$email', '$password', '$name', $phone, '$city', '$dob')";
		if (mysqli_query($conn, $sql)) {
			echo '<script> alert("Account Created Successfully !")</script>';
			echo '<script> window.location.href = "login.php"; </script>';
			
		} else {
			echo '<script>alert("Oops Something Went Wrong!"); </script>';
		}
		
	}  
		mysqli_close($conn);
}
?>