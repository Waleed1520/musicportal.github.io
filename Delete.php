<?php

require 'Database.php';
if(isset($_GET['filename'])){



$id = $_GET['ID'] ;
$delete = mysqli_query($con, "DELETE FROM datadetails WHERE 'ID' = '$id'");

}

$sql = "select *from datadetails";

$query = mysqli_query($con,$sql);


if (mysqli_query($con , $sql )) {
   

    header("location: Display.php");                    
 } 
 
  ?>