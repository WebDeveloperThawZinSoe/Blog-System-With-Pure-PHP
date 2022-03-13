

<div class="m-t-3"></div>

<footer class="mainfooter" role="contentinfo">
  <div class="footer-top p-y-2">
    <div class="container-fluid">

    </div>
  </div>
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Address</h4>
          <address>
								<ul class="list-unstyled">
									<li>
                    City Hall<br>
										212  Street<br>
										Lawoma<br>
										735<br>
									</li>
									<li>
										Phone: 0
									</li>
								</ul>
							</address>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Popular Services</h4>
          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Payment Center</a></li>
            <li><a href="#">Contact Directory</a></li>
            <li><a href="#">Forms</a></li>
            <li><a href="#">News and Updates</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Website Information</h4>
          <ul class="list-unstyled">
            <li><a href="#">Website Tutorial</a></li>
            <li><a href="#">Accessibility</a></li>
            <li><a href="#">Disclaimer</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Webmaster</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Popular Departments</h4>
          <ul class="list-unstyled">
            <li><a href="#">Parks and Recreation</a></li>
            <li><a href="#">Public Works</a></li>
            <li><a href="#">Police Department</a></li>
            <li><a href="#">Fire</a></li>
            <li><a href="#">Mayor and City Council</a></li>
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <!--Footer Bottom-->
          <p class="text-xs-center">
            <?php 
              $sql = "SELECT * FROM footer_credit";
              $result = mysqli_query($connect,$sql);
              if($result){
                foreach($result as $ft){
                  echo $ft['name'];
                }
              }
            ?>
          </p>
        
        </div>
        <div class="col-md-6 col-xs-12">
          <!--Footer Bottom-->
          
         <?php
            $sql = "SELECT * FROM socail_media ";
            $result = mysqli_query($connect,$sql);
            if($result){
              foreach($result as $as){
                ?>
                  <a href="<?php echo $as['link'] ?>" target="_blank" style="text-decoration: none;">
                    <img src="uploads/<?php echo $as['icon'] ?>" class="img-responsive" style="width:30px;height:30px;border-radius:100%"  alt="">
                  </a>
                <?php
              }
            }
        ?>
        
        </div>
      </div>
    </div>
  </div>
</footer>




</body>

</html>