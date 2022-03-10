<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="posts.php">Posts</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
            $sql = "SELECT * FROM category ORDER BY id DESC";
            $result = mysqli_query($connect,$sql);
            foreach($result as $r){
              ?>
 <a class="dropdown-item" href="category_detail.php?id=<?php echo $r['id'] ?>"><?php echo $r['name'] ?></a>
              <?php
            }
          ?>
         
       
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>