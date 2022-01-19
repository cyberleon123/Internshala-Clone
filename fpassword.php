<?php
    
    include("database.php");
    if(isset($_POST['forgetpass'])) 
    {
        $email = $_POST['email'];

        $sql = "SELECT * FROM student WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0)
        {
            include("forget.php");
        }
        else{
                echo '<script> alert("Entered Email Is Not Found In The Databse..!")</script>';
        }
    }

?>