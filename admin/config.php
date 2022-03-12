<?php
    include_once "header.php";
    include_once "navbar.php";
    include_once "alert.php";
?>
<div class="container" style="margin-top:30px;margin-bottom: 30px;">

 
<div id="accordion">
  <div class="card">
    <div class="card-header" id="pagination">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Pagination
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="pagination" data-parent="#accordion">
      <div class="card-body">
          <?php
                $sql = "SELECT * FROM post_pagination ";
                $result = mysqli_query($connect,$sql);
                foreach($result as $as){
                    ?>
                       Current Pagination  :  <?php echo $as['count'] ?>
                    <?php
                }
          ?>
            <form action="backend.php" method="post">
                <input type="number" name="data" class="form-control" placeholder=""> 
                <br>
                <input type="submit" class="btn btn-warning"  name="config_pagination" value="Update">
            </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#info" aria-expanded="false" aria-controls="collapseTwo">
          Page Information
        </button>
      </h5>
    </div>
    <div id="info" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#style" aria-expanded="false" aria-controls="collapseThree">
         Style
        </button>
      </h5>
    </div>
    <div id="style" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
    
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#hero" aria-expanded="false" aria-controls="collapseThree">
         Hero Section
        </button>
      </h5>
    </div>
    <div id="hero" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
    
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#post" aria-expanded="false" aria-controls="collapseThree">
         Post Configure
        </button>
      </h5>
    </div>
    <div id="post" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
    
  </div>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#alert" aria-expanded="false" aria-controls="collapseThree">
         Alert Box
        </button>
      </h5>
    </div>
    <div id="alert" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
    
  </div>
  
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#developer" aria-expanded="false" aria-controls="collapseThree">
         Developer Mode
        </button>
      </h5>
    </div>
    <div id="developer" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <?php 
          $sql = "SELECT * FROM developer_mode";
          $result =  mysqli_query($connect,$sql);
          if($result){
            foreach($result as $developer_mode){
              $client_mode = $developer_mode['client_mode'];
              $admin_mode = $developer_mode['admin_mode'];
              ?>
                <?php
                  if($client_mode == 0){
                    ?>
                       <span style="color:green"> Client   is on  Performance  Mode </span> <br>
                    <?php
                  }else if($client_mode == 1){
                    ?>
                    <span style="color:red"> Client   is on Developer Performance  </span>  <br>
                  <?php
                  }
                ?>
                 <?php
                  if($admin_mode == 0){
                    ?>
                       <span style="color:green"> Admin   is on  Performance  Mode </span>  <br>
                    <?php
                  }else if($admin_mode == 1){
                    ?>
                    <span style="color:red"> Admin   is on Developer Performance  </span>  <br>
                  <?php
                  }
                ?>
                <form action="backend.php" method="post" >
                   Client Mode : <input type="checkbox" name="client">
                   <br>
                   Developer Mode : <input type="checkbox" name="developer">
                   <br>
                   <input type="submit" value="Update" class="btn btn-primary" name="developer_mode">
                </form>
              <?php
            }
          }
        ?>
      </div>
    </div>
    
  </div>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#contact" aria-expanded="false" aria-controls="collapseThree">
         Contact Address
        </button>
      </h5>
    </div>
    <div id="contact" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <div class="row">
        <div class="col-lg-6 col-md-12">
              <?php
                $sql = "SELECT * FROM contact_address ";
                $result =  mysqli_query($connect,$sql);
                if($result){
                  foreach ($result as $contact_address){
                    $phone = $contact_address["phone"];
                    $email = $contact_address["email"];
                    $address = $contact_address["address"];
                    $map = $contact_address["map"];
                    ?>
                        <p>Phone : <?php echo $phone; ?></p>
                        <p>Email : <?php echo $email; ?></p>
                        <p>Address : <?php echo $address; ?></p>
                        <p>
                            <?php echo $map; ?>
                        </p>
                    <?php
                  }
                }
              ?>
          </div>
          <div class="col-lg-6 col-md-12">
            <?php
                $sql = "SELECT * FROM contact_address";
                $result = mysqli_query($connect, $sql);
                if($result){
                  foreach($result as $contact_address){
                    ?>
              <form action="backend.php" method="post">
                <input type="phone" name="phone" placeholder="Phone" class="form-control" value="<?php echo $contact_address['phone']?>">
                <br>
                <input type="email" name="email" placeholder="Email"  class="form-control" value="<?php echo $contact_address['email']?>">
                <br>
                <textarea name="address" class="form-control" placeholder="Address" rows="8" ><?php echo $contact_address['address']?></textarea>
                <br>
                <textarea name="map" class="form-control" placeholder="Google Map" rows="8" ><?php echo $contact_address['map']?></textarea>
                <br>
                <input type="submit" name="update_contact_address" class="btn btn-primary" value="Update">
              </form>
                    <?php
                  }
                }
            ?>

          </div>
        </div>
        
      </div>
    </div>
    
  </div>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#socailMediaLink" aria-expanded="false" aria-controls="collapseThree">
         Social Media Link
        </button>
      </h5>
    </div>
    <div id="socailMediaLink" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <?php
            $sql = "SELECT * FROM socail_media ORDER BY id DESC";
            $result = mysqli_query($connect,$sql);
            if($result){
              foreach($result as $r){
                ?>
                  <p>
                    name : <?php echo $r['title'];?> <br>
                    Icon : <img style="width:100px;height:100px" src="../uploads/<?php echo $r['icon'];?>" alt=""> <br>
                    <a href="<?php echo $r['link']?>"> <?php echo $r['link']?></a>
                    <form action="backend.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $r['id']?>" />
                      <input type="submit" name="social_media_link_delete" value="Delete" class="btn btn-danger">
                    </form>
                  </p>
                  <hr>
                <?php
              }
            }
        ?>
      
      <form action="backend.php" method="post" enctype="multipart/form-data">
            <input type="text" name='title' placeholder="Name" class="form-control">
            <br>
            <input type="file" name="image" class="form-control">
            <br>
            <input type="text" name="link" class="form-control" placeholder="Link">
            <br>
            <input type="submit" name="create_soical_link" class="btn btn-primary" value="Create">
      </form>

      </div>
    </div>
    
  </div>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#membership" aria-expanded="false" aria-controls="collapseThree">
        Membership system
        </button>
      </h5>
    </div>
    <div id="membership" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
    
  </div>
</div>

    
</div>

<script>

</script>

<?php
    include_once "footer.php";
?>
