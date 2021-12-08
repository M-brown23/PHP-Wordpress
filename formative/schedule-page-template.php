<?php

/*

Template Name: Matt's schedule Page Template

*/

?>
<body style="background-color: #39393b;">

<?php get_header(); ?>
  <div style="color:white;" class="container fluid mt-5 mb-5">
     <div class="row">
        <?php
        if (have_posts() ) :
            while (have_posts() ) : the_post(); ?>
            <!-- here's the area where it loops over each post -->
            <div class="container my-5">
      <div class="row">
          <div class="col-md-12 text-center">
              <span class="text-uppercase" style="color: #f8c74e">schedule</span>
              <h2 class="text-capitalize font-weight-bold">event schedule</h2>
          </div>
      </div>
      <div class="row my-5">
          <div class="col-lg-6 col-md-12 col-sm-12 my-sm-3">
              <p class="text-center" style="color: #f8c74e;">AM</p>
              <div class="d-flex align-items-center  justify-content-center" style="margin: 20px 0">
                  <div style="width: 200px">
                      <h4 class="font-weight-bold"  style="color: #f8c74e">09:00 : 10:00</h4>
                  </div>
                  <div class="">
                      <h6>Meeting CEO</h6>
                      <small class="text-secondary">Lorem ipsum dolor sit amet.</small>
                  </div>
              </div>
              <div class="d-flex align-items-center  justify-content-center" style="margin: 20px 0">
                  <div style="width: 200px">
                      <h4 class="font-weight-bold"  style="color: #f8c74e">10:15 : 11:00</h4>
                  </div>
                  <div >
                      <h6>Registeration</h6>
                      <small class="text-secondary">Lorem ipsum dolor sit amet.</small>
                  </div>
              </div>
              <div class="d-flex align-items-center  justify-content-center" style="margin: 20px 0">
                  <div class="" style="width: 200px;">
                      <h4 class="font-weight-bold"  style="color: #f8c74e">11:10 : 12:00</h4>
                  </div>
                  <div >
                      <h6>Meeting Zoya Khan</h6>
                      <small class="text-secondary">Lorem ipsum dolor sit amet.</small>
                  </div>
              </div>
              <div class="d-flex align-items-center justify-content-center" style="margin: 20px 0">
                  <div class="" style="width: 200px">
                      <h4 class="font-weight-bold"  style="color: #f8c74e">12:00 : 12:45</h4>
                  </div>
                  <div class="">
                      <h6>Lunch Time</h6>
                      <small class="text-secondary">Lorem ipsum dolor sit amet.</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 my-sm-3">
              <p class="text-center" style="color: #f8c74e">PM</p>
              <div class="d-flex align-items-center justify-content-center" style="margin: 20px 0">
                  <div style="width: 200px">
                      <h4 class="font-weight-bold"  style="color: #f8c74e">01:00 : 02:00</h4>
                  </div>
                  <div>
                      <h6>Working On Project</h6>
                      <small class="text-secondary">Lorem ipsum dolor sit amet.</small>
                  </div>
              </div>
              <div class="d-flex align-items-center justify-content-center" style="margin: 20px 0">
                  <div style="width: 200px">
                      <h4 class="font-weight-bold"  style="color: #f8c74e">02:15 : 03:00</h4>
                  </div>
                  <div >
                      <h6>A Little Sleep</h6>
                      <small class="text-secondary">Lorem ipsum dolor sit amet.</small>
                  </div>
              </div>
              <div class="d-flex align-items-center justify-content-center" style="margin: 20px 0">
                  <div class="" style="width: 200px;">
                      <h4 class="font-weight-bold"  style="color: #f8c74e">03:10 : 04:00</h4>
                  </div>
                  <div >
                      <h6>Football Match</h6>
                      <small class="text-secondary">Lorem ipsum dolor sit amet.</small>
                  </div>
              </div>
              <div class="d-flex align-items-center justify-content-center" style="margin: 20px 0">
                  <div class="" style="width: 200px">
                      <h4 class="font-weight-bold"  style="color: #f8c74e">04:20 : 05:30</h4>
                  </div>
                  <div class="">
                      <h6>Hanging Around</h6>
                      <small class="text-secondary">Lorem ipsum dolor sit amet.</small>
                  </div>
              </div>
          </div>
      </div>
  </div>
            <div class="col-12">
              <a class="btn btn-primary" href="<?php echo home_url(); ?>">Back to home</a>
            </div>
        <?php endwhile;
            else : echo '<p>There are no posts!</p>';
        endif;
        ?>
        <!-- <p>This is the index template</p> -->
</body>

<?php get_footer(); ?>
