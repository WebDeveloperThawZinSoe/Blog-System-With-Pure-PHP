<?php

$connect = mysqli_connect("localhost","root","","blogSystem1");
if(!$connect){
    ?>
    <h1 class="alert alert-danger">Connection Error</h1>
    <?php
}
?>