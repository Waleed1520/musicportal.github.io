<?php
require "Database.php";
 session_start(); 
//print_r($_SESSION);exit();
if(isset($_SESSION['is_logged_in']) &&  $_SESSION['is_logged_in'] == true){
    header("Location: admin.php");
}
?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Upload</title>
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
          <?php
          if(isset($_POST['upload'])){
         
    $fileExistsFlag = 0; 
    $fileName = $_FILES['Filename']['name'];
    $connection = mysqli_connect("localhost","root","","music_portal") or die("Error ".mysqli_error($connection));
    /* 
    *   Checking whether the file already exists in the destination folder 
    */
    $query = "SELECT filename FROM datadetails WHERE filename='$fileName'"; 
    $result = $connection->query($query) or die("Error : ".mysqli_error($connection));
    while($row = mysqli_fetch_array($result)) {
        if($row['filename'] == $fileName) {
            $fileExistsFlag = 1;
        }       
    }
    /*
    *   If file is not present in the destination folder
    */
    
    if($fileExistsFlag == 0) { 
        $target = "Upload_Album/";     
        $fileTarget = $target.$fileName;    
        $tempFileName = $_FILES["Filename"]["tmp_name"];
        $fileDescription = $_POST['Description'];   
        $result = move_uploaded_file($tempFileName,$fileTarget);
        /*
        *   If file was successfully uploaded in the destination folder
        */
        if($result) { 
            echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";       
            $query = "INSERT INTO datadetails(filepath,filename,details) VALUES ('$fileTarget','$fileName','$fileDescription')";
            $connection->query($query) or die("Error : ".mysqli_error($connection));            
        }
        else {          
            echo "Sorry !!! There was an error in uploading your file";         
        }
        mysqli_close($connection);
    }
    /*
    *   If file is already present in the destination folder
    */
    else {
        
        mysqli_close($connection);
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
                        <a href="Home.php" class="nav-brand"><h1 style="color: white;">Music_Portal</h1></a>

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
                                    <?php 
                                    if(isset($_SESSION['is_logged_in']) &&  $_SESSION['is_logged_in'] ==true){
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
	<body class="img" style="background-image: url(images/back4.jpg);">

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
					<div class="login-wrap" style="border-radius: 30px;">
		      	<h1 class="text-center mb-4" style="color: white;">Welcome to Music Portal<br></h1><br><br><br>
               

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="signup-form" enctype="multipart/form-data">
                <label>Upload Your audio File</label><br>
               <input type="file" name="Filename"><br>

               <p style="color:black; font-size:35px;">set name</p>
    <textarea rows="2" cols="60" name="Details" style="background-color: black; color: white;"></textarea>
    <br/>

               <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3" name="upload">Upload</button>

                </div>
                <a style="color: white;" href="display.php"> Delete File</a>
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
                    <a href="Home.php" class="nav-brand"><h1 style="color: white;">Music_Portal</h1></a>
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