<?php get_header(); ?>
  <div class="container fluid mt-5 mb-5">
     <div class="row">
        <?php
        if (have_posts() ) :
            while (have_posts() ) : the_post(); ?>
            <!-- here's the area where it loops over each post -->
            <div style="margin: auto; padding: 20px; width:56%;" class="card" id="">
              <header>
                  <br>
              </header>
              <div class="card">
                  <?php the_post_thumbnail("large"); ?>
              </div>
              <br>
              <h1  class="card-title">
                <h1 style="color:#2b2b2b;" class="card-title">
                   <?php the_title() ?>
               </h1>
                         </h1>
              <div class="entry-content">
                </a>
                <p class="card-text"><?php the_content() ?></p>
              </div>
              <footer>
                <div style="color: #2b2b2b; ">
                 Written by <h3 class="author"> <?php the_author('F j, Y'); ?></h3>
                Posted on: <span class="date"><?php echo get_the_date('F j, Y'); ?> <?php the_time(); ?></span>
                   <span class="badge">
               </div>
               <br>
               <a href="http://192.168.33.10/formative/index.php/sample-page/" class="button3">Back to News<span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>

              </footer>
            </article>
            </div>
        <?php endwhile;
            else : echo '<p>There are no posts!</p>';
        endif;
        ?>

        <!-- <p>This is the index template</p> -->
        <aside style="margin-right: 50px;" class="col-md-4">

          <div class="card mb-3">
            <h3 class="card-header mb-3">Join our Newsletter</h3>
            <form class="form-horizontal">
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-primary">Join Us</button>
                </div>

              </div>
            </form>

          </div>

          <h3 style="color: white;">Recent Posts</h3>
          <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Birthday Parties at ASB
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <h1> You can book a Big Bounce or Sporty Kidz party on Sundays.</h1><br>
  <p>Mini Bounce parties are available on Saturdays only, depending on other bookings.
  Parties are for 1 hour and include a host from the ASB Sports Centre. A parent or guardian must stay for the whole party.
  Party packages
  Mini bounce
  5 years and under, maximum 30 children.
  Fun with a bouncy castle and soft play equipment in your own private room.
  Cost: $150 per hour.
  Note: this package is only available on Saturdays. Ratio of 1 adult: 4 children required.</p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Customer Review
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <h1>Great to see pickleball is available now in Wellington</h1><br>
        <p>Review of ASB Sports Centre
          Reviewed 28 January 2019
          Came here to play pickleball and was amazed at how busy the complex is, I guess this can be attributed to the amazing team who are enthusiastic about their job and always happy to push to make a wide range of activities available.
          Will has done a great job of getting Pickleball started in Wellington, thanks.</p>
          <p>Date of experience: October 2021</p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Events
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <h1> Wellington Events – Local and Sporting</h1><br>
  <p>Don't miss out on unmissable live sporting fixtures or go that extra mile and enter one of Wellington's many recreational events.
  Women's Cricket World Cup
  13 - 20 March 2022.</p>
  <a href="https://www.wellingtonnz.com/experience/events/icc-womens-cricket-world-cup-2022/"></a>
  <p>Cheer on the White Ferns as they compete against the best international cricket nations for the ICC Women's Cricket World Cup in March 2022.</p>
        </div>
      </div>
    </div>
  </div>
  <br>
    <div class="container">
    <h3 style="color: #ffb600; ">Follow Us</h3>
    <div class="social">
      <a href=""><i class="fa fa-3x fa-facebook-square"></i></a>
      <a href=""><i class="fa fa-3x fa-twitter-square"></i></a>
      <a href=""><i class="fa fa-3x fa-linkedin-square"></i></a>
      <a href=""><i class="fa fa-3x fa-google-plus-square"></i></a>
    </div>

    </div>



        </aside>
      </div>
    </div>

</body>

<?php get_footer(); ?>
