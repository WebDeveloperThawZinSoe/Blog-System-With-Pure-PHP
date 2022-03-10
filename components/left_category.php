

<?php
                    $sql = "SELECT * FROM category ORDER BY id DESC";
                    $result = mysqli_query($connect,$sql);
                    if($result){
                        foreach ($result as $key => $value) {
                            $id = htmlspecialchars($value['id']);
                           ?>
                                <li class="list-group-item">
                                    <a href="category_detail.php?id=<?php echo $value['id'] ?>"> <?php echo $value['name'] ?>  </a>
                                </li>
              
                           <?php
                        }
                    }
                ?>
               