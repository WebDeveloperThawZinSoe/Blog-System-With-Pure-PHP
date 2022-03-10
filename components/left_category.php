

<?php
                    $sql = "SELECT * FROM category ORDER BY id DESC";
                    $result = mysqli_query($connect,$sql);
                    if($result){
                        foreach ($result as $key => $value) {
                            $id = htmlspecialchars($value['id']);
                            $sql = "SELECT id FROM post WHERE category='$id'";
                            $result = mysqli_query($connect,$sql);
                            $count = mysqli_num_rows($result);
                           ?>
                                <li class="list-group-item">
                                    <a href="category_detail.php?id=<?php echo $value['id'] ?>"> <?php echo $value['name'] ?> <span class="badge badge-primary"><?php echo $count; ?></span>  </a>
                                </li>
              
                           <?php
                        }
                    }
                ?>
               