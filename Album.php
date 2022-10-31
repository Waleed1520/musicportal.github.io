<?php session_start(); 
//print_r($_SESSION);exit();
if(!isset($_SESSION['is_logged_in']) &&  $_SESSION['is_logged_in'] == false){
    header("Location: user.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Album</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
           
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
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
                            <span class="navbarToggler"><span>
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
                                    if(!isset($_SESSION['is_logged_in']) &&  $_SESSION['is_logged_in'] == false){
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

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/back2.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Latest Albums</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Album Catagory Area Start ##### -->
    <section class="album-catagory section-padding-100-0">
        <div class="container">
           <div class="container" style="text-align: center;"> <label>Search Song</label><br>
                        <!DOCTYPE html>
<html>
<head>
    <title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
    
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=music_portal",'root','');

if (isset($_POST["submit"])) {
    $search = $_POST["search"];
    
    $sth = $con->prepare("SELECT * FROM datadetails  WHERE filename like '%$search%' ");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    if($row = $sth->fetch())
    {
        ?>
        <br><br><br>
       <!--  <table style="width: 80%;"  align="center" border="none" bgcolor="white" cellpadding="7px" cellspacing="0">
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><?php echo $row->filename; ?></td>
                <td><?php echo $row->details;?></td>
            </tr>

        </table> -->
<?php 
    }
        
        
        else{
            echo "Name Does not exist";
        }


}

?>

<?php
    require 'Database.php';

    $Query =  "SELECT * FROM datadetails ";
    if (isset($_POST["submit"])) {
    $search = $_POST["search"];
    $Query = "SELECT * FROM datadetails  WHERE filename like '%$search%' ";
    }
    //echo $Query;

$record = mysqli_query($con , $Query ) ;

//print_r($record) ;


//$result = mysqli_fetch_array($record);

//print_r($result) ;
 while ($result = mysqli_fetch_array($record)) {
echo "<br>";



echo "<a href='http://localhost/music_portal/".$result['filepath'] . "'> song</a>";
echo "<br><br>";
echo "<div class='col-12'> 
            <div class='single-song-area mb-30 d-flex flex-wrap align-items-end'>
                 <div class='song-thumbnail'>
                    
                </div> <div class='song-play-area'>
                <div class='song-name'>
                    <p>" . $result['filename'] . "</p>
                </div>
                <audio controls type='audio/mpeg' src='/http://localhost/music_portal/". $result['filepath']. "'>
                    
                    </audio>
                </div>
            </div>
        </div>

        <br><br>"; 
}
?>

 


                        <br><br>
                        </div>
         
                </div>
            </div>

            <div>
                

            </div>
            <div class="row oneMusic-albums">

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t c p">
                    <div class="single-album">
                        <img src="img/bg-img/a1.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Cure</h5>
                            </a>
                            <p>Second Song</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item s e q">
                    <div class="single-album">
                        <img src="img/bg-img/a2.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Sam Smith</h5>
                            </a>
                            <p>Underground</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item w f r">
                    <div class="single-album">
                        <img src="img/bg-img/a3.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Will I am</h5>
                            </a>
                            <p>First</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t g u">
                    <div class="single-album">
                        <img src="img/bg-img/a4.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Cure</h5>
                            </a>
                            <p>Second Song</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item d h v">
                    <div class="single-album">
                        <img src="img/bg-img/a5.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>DJ SMITH</h5>
                            </a>
                            <p>The Album</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t i x">
                    <div class="single-album">
                        <img src="img/bg-img/a6.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Ustopable</h5>
                            </a>
                            <p>Unplugged</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item b j y">
                    <div class="single-album">
                        <img src="img/bg-img/a7.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Beyonce</h5>
                            </a>
                            <p>Songs</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item a k z">
                    <div class="single-album">
                        <img src="img/bg-img/a8.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Aam Smith</h5>
                            </a>
                            <p>Underground</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item w l number">
                    <div class="single-album">
                        <img src="img/bg-img/a9.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Will I am</h5>
                            </a>
                            <p>First</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item d m">
                    <div class="single-album">
                        <img src="img/bg-img/a10.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>DJ SMITH</h5>
                            </a>
                            <p>The Album</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t n">
                    <div class="single-album">
                        <img src="img/bg-img/a11.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Ustopable</h5>
                            </a>
                            <p>Unplugged</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item b o">
                    <div class="single-album">
                        <img src="img/bg-img/a12.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Beyonce</h5>
                            </a>
                            <p>Songs</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Album Catagory Area End ##### -->

    <!-- ##### Buy Now Area Start ##### -->
    <div class="oneMusic-buy-now-area mb-100">
        <div class="container">
            <div class="row">

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
                            <img src="img/bg-img/b1.jpg" alt="">
                            <!-- Album Price -->
                            <div class="album-price">
                                <p>$0.90</p>
                            </div>
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Garage Band</h5>
                            </a>
                            <p>Radio Station</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
                            <img src="img/bg-img/b2.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Noises</h5>
                            </a>
                            <p>Buble Gum</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
                            <img src="img/bg-img/b3.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Jess Parker</h5>
                            </a>
                            <p>The Album</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
                            <img src="img/bg-img/b4.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Noises</h5>
                            </a>
                            <p>Buble Gum</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center">
                        <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Buy Now Area End ##### -->

    <!-- ##### Add Area Start ##### -->
    <div class="add-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="adds">
                        <a href="#"><img src="img/bg-img/back2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
    <!-- ##### Song Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/back3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="Home.php" class="nav-brand"><h1 style="color: white;">Music_Portal</h1></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">music_portal</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="Home.php">Home</a></li>
                            <li><a href="Album.php">Albums</a></li>
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

    <!-- ##### All Javascript Script ##### -->
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