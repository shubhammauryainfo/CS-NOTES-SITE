<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>M&E-Practical</title>
  <!-- Favicon -->
  <link rel="icon" href="./img/favicon.webp" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
<?php
error_reporting(0); 
 session_start();
     
 
 $admin=$_SESSION['admin'];
 $super=$_SESSION['super'];
 if ($admin||$super==true ) {
 
 }
 else{
   header("location:index.html");
 }

?>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
               
                <div class="logo-text">
                <span class="logo-title">ABHINAV </span>
                    <span class="logo-title">CS-NOTES</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="dashboard.php"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
              
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>View Notes
                       
                    </a>
                    <ul class="cat-sub-menu">
                    <li>
                            <a href="iot.php">I.O.T</a>
                        </li>
                        <li>
                          <a href="aad.php">AAD</a>
                      </li>
                      <li>
                          <a href="and.php">Android</a>
                      </li>
                      <li>
                          <a href="cn.php">Computer Network</a>
                      </li>
                      <li>
                          <a href="se.php">Software Engineering</a>
                      </li>
                      <li>
                          <a href="me.php">M & E</a>
                      </li>
                      <li>
                          <a href="toc.php">T.O.C</a>
                      </li>
                    </ul>
                </li>
                <li>
                   <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>View Practical
                       
                    </a>
                    <ul class="cat-sub-menu">
                    <li>
                            <a href="piot.php">I.O.T</a>
                        </li>
                        <li>
                          <a href="paad.php">AAD</a>
                      </li>
                      <li>
                          <a href="pand.php">Android</a>
                      </li>
                      <li>
                          <a href="pcn.php">Computer Network</a>
                      </li>
                      <li>
                          <a href="pse.php">Software Engineering</a>
                      </li>
                      <li>
                          <a href="pme.php">M & E</a>
                      </li>
                      <li>
                          <a href="ptoc.php">T.O.C</a>
                      </li>
                    </ul>
                </li>
                    </ul>
                  
          
        </div>
    </div>
  
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
     
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
     
     <!-- <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button> -->
      <!-- <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div> -->
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
          <picture><source srcset="./img/favicon.webp" type="image/webp"><img src="./img/favicon.webp" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
        
          <li><a class="danger" href="logout.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Management & Entrepreneurship</h2>
   <?php
  include "connect.php";


$query = "SELECT * FROM `prac`WHERE `subject`='M&E' ORDER BY `id` DESC; " ;

$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0) {
 echo "
 <table class='styled-table'>
<thead>
<tr>
<th>Title</th>

<th>Date</th>
<th>uploaded By</th>
<th>Download</th>
<th>Delete</th>
</tr>
</thead>
<tbody>";
while ($rows = mysqli_fetch_array($result)) {
echo "
<tr>
<td>{$rows['topic']}</td>

<td>{$rows['date']}</td>
<td>{$rows['person']}</td>
<td class='pt-3'> <a href='./p_view.php?id={$rows['id']}'><button type='button' class='btn btn-primary'>View</button></a></td>
<td class='pt-3'> <a href='./del/del_prac.php?id={$rows['id']}'><button type='button' class='btn btn-primary'>Delete</button></a></td>
</tr>

</tbody> ";
}
echo"
</table>";}
else{
echo "no records found......"; 
}
?>

<style>

.styled-table {
border-collapse: collapse;
margin: 25px 0;
font-size: 0.9em;
font-family: sans-serif;
min-width: 400px;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
background-color: blue;
color: #ffffff;
text-align: left;
}

.styled-table th,
.styled-table td {
padding: 12px 15px;
}

.styled-table tbody tr {
border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
font-weight: bold;
color: #009879;
}
</style>
      </div>
      </main>
    <!-- ! Footer -->
  
  </div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>