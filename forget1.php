<?php
    include("database.php");
    if(isset($_POST['updatepass']))
    {
        $new = $_POST['newpass'];
        $cpass = $_POST['cpass'];
        $email = $_POST['email'];

        if($new != $cpass)
        {
            echo '<script>alert("Password Not Same");</script>';
            echo '<script> window.location.href = "forget.php"; </script>';
        }
        
        else{
            $sql = "UPDATE student SET password = '$new' WHERE email = '$email'";

            if (mysqli_query($conn, $sql)) {
                echo '<script> alert("Password Updated Successfully, Please Continue To Login.!!!") </script>';
                echo '<script> window.location.href = "login.php"; </script>';
            } else {
                echo '<script>alert("Something Went Wrong!!!");</script>';
            }
        }
    
    }
?>