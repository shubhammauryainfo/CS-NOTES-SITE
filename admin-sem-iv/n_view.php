<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYCS | PDF Viewer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
      <link rel="shortcut icon" href="./img/favicon.webp" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .pdf-container {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
      
        
        /* .nav-buttons {
            margin-top: 20px;
            text-align: center;
        }
        .nav-buttons button {
            margin: 0 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            background-color: #337ab7;
            color: #fff;
            cursor: pointer;
        }
        .nav-buttons button:hover {
            background-color: #23527c;
        } */
    </style>
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
    <div class="container-fluid">
        <div class="row">
            
            <?php
            include "connect.php";
            $id = $_GET["id"];
            $query = "SELECT * FROM `notes` where `id` = '$id'" ;

            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_array($result);
          
            ?>
                <div class="container mt-2">
                   
        <div id="adobe-dc-view" style="height: 640px; width: 100%;"></div>
<script src="https://acrobatservices.adobe.com/view-sdk/viewer.js"></script>
<script type="text/javascript">
  document.addEventListener("adobe_dc_view_sdk.ready", function(){
    var adobeDCView = new AdobeDC.View({clientId: "b56da273a82e4f1e814ebb3376691690", divId: "adobe-dc-view"});
    adobeDCView.previewFile({
      content:{ location:
        { url: "./pdf/<?php echo "{$rows['pdf']}" ?>"}},
      metaData:{fileName: "<?php echo "{$rows['topic']}" ?>"}
    },
    {
      embedMode: "SIZED_CONTAINER"
    });
  });
</script>
                      
                  
                  
                </div>
           
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>