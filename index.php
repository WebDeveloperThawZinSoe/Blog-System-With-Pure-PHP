<?php
    include_once "components/header.php";
    include_once "components/nav.php";
    include_once "components/hero-section.php";
?>


<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <ul class="list-group" style="margin-bottom: 40px;">
                <li class="list-group-item active">Categrory</li>
                <li class="list-group-item">Second item</li>
                <li class="list-group-item">Third item</li>
            </ul>
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="card col-lg-4" >
                <img class="card-img-top" src="img/download (3).jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
       
    </div>
</div>

<?php
    include_once "components/footer.php";
?>