<?php
    include("fpassword.php");
?>

<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="https://internshala.com//favicon.ico?v=5"/>
    <title>Forget Password</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="style.css">
</head>

<header>
    <div class="shadow-sm p-3 mb-5 bg-white rounded;">
    <div style="margin-right: 50px; margin-bottom: -14px;">
        <img src="images/is5.jpg" style="margin-left: 155px; margin-top: -7px" align="center" height=59, width=142, alt="internshala logo"> 
        <font size="4" color="#48494a" face="calibri"> 
            <nav style="float: right; margin-right: 100px" class="crumb">
                  
                <ul class="nav" style="margin-top: -2;">
                    <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" href="#" aria-expanded="false" style="text-decoration: none; color: rgb(59, 59, 59);">Internships</a> 
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Location</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Category</a></li>
                          </ul>
                    </li>
                    <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"; style="text-decoration: none;  color: rgb(59, 59, 59);">
                            Online Training <span id="headOffer">OFFER</span></a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Programming</a></li>
                            <li><a class="dropdown-item" href="#">Business & Management</a></li>
                            <li><a class="dropdown-item" href="#">Core Engineering</a></li>
                            <li><a class="dropdown-item" href="#">Data Science</a></li>
                            <li><a class="dropdown-item" href="#">Design</a></li>
                            <li><a class="dropdown-item" href="#">Language</a></li>
                            <li><a class="dropdown-item" href="#">Career Development</a></li>
                            <li><a class="dropdown-item" href="#">Architecture</a></li>
                            <li><a class="dropdown-item" href="#">Specializations <span id="headOffer">OFFER</span></a></li>

                          </ul>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="#" style="text-decoration: none; color: rgb(59, 59, 59);">Fresher Jobs</a>
                    </li>
                    <li>
                    <a href="login.php">
                        <button class="headingbutton"><b>Login</b></button></a>
                    </li>
                    <li>
                    <a href="register1.php">
                        <button class="headingbutton" id="register"><b>Register</b></button></a>
                    </li>
              </nav> 
          </font>
    </div>
    </div>
</header>
<body>
<div style="margin-top: 30px"></div>
    <div class="max-width-container">
        <div class="login_wrap" id="login_container">
            <div id="form_container">
                <form action="fpassword.php" method="post">
                    <div class="form-group">
                        <center><label for="inputEmail"><h5><b>Enter Your Email:</b></h5></label></center><br>
                        <input type="email" class="form-control" name="email" id="inputEmail" style="height: 40px; border: grey 2px solid; border-radius: 5px;" placeholder="Email" required>
                    </div>
                    <br>
                    <center>
                    <button style="background-color: #008bde;
                                    border-radius: 5px;
                                    border: none;
                                    height: 38px;
                                    color: #eee;
                                    font-size: 17px;
                                    cursor: pointer;
                                    text-align: center;
                                    font-weight: 600;
                                    width: 150px;"
									name="forgetpass">Forget Password
                    </button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<div id="footer" class="generic_footer">
	<div class="max-width-container">
	  <div class="footer_container">
		<!-- footer coloumn -1 -->

		<div class="footer_column">
		  <div class="footer_list">
			<h5><b>Internships by places</b></h5>
			<div class="footer_list_item">
			  <a href="#">Internships in India</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Internships in Delhi</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Internships in Bangalore</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Internships in Hyderabad</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Internships in Mumbai</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Internships in Chennai</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Internships in Gurgaon</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Internships in Kolkata</a>
			</div>
		  </div>
		</div>

		<!-- footer coloumn -2  -->
		<div class="footer_column">
		  <div class="footer_list">
			<h5><b>Internships by Stream</b></h5>
			<div class="footer_list_item">
			  <a href="#">Computer Science Internship</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Electronics Internship</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Mechanical Internship</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Civil Internship</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Marketing Internship</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Chemical Internship</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Finance Internship</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Summer Research Fellowship</a>
			</div>
		  </div>
		</div>
		<!-- footer coloumn -3 -->
		<div class="footer_column">
		  <div class="footer_list">
			<h5><b>
			  Online Trainings</b>
			  <span class="orange"> <a href="#">OFFER</a></span>
			</h5>
			<div class="footer_list_item">
			  <a href="#">Programming with python</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Digital Marketing</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Web Development</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Machine Learning</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Advance Excel</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Ethical Hacking</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Auto CAD</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Creative Writing</a>
			</div>
		  </div>
		</div>
		<!-- footer coloumn -4 -->
		<div class="footer_column">
		  <div class="footer_list">
			<h5><b>About Internshala</b></h5>
			<div class="footer_list_item">
			  <a href="#">About Us</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">We're hiring</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Hire Interns for your company</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Team Diary</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Blog</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Our Services</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Terms and Conditions</a>
			</div>
			<div class="footer_list_item">
			  <a href="#">Privacy</a>
			</div>
		  </div>
		</div>
	  </div>

	  <!-- footer bottom -->
	  <br />
	  <div id="footer_bottom">
		<!-- Android app button -->
		<div id="android_app_container" class="footer_list_item">
		  <a href="#">
			<i class="bi bi-play fa-lg"> <span>Get Android App</span></i>
		  </a>
		</div>
		<!-- Social media Icons -->
		<div id="social_media_container">
		  <span>
			<a href="#"> <i class="bi bi-instagram footer_icons"></i></a>
			<a href="#"><i class="bi bi-twitter footer_icons"></i></a>
			<a href="#"><i class="bi bi-youtube footer_icons"></i></a>
			<a href="#"><i class="bi bi-linkedin-in footer_icons"></i></a>
		  </span>
		</div>

		<div id="copyright">
		  <span>© Copyright 2021 InternShala</span>
		</div>
	  </div>
	</div>
  </div>
</body>
</html>
