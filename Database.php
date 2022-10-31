<?php
$con = mysqli_connect("localhost","root","","music_portal");


// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
  //echo "connected";
}

$sql = "SELECT * FROM admin WHERE Name ='admin' AND Password='1122' ";

//echo $sql ;


$record = mysqli_query($con,$sql );


$result = mysqli_fetch_array($record);



?>