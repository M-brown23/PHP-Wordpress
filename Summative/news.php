<?php

/*

Template Name: Matt's news Page Template

*/

?>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php get_header(); ?>
<br>


<body style="background-color:<?php echo get_theme_mod('color_picker2');?>">


  <div class="container" style="background-color:<?php echo get_theme_mod('color_picker2');?>" >

    <div style="" class="centered">
      <h1 class="h1" style="color:<?php echo get_theme_mod('color_picker');?>; text-align:center;"><?php echo get_theme_mod("my_frontpage_message"); ?></h1>
      <h4 style="color:<?php echo get_theme_mod('color_picker4');?>; text-align:center;"> <?php echo get_theme_mod("my_frontpage_message2")?> </h4>
    </div>
    <br>

    <div class="page-header">
      <h1></h1>
    </div>

    <div class="row">

      <div class="col-md-8">

<!-- start of card -->
        <div  id="content">

        <?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>

        <?php if( have_posts() ): ?>

        <?php while( have_posts() ): the_post(); ?>

          <div style="background-color: <?php echo get_theme_mod('color_picker3');?>; margin-top: 10px; padding: 20px; width: 88%;" class="card" id="">
            <header>
                <br>
            </header>
            <div style="max-width: 100%;" class="">
                <?php the_post_thumbnail("large");?>
            </div>
            <br>
            <h1 class="card-title">
               <?php the_title() ?>
           </h1>
            <div class="entry-content">
              </a>
              <h1 style="color:#2b2b2b;" class="lead"><?php the_excerpt(); ?></h1>
            </div>
            <footer>
              <div style="color: #2b2b2b; ">
               Written by <h3 class="author"> <?php the_author('F j, Y'); ?></h3>
              Posted on: <span class="date"><?php echo get_the_date('F j, Y'); ?> <?php the_time(); ?></span>
                 <span class="badge">
             </div>
             <br>
             <a href="<?php the_permalink(); ?>" class="button3">Read More<span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>

            </footer>
          </article>
          </div>
          <br>

        <?php endwhile; ?>

        <div class="navigation">
        <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
        </div><!-- /.navigation -->

        <?php else: ?>

        <div id="post-404" class="noposts">

        </div><!-- /#post-404 -->

        <?php endif; wp_reset_query(); ?>
      </div>

      <!-- /#content -->
<!-- end of card -->

      </div>
      <aside style="margin-top: 10px; margin-left: -50px;" class="col-md-4">

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

        <!-- <p>This is front-page.php</p> -->
        <?php get_footer(); ?>
