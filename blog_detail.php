<?php
    if(!isset($_GET["id"])){
        header("Location:index.php");
    }
  

?>

<?php
    include_once "components/header.php";
    include_once "components/nav.php";
   
?>

<br>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <ul class="list-group" style="margin-bottom: 40px;">
                <li class="list-group-item active">Categrory</li>
                <?php
                    include "components/left_category.php";
                ?>
            </ul>
        </div>
        <?php
           $id = $_GET["id"];
                    $sql = "SELECT * FROM post WHERE id='$id'  ";
                    $result = mysqli_query($connect,$sql);
                    if($result){
                        foreach ($result as $key => $value) {
                            $id = htmlspecialchars($value['id']);
                            $name = $value["title"];
                            $description = $value["description"];
                            $cat = $value["category"];
                            $author = $value["author"];
                            $image = "uploads/" . $value['featured_image'];
                            $date = $value["create_date"];
                           ?>
        <div class="col-lg-9 col-md-12">
         <div class="row">
         
             <br>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Post</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $name ?></li>
        </ol>
    </nav>
                    <div class="col-md-12">
                    
                        <h1><?php echo $name; ?></h1>
                        <strong><?php echo $date ?></strong> 
                        <br>
                        <img src="<?php echo $image; ?>" class="img-reponsive " style="width: 500px; height:" alt=""> 
                        <p>
                            <?php echo $description ?>
                        </p>
                   
                    </div>

            <?php
                        }
                    }
                ?>
        </div>
       
         <div class="row">

              


         </div>
        </div>
    </div>
</div>

<?php
    include_once "components/footer.php";
?>