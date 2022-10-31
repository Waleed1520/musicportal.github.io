<?php


  $con = mysqli_connect("localhost","root","","music_portal");


// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
//echo "<pre>";
//print_r($_POST);

$Username = $_POST['Name'];
$password = $_POST['Password'];
$Email = $_POST['email'];
$Dob = $_POST['dob'];

$sql = "INSERT INTO users ('userid','Name','Password','email','dob') VALUES (NULL,'{$Username}','{$password}','{$Email}','{$Dob}')"; 

if (mysqli_query($con,$sql)) {

  echo "data added successfully";
  // code...
}
else{
echo "data not  added successfully";



}

?>