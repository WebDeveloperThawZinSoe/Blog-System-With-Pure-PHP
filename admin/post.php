<?php
    include_once "header.php";
    include_once "navbar.php";
    include_once "alert.php";
?>
<div class="container" style="margin-top:30px;margin-bottom: 30px;">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Post</li>
        </ol>
    </nav>

    <div class="alert alert-secondary ">
        <form action="backend.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" required
                    aria-describedby="emailHelp" placeholder="Enter Title">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <select name="category" class="form-control" id="">
                    <option selected disabled> -- Select Category -- </option>
                    <?php
            $sql = "SELECT * FROM category ORDER BY name ";
            $result = mysqli_query($connect,$sql );
            if($result){
                foreach($result as $r){
                    ?>
                    <option value="<?php echo $r['id'] ?>"> <?php echo $r['name']?></option>
                    <?php
                }
            }
        ?>
                </select>


            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" required
                    aria-describedby="emailHelp">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Description </label>
                <textarea id="editor" type="text" name="description" class="form-control" id="exampleInputEmail1"
                    required aria-describedby="emailHelp" placeholder="Enter Title"> </textarea>

            </div>

            <button type="submit" name="create_post" class="btn btn-primary">Create</button>
        </form>
    </div>

    <br>
    <div>
        <table id="example" class="display" style="width:100%;padding:10px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $sql = "SELECT * FROM post ORDER BY id DESC";
            $result = mysqli_query($connect,$sql);
            if(mysqli_num_rows($result)>0){
              foreach($result as $key=> $value){
                ?>
                <tr>
                    <td><?php echo ++$key; ?></td>
                    <td><?php echo $value['title']; ?></td>
                    <td>
                      <?php 
                      $category = $value['category'];
                      //calling category names
                      $sql = "SELECT * FROM category WHERE id='$category'";
                      $result = mysqli_query($connect,$sql);
                      if(mysqli_num_rows($result)>0){
                        foreach($result as $as){
                          echo $as['name'];
                        }
                      }
                       ?>
                    </td>
                    <td>
                      <img src="../uploads/<?php echo $value['featured_image']; ?>" style="width:200px;height:80px" alt="" srcset="">
                    </td>
                    <td>
                    <form action="backend.php" method="post" style="display:inline-block;margin-right:20px">
                      <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                       <input onclick="return confirm('Are you sure to delete ?')" type="submit" class="btn btn-danger" name="delete_post" value="Delete">
                      </form> 
                    </td>
                    <td>
                    <form action="update_category.php" method="POST" style="display:inline-block;margin-right:20px">
                         <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                         <input type="submit" class="btn btn-warning" name="update_post" value="Update">
                        </form>  
                    </td>
                </tr>
                <?php
              }
            }
          ?>

            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>


<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });
</script>

<?php
    include_once "footer.php";
?>