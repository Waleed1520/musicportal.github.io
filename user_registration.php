


<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

	</head>
	 <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                         <a href="Home.php"><h1 style="color: white;">Music_Portal</h1></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                 <ul>
                                    <li><a href="Home.php">Home</a></li>
                                    <li><a href="pre_login.php">Albums</a></li>
                                    
                                     
                                    <li><a href="event.html">Events</a></li>
                                    <li><a href="blog.html">News</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="admin.php"><b style="font-size: 20px; color: #83918B; font-family: verdana;">Admin Panel</b> </a>
                                </ul>
                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                         <a href="user.php" id="loginBtn">Login / Register</a>
                                    </div>
                                    <div class="login-register-btn mr-50">
                                        <a href="logout.php" id="loginBtn">Logout</a>
                                    </div>

                                   
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
	<body class="img" style="background-image: url(images/back.jpg);">

		  <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            
        </div>
    </div>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap">
		      	<h3 class="text-center mb-4">Create Your Account</h3>
						<form  method="post" action="newuser.php" class="signup-form" >
		      		<div class="form-group mb-3">
		      			<label class="label" for="name">Full Name</label>
		      			<input type="text" name="Name" class="form-control" placeholder=""  style="background-color: black;">
		      			<span class="icon fa fa-user-o"></span>
		      		</div>
		      		<div class="form-group mb-3">
		      			<label class="label" for="email">Email Address</label>
		      			<input type="text" name="email" class="form-control" placeholder=""  style="background-color: black;">
		      			<span class="icon fa fa-paper-plane-o"></span>
		      		</div>
	            <div class="form-group mb-3">
	            	<label class="label" for="password">Password</label>
	              <input id="password" name="Password" type="password" class="form-control" placeholder=""  style="background-color: black;">
	              <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	              <span class="icon fa fa-lock"></span>
	            </div>
	            

	             <div class="form-group mb-3">
	            	<label class="label" for="dob">Date of Birth</label>
	              <input id="dob" name="dob" type="date" style="color:black;" class="form-control" placeholder="">
	              <span toggle="#password" class=""></span>
	              <span class=""></span>
	            </div>

	            <div class="form-group">
	            	<button type="submit" name="Submit" style="background-color:black;" class="form-control btn btn-primary submit px-3" >Sign Up</button>
	            </div>

	            


	          </form>
	          <b><p style="color: white;">I'm already a member! <a  href="user.php">Log In</a></p></b>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                   <a href="Home.php"><h1 style="color: white;">Music_Portal</h1></a>

                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <b>music_portal</b>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="Home.php">Home</a></li>
                            <li><a href="pre_login.php">Albums</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
   <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

	</body>
</html>

