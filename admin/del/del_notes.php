<?php 
include "connect.php";
session_start();
     
$super=$_SESSION['super'];
 if($super==true) {
  $id = $_GET["id"];
  $query = "SELECT * FROM `notes` WHERE`id` = $id";
  $result = mysqli_query($conn,$query);
  $rows = mysqli_fetch_array($result);
  unlink("../pdf/{$rows['pdf']}");
  $sql = "DELETE FROM  `notes` WHERE`id` = $id";
  mysqli_query($conn, $sql);

  if($conn){
      header("location:../dashboard.php");
  }
  mysqli_close($conn);


 }
 else{
   header("location:../index.html");
 }


?>