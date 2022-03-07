<?php
    if(isset($_POST["update_user"])){
       $id = $_POST["id"];
     
        ?>
<?php
    include_once "header.php";
    include_once "navbar.php";
    include_once "alert.php";

    $sql =  "SELECT id,name,phone FROM user WHERE id =$id";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result)>0){
        foreach($result as $r){
            ?>
<div class="container" style="margin-top:30px;margin-bottom: 30px;">

<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="member.php">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Member</li>
</ol>
</nav>

<div class="alert alert-secondary ">
<form action="backend.php" method="post">
    <input type="hidden" name="id" value="<?php echo $r['id']?>">
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" value="<?php echo $r["name"] ?>" required name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

</div>
<div class="form-group">
<label for="exampleInputEmail1">Phone</label>
<input type="number"  value="<?php echo $r["phone"] ?>"  required name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone">

</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>

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
    include_once "../components/footer.php";
?>

<?php
    }else{
        header("Location:member.php");
    }
?>