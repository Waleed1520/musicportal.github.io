
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Login</title>
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
     <?php 
									if(isset($_POST['submit'])){
										// session_start();
									require "Database.php";
									//print_r($_POST);
									$username = $_POST['Name'];
									$password = $_POST['Password'];
									$sql = "SELECT * FROM admin WHERE Name='{$username}' and Password='{$password}'";
									//echo $sql;
									$record = mysqli_query($con, $sql);
									if($result = mysqli_fetch_array($record)){
										echo "admin Login..";

										//print_r($result);
										 $_SESSION['Name'] = $result['Name'];
										 $_SESSION['Password'] = $result['Password'];
									
									echo $result['Name']; 
									echo $result['Password'];
										//print_r($_SESSION);
										 header("Location: upload.php");
										}
									else{
										echo "User Name or Password is not correct.";
									}

									}

									?>
	
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="#" class="nav-brand"><h1 style="color: white;">Music_Portal</h1></a>

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
                                    <li><a href="admin.php"><b style="font-size: 20px; color: black; font-family: verdana;">Admin Panel</b> </a>
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                   <?php 
                                    if(isset($_SESSION['is_logged_in']) &&  $_SESSION['is_logged_in'] == true){
                                        //header("Location: user.php");
                                                

                                    ?>
                                    
                                    <div class="login-register-btn mr-50">
                                        <a href="logout.php" id="loginBtn">Logout</a>
                                    </div>
                                <?php }else{ ?>
                                    <div class="login-register-btn mr-50">
                                         <a href="user.php" id="loginBtn">Login / Register</a>
                                    </div>
                                <?php } ?>

                                    
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
					<div class="login-wrap" style="border: 3px solid; border-radius: 20px;">
		      	<h3 class="text-center mb-4">Admin Login</h3>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="signup-form">
		      		<div class="form-group mb-3">
		      			<label class="label" for="name">Admin Name</label>
		      			<input type="text" class="form-control" name="Name" placeholder="" style="background-color: black;">
		      			<span class="icon fa fa-user-o"></span>
		      		</div>
		      	
	            <div class="form-group mb-3">
	            	<label class="label" for="password">Password</label>
	              <input id="password" type="password" class="form-control" name="Password" placeholder="" style="background-color: black;">
	              <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	              <span class="icon fa fa-lock"></span>
	            </div>

	            
	            <div class="form-group">
	            	<button type="submit" name="submit" class="form-control btn btn-success submit px-3" style="background-color: black;">Log In</button>
	            </div>

	            
	            


	          </form>
	          <b><p style="color: white;"><br>Create Account! <a  href="user_registration.php">Sign Up</a></p></b>
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

