<?php

    session_start();

    $connect = mysqli_connect("localhost","root","","blogSystem1");
    if(!$connect){
        ?>
        <h1 class="alert alert-danger">Connection Error</h1>
        <?php
    }
?>

<?php

    /* Insert User */

    if(isset($_POST["create"])){
       $name = htmlspecialchars($_POST["name"]);
       $phone = htmlspecialchars($_POST["phone"]);
       $password = htmlspecialchars($_POST["password"]);
       $secure_password = crypt($password,"We are one");

       $sql = "INSERT INTO user (name,phone,password) VALUES ('$name','$phone','$secure_password')";

       $result = mysqli_query($connect,$sql);
       if($result){
           $_SESSION["success"] = "Account Create Success";
           header("location:member.php");
       }else{
           $_SESSION["error"] = "Account Create Fail";
           header("location:member.php");
       }
    }


    /* Delete User */
    if(isset($_POST["delete_user"])){
       $id = htmlspecialchars($_POST["id"]);
       $sql  = "DELETE FROM user WHERE id=$id";
       $result = mysqli_query($connect,$sql);
        if($result){
            $_SESSION["success"] = "Account Delete Success";
            header("location:member.php");
        }
    }

    /* Upgrade User */
    if(isset($_POST["upgrade_user"])){
        $id = $_POST["id"];
        $name = htmlspecialchars($_POST["name"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $password = htmlspecialchars($_POST["password"]);
        $secure_password = crypt($password,"We are one");

        $sql = "UPDATE user SET name='$name',phone='$phone',password='$secure_password' WHERE id='$id'";

        $result = mysqli_query($connect,$sql);
        if($result){
            $_SESSION["success"] = "Account Update Success";
            header("location:member.php");
        }else{
            $_SESSION["error"] = "Account Update Fail";
            header("location:member.php");
        }
    }
?>