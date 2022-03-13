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

    /* Update Category */
    if(isset($_POST["upgrade_user"])){
        $id = $_POST["id"];
        $name = htmlspecialchars($_POST["name"]);
        $image = $_FILES["image"];
        image_filter($image,"category.php");
        $sql = "UPDATE category SET name='$name',image='$unique_file_name' WHERE id=$id";
        $result = mysqli_query($connect,$sql);
        if($result){
             $_SESSION["success"] = "Category Update Success";
             header("location:category.php");
        }else{
             $_SESSION["error"] = "Category Update Fail";
             header("location:category.php");
        }
     }

     /* Create Post */
     if(isset($_POST["create_post"])){
        $title = htmlspecialchars($_POST["title"]);
        $category = htmlspecialchars($_POST["category"]);
        $description = $_POST["description"];
        $author = $_SESSION["username"];
        $image = $_FILES["image"];
        image_filter($image,"post.php");
        $sql = "INSERT INTO post(title,category,author,featured_image, description) VALUES ('$title','$category','$author','$unique_file_name','$description')";
        $result = mysqli_query($connect,$sql);
        if($result){
            $_SESSION["success"] = "Post Create Success";
            header("location:post.php");
        }else{
            $_SESSION["error"] = "Post Update Fail";
            header("location:post.php");
        }
     }

     /* Configure */
     /* Pagination  */
     if(isset($_POST["config_pagination"])){
        $data = htmlspecialchars($_POST["data"]);
        $sql = "UPDATE post_pagination SET count='$data'";
        $result = mysqli_query($connect,$sql);
        if($result){
            $_SESSION["success"] = "Pagination Configure Success";
            header("location:config.php");
        }else{
            $_SESSION["error"] = "Pagination Configure Fail";
            header("location:config.php");
        }
     }

     /* Socail Media Link */
     if(isset($_POST["create_soical_link"])){
         $title = htmlspecialchars($_POST["title"]);
         $image = $_FILES["image"];
         image_filter($image,"cofig.php");
         $link = htmlspecialchars($_POST["link"]);
        $sql = "INSERT INTO socail_media(title,icon,link) VALUES ('$title','$unique_file_name','$link')";
        $result = mysqli_query($connect,$sql);
        if($result){
            $_SESSION["success"] = "Socail Media  Configure Success";
            header("location:config.php");
        }else{
            $_SESSION["error"] = "Socail Media  Configure Fail";
            header("location:config.php");
        }
     }

     /* Delete Social Media Link*/
     if(isset($_POST["social_media_link_delete"])){
         $id = $_POST["id"];
         $sql = "DELETE FROM socail_media WHERE id=$id";
         $result = mysqli_query($connect, $sql);
         if($result){
            $_SESSION["success"] = "Socail Media  Delete Success";
            header("location:config.php");
         }else{
            $_SESSION["error"] = "Socail Media  Delete Fail";
            header("location:config.php");
         }
     }

     /* update_contact_address */
     if(isset($_POST["update_contact_address"])){
         $phone = htmlspecialchars($_POST["phone"]);
         $email = htmlspecialchars($_POST["email"]);
         $address = htmlspecialchars($_POST["address"]);
         $map = $_POST["map"];
         $sql = "UPDATE contact_address SET phone='$phone',email='$email',address='$address',map='$map' ";
        $result = mysqli_query($connect, $sql);
        if($result){
            $_SESSION["success"] = "Contact Address Update Success";
            header("location:config.php");
         }else{
            $_SESSION["error"] = "Contact Address Update Fail";
            header("location:config.php");
         }
     }

     /* developer_mode */
     if(isset($_POST["developer_mode"])){
        $client = isset($_POST["client"]);
        $developer = isset($_POST["developer"]) ;
        $sql = "UPDATE developer_mode SET client_mode='$client',admin_mode='$developer' ";
        $result = mysqli_query($connect,$sql);
        if($result){
            $_SESSION["success"] = "Developer Update Success";
            header("location:config.php");
         }else{
            $_SESSION["error"] = "Developer  Update Fail";
            header("location:config.php");
         }
     }

     /* footer_crd */
     if(isset($_POST["footer_crd"])){
         $name = htmlspecialchars($_POST["name"]);
         $sql = "UPDATE footer_credit SET name='$name' ";
         $result = mysqli_query($connect, $sql);
         if($result){
            $_SESSION["success"] = "Footer Credit Update Success";
            header("location:config.php");
         }else{
            $_SESSION["error"] = "Footer Credit  Update Fail";
            header("location:config.php");
         }
     }

     /* font_update */
     if(isset($_POST["font_update"])){
         $h1 = htmlspecialchars($_POST["h1"]);
         $h2 = htmlspecialchars($_POST["h2"]);
         $h3 = htmlspecialchars($_POST["h3"]);
         $h4 = htmlspecialchars($_POST["h4"]);
         $h5 = htmlspecialchars($_POST["h5"]);
         $h6 = htmlspecialchars($_POST["h6"]);
         $p = htmlspecialchars($_POST["p"]);
         $a = htmlspecialchars($_POST["a"]);
         $body = htmlspecialchars($_POST["body"]);
         $footer = htmlspecialchars($_POST["footer"]);
         $sql = "UPDATE text_style SET h1_style_color='$h1',h2_style_color='$h2',h3_style_color='$h3',h4_style_color='$h4',h5_style_color='$h5',h6_style_color='$h6',p_style_color='$p',a_style_color='$a',p_style='$p',body_style='$body',footer_style='$footer' ";
        $result = mysqli_query($connect,$sql);
        if($result){
            $_SESSION["success"] = "Style Update Success";
            header("location:config.php");
         }else{
            $_SESSION["error"] = "Style  Update Fail";
            header("location:config.php");
         }
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