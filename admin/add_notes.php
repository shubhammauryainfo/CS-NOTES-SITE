<?php 
  session_start();
     
 
  $admin=$_SESSION['admin'];
  $super=$_SESSION['super'];
  if ($admin||$super==true ) {
  
  }
  else{
    header("location:index.html");
  }
include("connect.php");


$topic = $_POST["topic"];
$sub=$_POST["sub"];
$date = $_POST["date"];
$name = $_POST["name"];
$pdf = $_FILES['pdf']['name'];

$target_dir = "pdf/";
$target_file = $target_dir.$pdf;
move_uploaded_file($_FILES['pdf']['tmp_name'],"$target_file");


$sql = "INSERT INTO `notes`(`topic`, `subject`, `date`, `person`, `pdf`) VALUES ('$topic','$sub','$date','$name','$pdf')";

    if (mysqli_query($conn, $sql)) {
        header("location:dashboard.php");

        } 
        else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);


?>