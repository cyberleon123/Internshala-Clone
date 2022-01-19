<?php
    session_start();
    if(($_SESSION['email']))
    {
        $email = $_SESSION['email'];
        $name = $_SESSION['name'];
        $city = $_SESSION['city'];
        $phone = $_SESSION['phone'];
        $dob = $_SESSION['dob'];
    }
?>