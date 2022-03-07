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
                    $sql = "SELECT * FROM category ORDER BY id DESC";
                    $result = mysqli_query($connect,$sql);
                    if($result){
                        foreach ($result as $key => $value) {
                            $id = htmlspecialchars($value['id']);
                           ?>
                                <li class="list-group-item">
                                    <a href="category_detail.php?id=<?php echo $value['id'] ?>"> <?php echo $value['name'] ?> </a>
                                </li>
              
                           <?php
                        }
                    }
                ?>
               
            </ul>
        </div>
        <div class="col-lg-9 col-md-12">
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
         <hr>
        </div>
    </div>
</div>

<?php
    include_once "components/footer.php";
?>