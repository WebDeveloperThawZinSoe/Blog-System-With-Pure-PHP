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

    /* Create Category */
    if(isset($_POST["create-category"])){
       $name = htmlspecialchars($_POST["name"]);
       $image = $_FILES["image"];
       image_filter($image,"category.php");
       $sql = "INSERT INTO category(name,image) VALUES ('$name','$unique_file_name')";
       $result = mysqli_query($connect,$sql);
       if($result){
            $_SESSION["success"] = "Category Create Success";
            header("location:category.php");
       }else{
            $_SESSION["error"] = "Category Create Fail";
            header("location:category.php");
       }
    }

    /* Delete Category */
    if(isset($_POST["delete_category"])){
        $id = $_POST["id"];
        delete_data("category",$connect,$id,"category.php");
    }



    /* Functional */

    /* Image Filter */
     function image_filter($image,$location){
        $name = $image["name"];
        $size = $image["size"];
        $error = $image["error"];
        $tmp_name = $image["tmp_name"];
        $type = $image["type"];
        $image_upload_location = "../uploads/";
        global $unique_file_name ;
        $unique_file_name = rand(0,100) . "_" . $name;
 
        if($error == 0){
             if($size < 2000000){
                 if($type == "image/png" || $type=="image/jpg" || $type =="image/jpeg" || $type == "image/gif"){
                    move_uploaded_file($tmp_name , $image_upload_location . $unique_file_name);
                    return $unique_file_name;
                 }else{
                     error_message("We only accept jpg png and gif",$location);
                 }
             }else{
                 error_message("File is too big",$location);
             }
        }else{
             error_message("File has error" , $location);
        }
 
     }


    /* Success message */
    function success_message($data,$location){
        $_SESSION["success"] = $data;
        header("location:$location");
    }

    /* Error message */
    function error_message($data,$location){
        $_SESSION["error"] = $data;
        header("location:$location");
        
    }

    /* Delete Data */
    function delete_data($tabale_name,$connection_line,$column_data,$location){
        //delete from tablename where column=columndata
        $sql = "DELETE FROM $tabale_name WHERE id=$column_data";
        $result = mysqli_query($connection_line,$sql);
        if($result){
            success_message("Delete Scccess",$location);
            
        }else{
            success_message("Delete Fail",$location);
        }
    }
?>