<?php
include "backend/database.php";
?>
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

    <!-- Meta -->
    <?php
        $sql = "SELECT * FROM seo";
        $result = mysqli_query($connect,$sql);
        if($result){
          foreach($result as $s){
            ?>
    <meta name="keywords" content="<?php echo $s['keywords'] ?>">
    <meta name="description" content="<?php echo $s['description'] ?>">
    <meta name="author" content="<?php echo $s['author'] ?>">
    <?php
          }
        }
    ?>

    <meta http-equiv="refresh" content="">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Sweet alert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
    footer {
        color: white;
    }

    footer a {
        color: #bfffff;
    }

    footer a:hover {
        color: white;
    }

    .footer-bottom {
        background: #007bff;
        padding: 2em;
    }

    .footer-top {
        background: #007bff;
    }

    .footer-middle {
        background: #007bff;
        padding-top: 2em;
        color: white;
    }

    /**Sub Navigation**/
    .subnavigation-container {
        background: #007bff;
    }

    .subnavigation .nav-link {
        color: white;
        font-weight: bold;
    }

    .subnavigation-container {
        text-align: center;
    }

    .subnavigation-container .navbar {
        display: inline-block;
        margin-bottom: -6px;
        /* Inline-block margin offffset HACK -Gilron */
    }

    .col-subnav a {
        padding: 1rem 1rem;
        color: white;
        font-weight: bold;
    }

    .col-subnav .active {
        border-top: 5px solid orange;
        background: white;
        color: black;
    }

    <?php $sql="SELECT * FROM text_style";
    $result=mysqli_query($connect, $sql);

    if($result) {
        foreach($result as $r) {
            ?>h1 {
                color: <?php echo $r['h1_style_color'] ?>;
            }

            h2 {
                color: <?php echo $r['h2_style_color'] ?>;
            }

            h3 {
                color: <?php echo $r['h3_style_color'] ?>;
            }

            h4 {
                color: <?php echo $r['h4_style_color'] ?>;
            }

            h5 {
                color: <?php echo $r['h5_style_color'] ?>;
            }

            h6 {
                color: <?php echo $r['h6_style_color'] ?>;
            }

            p {
                color: <?php echo $r['p_style_color'] ?>;
            }

            a {
                color: <?php echo $r['a_style_color'] ?>;
            }

            body {
                background-color: <?php echo $r['body_style'] ?>;
            }

            footer {
                background-color: <?php echo $r['footer_style'] ?>;
            }

            <?php
        }
    }

    ?>
    </style>

</head>

<body>

    <?php

$sql = "SELECT * FROM developer_mode";
$result =  mysqli_query($connect,$sql);
if($result){
  foreach($result as $as){
    $cleint = $as['client_mode'];
    if($cleint == 1){ 
      error_reporting(E_ALL);
      ?>
    <p class="alert alert-danger"> Developer Mode is On </p>
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