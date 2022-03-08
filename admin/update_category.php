<?php
    if(isset($_POST["update_category"])){
       $id = $_POST["id"];
     
        ?>
<?php
    include_once "header.php";
    include_once "navbar.php";
    include_once "alert.php";

    $sql =  "SELECT id,name,image FROM category WHERE id =$id";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result)>0){
        foreach($result as $r){
            ?>
<div class="container" style="margin-top:30px;margin-bottom: 30px;">

<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
</ol>
</nav>

<div class="alert alert-secondary ">
<form action="backend.php" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="<?php echo $r['id']?>">
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" value="<?php echo $r["name"] ?>" required name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

</div>
<input type="hidden" name="id" value="<?php echo $r["id"] ?>" > 
<div class="form-group">   
    <label for="exampleInputEmail1">Image</label>
    <input type="file" name="image" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" >
  
  </div>
<br> <br>
Current Image :
<img src="../uploads/<?php echo $r['image'] ?>" style="width:300px;height150px" alt="">
<br> <br>
<button type="submit" name="upgrade_user"  class="btn btn-warning">Update</button>
</form>
</div>



</div>
            <?php
        }
    }
?>


<script>

</script>

<?php
    include_once "footer.php";
?>

<?php
    }else{
        header("Location:member.php");
    }
?>