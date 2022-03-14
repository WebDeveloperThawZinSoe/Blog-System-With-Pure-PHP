<?php
    include_once "components/header.php";
    include_once "components/nav.php";

?>


<div class="container">
    <div class="row">
        
        <div class="col-lg-3 col-md-12">
        <br> <br>
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

        
        <br>
         <div class="row">
         
    

        </div>
        <?php
            if(isset($_POST['search_btn'])){
                $search = htmlspecialchars($_POST['search']);
                ?>
   <hr><h2 style="text-decoration: underline;margin-bottom:30px"><?php echo $search; ?> 's Posts</h2>
         <div class="row">
                <?php
            }
        ?>
      

                <br>
                <?php
                //If database have the words from search input.
                    $sql = "SELECT * FROM post  WHERE description LIKE '%$search%'";
                    $result = mysqli_query($connect,$sql);
                    
                    if(mysqli_num_rows($result)>0){
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
                                //if string length greater than 100
                                if(strlen($description) > 100){
                                    $data = mb_substr($description,0,100);
                                    echo $data . "......";
                                }else{

                                    echo $description;
                                }
                                ?>
                            </p>
                            <br>
                            <!--link to blog detail of id-->
                            <a href="blog_detail.php?id=<?php echo $id; ?>" class="btn btn-primary btn-block">Read More</a>
                            <br>
                        </div>
                        </div>
                    </div>

            <?php
                        }
                    }else{
                        ?>
    <h1 style="text-align:center;color:red"> Search Result Not Found </h1>
<?php
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