<?php
// Connect to the database
$conn = mysqli_connect("sql107.infinityfree.com", "if0_36960003","poorpeople1" , "if0_36960003_notes");
// Check connection
if (!$conn) {
 echo"failed ".mysqli_connect_error($conn);
}

?>