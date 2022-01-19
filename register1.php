<?php
include("register2.php");
?>

<html>

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		<link rel="icon" href="https://internshala.com//favicon.ico?v=5"/>
		<title>Register</title>
	
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

<body class="bg" style="background-image: url('images/reg2.jpg');">
    <div class="container mt-2" style="margin-left:860px">
    <h3>Please Register Here:</h3><br>
    <form method="post">
    <div class="form-row">

        <div class="form-group col-md-5">
            <label for="inputname">Full Name</label>
            <input type="text" class="form-control" name="fullname" id="inputname" placeholder="Full Name" required>
        </div>

        <div class="form-group col-md-5">
            <label for="inputEmail">E-mail</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
        </div>
        <div class="form-group col-md-5">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" name ="password" id="inputPassword" placeholder="Password" required>
        </div>
    </div>
        <div class="form-group col-md-5">
            <label for="inputPassword">Confirm Password</label>
            <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password" required>
        </div>
    <div class="form-group col-md-5">
        <label for="inputPhone">Phone</label>
        <input type="tel" class="form-control" name="phone" id="inputPhone" max="10" placeholder="1234567890" required>
    </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputCity">City</label>
                <input type="text" name="city" class="form-control" id="inputCity" placeholder="City" required>
            </div>
        <br>
            <div class="form-group col-md-4">
                <label for="inputdob">Date Of Birth</label>
                <input type="date" name="dob" id="inputdob" min="1990-01-01" max="2006-12-31" value="1990-01-01" required>
            </div>
            <br>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" required>
            <label class="form-check-label" for="gridCheck">
                I Agree To The Terms And Conditions..
            </label>
            </div>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
    </form>
	</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
