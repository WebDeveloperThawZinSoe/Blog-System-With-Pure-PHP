<?php
    include_once "components/header.php";
    include_once "components/nav.php";
    
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
            <h2 style="text-decoration: underline;margin-bottom:30px">All Posts</h2>
            <div class="row">

                <br>
                <?php

$sql_paginate = "SELECT * FROM post_pagination";
$result = mysqli_query($connect,$sql_paginate);
$data ;
foreach($result as $a){
    $data = $a['count'];
}

$per_page = $data;


##echo $number_of_page;

if(!isset($_GET["page"])){
    $page = 1;
}else{
    $page = $_GET["page"];
}
$sql1 = "SELECT * FROM post";
$result = mysqli_query($connect,$sql1);
$all_data = mysqli_num_rows($result);   
                    
$number_of_page =  ceil($all_data / $per_page);               
$first_page_result = ($page - 1) * $per_page; //0 , 10  ,20
$sql = "SELECT * FROM post LIMIT $first_page_result , $per_page ";
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
                            <a href="blog_detail.php?id=<?php echo $id; ?>" class="btn btn-primary btn-block">Read
                                More</a>
                            <br>
                        </div>
                    </div>
                </div>

                <?php
                        }
                    }
                ?>

            </div>
            <?php


for($page = 1; $page <= $number_of_page;$page++){
   
    ?>
            <a href='posts.php?page=<?php echo $page; ?>'> <?php echo $page; ?> | </a>
            <?php
}

        ?>
          


            <br> <br>
        </div>
    </div>
</div>

<?php
    include_once "components/footer.php";
?>