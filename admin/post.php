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
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter Title">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Category</label>
    <select name="category" class="form-control" id="">
        <option selected disabled> --  Select Category -- </option>
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
    <input type="file" name="image" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" >
  
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Description </label>
    <textarea  id="editor" type="text" name="description" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter Title"> </textarea>
   
  </div>

  <button type="submit" name="create_post" class="btn btn-primary">Create</button>
</form>
    </div>

    <table style="margin-top:30px" class="table table-hover">
    <thead style="background-color:gray">
      <tr>
        <th style="color:white">No</th>
        <th style="color:white">Title</th>
        <th style="color:white">Cat</th>
        <th style="color:white">Action</th>
      </tr>
    </thead>
    <tbody>
  
     

    </tbody>
  </table>
  
</div>


                <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

<?php
    include_once "footer.php";
?>
