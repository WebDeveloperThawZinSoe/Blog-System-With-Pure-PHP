<?php
    include_once "header.php";
    include_once "navbar.php";
    include_once "alert.php";
?>
<div class="container" style="margin-top:30px;margin-bottom: 30px;">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Member</li>
    </ol>
    </nav>

    <div class="alert alert-secondary ">
    <form action="backend.php" method="post">
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter phone">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required placeholder="Password">
  </div>

  <button type="submit" name="create" class="btn btn-primary">Create</button>
</form>
    </div>

    <table style="margin-top:30px" class="table table-hover">
    <thead style="background-color:gray">
      <tr>
        <th style="color:white">No</th>
        <th style="color:white">Name</th>
        <th style="color:white">Phone</th>
        <th style="color:white">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT id,name,phone FROM user ORDER BY id DESC ";
        $result = mysqli_query($connect, $sql);
        if($result){
          foreach($result as $key=>$value){
            ?>
              <tr>
                 <td><?php echo ++$key; ?></td>
                  <td> <?php echo $value['name']; ?></td> </td>
                  <td><?php echo $value['phone']; ?></td>
                  <td> 
                    <div class="row">
                    <form action="backend.php" method="post" style="display:inline-block;margin-right:20px">
                      <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                       <input onclick="return confirm('Are you sure to delete ?')" type="submit" class="btn btn-danger" name="delete_user" value="Delete">
                      </form>   
                      <form action="update_user.php" method="POST" style="display:inline-block">
                         <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                         <input type="submit" class="btn btn-warning" name="update_user" value="Update">
                        </form>   
                    </div>
                      
                 </td>
                  </tr>
            <?php
          }
        }
      ?>
     

    </tbody>
  </table>
  
</div>

<script>

</script>

<?php
    include_once "footer.php";
?>
