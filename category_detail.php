<?php
    include_once "components/header.php";
    include_once "components/nav.php";

    $id = $_GET['id'];
    
?>

<br> <br>

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
        <div class="col-lg-9 col-md-12">
        
         <hr> 
         <?php
                            $id = $_GET["id"];
                            $sql = "SELECT * FROM category WHERE id='$id'";
                            $result = mysqli_query($connect,$sql);
                            foreach($result as $r){
                                ?>
                                <h2>
                                    <?php echo $r['name']?> 's Posts
                                </h2>
       <?php
                            }
         ?>
       <br>
         <div class="row">

                <br>
                <?php
                    $sql = "SELECT * FROM post WHERE category=$id  ORDER BY id DESC ";
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

       
         <br> <br>
        </div>
    </div>
</div>

<?php
    include_once "components/footer.php";
?>