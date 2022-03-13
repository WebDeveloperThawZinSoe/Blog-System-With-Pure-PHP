<?php
    include_once "components/header.php";
    include_once "components/nav.php";
  
?>

<br> <br>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <ul class="list-group" style="margin-bottom: 40px;">
                <li class="list-group-item active">Categrory</li>
               <?php
                    include "components/left_category.php";
                ?>
            </ul>
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="">
                <h2 class="h2 " style="text-decoration: underline;margin-bottom: 0.5em;">Contact Address</h2>
                <?php
                    $sql = "SELECT * FROM contact_address ";
                    $result =  mysqli_query($connect,$sql);
                    if($result){
                        foreach ($result as $contact){
                            $phone = $contact['phone'];
                            $email = $contact['email'];
                            $address = $contact['address'];
                            $map = $contact['map'];
                            ?>
                            <br>
                                <p> <strong> Phone : </strong>  <?php echo $phone;  ?></p>
                                <p> <strong>  Email : </strong> <?php echo $email;  ?></p>
                                <p> <strong>Address :</strong>  <?php echo $address;  ?></p>
                                <br>
                                <?php echo $map; ?>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php

    include_once "components/footer.php";
?>