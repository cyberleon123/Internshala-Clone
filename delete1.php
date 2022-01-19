<?php
    include("database.php");
    session_start();
    if(isset($_POST['deleteAccount'])) 
    {
        $email = $_SESSION['email'];
        $delemail = $_POST['email'];
        if($delemail == $email)
        {
            $sql = "DELETE FROM student WHERE email = '$delemail'";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                echo '<script>alert("Account Deleted Successfully");</script>';
    
                echo '<script> window.location.href = "login.php"; </script>';
                exit();
                
            }
            else
            {
                echo "Error Occured!!!";
            }
        }
        else{
            echo '<script> alert("Wrong Email Entered..!");</script>';
            echo '<script> window.location.href = "delete.php"; </script>';
        }
        
    }
?>