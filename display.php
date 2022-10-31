<?php 
session_start();
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
                                    <li><a href="admin.php"><b style="font-size: 20px; color: black; font-family: verdana;">Admin Panel</b> </a>
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <?php 
                                    if(isset($_SESSION['is_logged_in']) &&  $_SESSION['is_logged_in'] == true){
                                    
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
            
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            
            
                <h1 class="text-center mb-4" style="color: white; font-family: verdana;">Welcome to Music Portal</h1>
                            <?php
    require 'Database.php';

    $sql =  "SELECT * FROM datadetails ";
   

$record = mysqli_query($con , $sql ) ;


 while ($result = mysqli_fetch_array($record)) {
echo "<br>";




echo "<br><br>";
echo "<div class='col-12'> 
            <div class='single-song-area mb-30 d-flex flex-wrap align-items-end'>
                 <div class='song-thumbnail'>
                    <img src='img/bg-img/a4.jpg'>
                </div> <div class='song-play-area'>
                <div class='song-name'>
                    <p>".$result['filename']."</p>
                </div>
                <audio preload='auto' controls type='audio/mpeg'>
                    <source src='http://localhost/music_portal/".$result['filepath']."'>
                    </audio>

                </div>
            </div>
        </div>


        "; 
?>

  


<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
<a href='Delete.php?ID=".$result['ID']."'>Delete </a>
</button>

<!-- Modal Delete -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do You Want to Delete??
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><a href='Delete.php?ID=".$result['ID']."'>Delete </a></button>
      </div>
    </div>
  </div>
</div>



<?php

}


?>
              
           
        </div>
    </section>


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="Home.php"><h1 style="color: white;">Music_Portal</h1></a>
</a>
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

