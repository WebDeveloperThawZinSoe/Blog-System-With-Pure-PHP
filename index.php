<?php
    include_once "components/header.php";
    include_once "components/nav.php";
    include_once "components/hero-section.php";
?>


<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <ul class="list-group" style="margin-bottom: 40px;">
                <li class="list-group-item active">Categrory</li>
               <?php
                    include "components/left_category.php";
                ?>
            </ul>
            <br>
            <br>
           
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="col-lg-12 col-md-12">
            <img src="img/leaderboard-1.png" style="margin-bottom:30px;" class="img-responisve" alt="">
            </div>
        
        <br>
         <div class="row">
         
    
        <?php
                    $sql = "SELECT * FROM category ORDER BY id DESC";
                    $result = mysqli_query($connect,$sql);
                    if($result){
                        foreach ($result as $key => $value) {
                            $id = htmlspecialchars($value['id']);
                            $image = "uploads/" . $value['image'];
                           ?>
            <div  class=" col-lg-5 col-md-12" style="height:200px;border-radius:0px;background-image:url('<?php echo $image ?>');margin-left:25px;margin-right:25px;margin-bottom:40px;background-size: cover; background-repeat: no-repeat; " >
                <div >
                   <p class="text-center " style="padding-top:20%; font-size:30px;font-weight:bold;color:black">  <?php echo $value['name'] ?> </p>
                </div>
            </div>

            <?php
                        }
                    }
                ?>
        </div>
         <hr><h2 style="text-decoration: underline;margin-bottom:30px">Latest Posts</h2>
         <div class="row">

                <br>
                <?php
                    $sql = "SELECT * FROM post  ORDER BY id DESC LIMIT 6";
                    $result = mysqli_query($connect,$sql);
                    if($result){
                        foreach ($result as $key => $value) {
                            $id = htmlspecialchars($value['id']);
                            $name = $value["title"];
                            $description = $value["description"];
                            $cat = $value["category"];
                            $author = $value["author"];
                            $image = "uploads/" . $value['featured_image'];
                           ?>
                    <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $image; ?>" alt="Avatar" style="width:100%;height:180px">
                        <div class="container">
                            <h4><b> <?php echo $name ?> </b></h4>
                            <p>
                                <?php
                                if(strlen($description) > 100){
                                    $data = mb_substr($description,0,100);
                                    echo $data . "......";
                                }else{
                                    echo $description;
                                }
                                ?>
                            </p>
                            <br>
                            <a href="blog_detail.php?id=<?php echo $id; ?>" class="btn btn-primary btn-block">Read More</a>
                            <br>
                        </div>
                        </div>
                    </div>

            <?php
                        }
                    }
                ?>

         </div>

         <a href="posts.php" class="btn btn-primary btn-block ">View ALl Posts</a>
         <br> <br>
        </div>
    </div>
</div>

<?php

    include_once "components/footer.php";
?>