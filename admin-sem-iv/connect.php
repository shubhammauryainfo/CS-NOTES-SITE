<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root","" , "notes");

// Check connection
if (!$conn) {
 echo"failed ".mysqli_connect_error($conn);
}

?>