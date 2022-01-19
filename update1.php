<?php
    include("database.php");
    session_start();
    if(($_SESSION['email']))
    {
        $email = $_SESSION['email'];
        $name = $_SESSION['name'];
        $city = $_SESSION['city'];
        $phone = $_SESSION['phone'];
        $dob = $_SESSION['dob'];

        if(isset($_POST['update']))
        {

            $newname = $_POST['profileName'];
            $newphone=$_POST['profilePhone'];
            $newcity=$_POST['profileCity'];
            $newdob=$_POST['profileDOB'];

            $sql="UPDATE student SET name = '$newname', phone = $newphone, city = '$newcity', dob = '$newdob'
                                WHERE email = '$email'";

            $result = mysqli_query($conn, $sql);

            if($result)
            {
                echo '<script>alert("Profile Updated Successfully!!!"); </script>';
                include("welcome.html");
            }
            else{
                echo '<script>alert("Oops..Something Went Wrong!!!"); </script>';
            }
        }
    }
?>