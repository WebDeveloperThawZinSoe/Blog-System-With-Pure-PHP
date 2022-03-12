<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- google icon -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- Bootstrap CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Sweet alert 2 -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
<body>

<?php
include "backend/database.php";

$sql = "SELECT * FROM developer_mode";
$result =  mysqli_query($connect,$sql);
if($result){
  foreach($result as $as){
    $cleint = $as['client_mode'];
    if($cleint == 1){ 
      error_reporting(1);
      ?>
        <p class="alert alert-danger"> Developer Mode is On  </p>
        <script>
          alert("Developer Mode is On");
        </script>
      <?php
    }else{
      error_reporting(0);
    }
    
  }
}

?>
    