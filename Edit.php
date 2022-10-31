<?php  
session_start();
require"Database.php" ;

// if(isset($_SESSION['is_logged_in']) &&  !empty($_SESSION['is_logged_in']) ){
//     header("Location: admin.php");

if(isset($_POST['update'])){
	echo "<pre>";
	//print_r($_GET);

	$ID = $_POST['ID'];
	$filename = $_POST['Filename'];
	$details = $_POST['Description'];

	$sql = "UPDATE datadetails SET filename = '{$filename}', details = '{$description}' WHERE filename = '{$ID}'";
	//exit();
	if(mysqli_query($con, $sql)){
		//echo "DAta Updated...";
		header("Location: display.php?update=updated");
	}

}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login Panel</title>
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
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

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
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="Home.php">Home</a></li>
                                            <li><a href="pre_login.php">Albums</a></li>
                                            <li><a href="event.html">Events</a></li>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="#">Dropdown</a>
                                               
                                                    </li>
                                                    <li><a href="#">Even Dropdown</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="event.html">Events</a></li>
                                    <li><a href="blog.html">News</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <?php 
                                    if(isset($_SESSION['is_logged_in']) &&  $_SESSION['is_logged_in'] == true){
                                        //header("Location: user.php");
                                                

                                    ?>
                                    
                                    <div class="login-register-btn mr-50">
                                        <a href="main.php" id="loginBtn">Login / Register</a>
                                    </div>
                                <?php }else{ ?>
                                    <div class="login-register-btn mr-50">
                                        <a href="logout.php" id="loginBtn">Logout</a>
                                    </div>
                                <?php } ?>

                                    <!-- Cart Button -->
                                    <div class="cart-btn">
                                        <p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>
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

<body class="img" style="background-image: url(images/bg.jpg);">

		  <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap">
		      	<h1 class="text-center mb-4" style="color: white;">Welcome to My Music Collection<br></h1><br><br><br>
               

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>?music=<?=$_GET["music"]?>" method="post" class="signup-form" enctype="multipart/form-data">
                <label>Upload Your MP3 File</label><br>
               <input type="file" name="Filename" value='<?=($_GET["music"])?$_GET["music"]:"" ?>'><br><br><br>

               <p>Details</p>
    <textarea rows="10" cols="35" name="Description" value='<?=($_GET["music"])?$_GET["music"]:"" ?>'></textarea>
    <br/>
    <input type="hidden" name="ID" value='<?=($_GET["music"])?$_GET["music"]:"" ?>'>

               <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3" name="update">update</button>

                </div>
                
	            </div><br><br><br>



               	          </form>
	          
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
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <b>Ahtisham Hanif</b>
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

<?php 
//  }else{
// 	//echo "Please Login TO view Page...";
// 	header("Location: admin.php");
// } 
?>