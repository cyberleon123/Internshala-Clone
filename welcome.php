<?php
    if(!$_SESSION['email'])
    {
        header("LOCATION: login.php");
    }
    else{
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $city =	$_SESSION['city'];
        $phone = $_SESSION['phone'];
        $dob = $_SESSION['dob'];
    }

?>
