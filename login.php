
<?php
  include "backend/database.php";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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

    <style>
        .btn-color{
          background-color: #0e1c36;
          color: #fff;
          
        }

        .profile-image-pic{
          height: 200px;
          width: 200px;
          object-fit: cover;
        }



        .cardbody-color{
          background-color: #ebf2fa;
        }

        a{
          text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
       
        <div class="card my-5">

          <form action="" method="post" class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
            <input type="number" name="phone" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Phone">
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" name="login" class="btn btn-color px-5 mb-5 w-100">Login</button></div>

          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>

<?php
  if(isset($_POST['login'])){
    $phone = htmlspecialchars($_POST["phone"]);
    $password = htmlspecialchars($_POST["password"]);
    $secure_password = crypt($password,"We are one");
    $sql = "SELECT * FROM user WHERE phone='$phone' && password='$secure_password'  ";
    $result =  mysqli_query($connect,$sql);
    if(mysqli_num_rows($result) == 1){
      $_SESSION["username"] = $phone;
      $_SESSION["password"] = $secure_password;
      $_SESSION["success"] = "Login Success";
      header("location:admin/index.php");
    }
  }
?>