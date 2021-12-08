<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link rel="stylesheet" href="wp-content/themes/formative/style.css">
<?php get_header(); ?>
<br>


<body style="background-color:<?php echo get_theme_mod('color_picker2');?>">

  <div class="container-fluid">
  <div style="background-image: url('<?php echo get_theme_mod('custom_image');?>');" class="jumbotron jumbotron-cover-image">
    <div class="container">

    </div>
  </div>
</div>

<div class="centered">
  <h1 style="color:<?php echo get_theme_mod('color_picker');?>; text-align:center;"><?php echo get_theme_mod("my_frontpage_message"); ?></h1>
  <br>
  <h4 style="color:<?php echo get_theme_mod('color_picker');?>; text-align:center;">A Community Built Team</h4>
</div>


  <div class="container" style="background-color:<?php echo get_theme_mod('color_picker2');?>" >

    <div class="page-header">
      <h1></h1>
    </div>

    <div class="row">

      <div class="col-md-8">

<!-- start of card -->

<div class="row">
 <div class="col-12">
  <h3></h3>
</div>
  <?php
  if (have_posts() ) :
      while (have_posts() ) : the_post(); ?>

        <article id="">
          <header>
            <h2 style="color: #f8c74e;">
              News:
              </h2>
              <br>
          </header>
          <h5  class="card-title">
                       <a style="color:#f8c74e;" href="<?php the_permalink(); ?>">
                       <?php the_title() ?>
                       </a>
                     </h5>
          <div class="entry-content">
              <?php the_post_thumbnail("medium"); ?>
            </a>
            <div>
                       <?php $categories = get_the_category();
                            foreach($categories as $category){
                              echo '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                            }
                        ?>
                     </div>
            <p class="lead"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More<span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
          </div>
          <footer>
            <br>
            <div style="color: #f8c74e; ">
             Written by <h2 class="author"> <?php the_author('F j, Y'); ?></h2>
            Posted on: <span class="date"><?php echo get_the_date('F j, Y'); ?> <?php the_time(); ?></span>
               <span class="badge">
           </div>
          </footer>
        </article>

      <?php endwhile;
  else : echo '<p>There are no posts!</p>';
endif;
?>

<?php
query_posts(array(
'post_type' => fruit
)
);
?>
<?php
if (have_posts() ) : $postcount = 0;
    while (have_posts() ) : the_post();
        $postcount++;
        if($postcount == 1) {
    ?>

    <!-- here's the area where it loops over each post -->

  <?php
  // closing the if statement
}else{
  ?>

  <?php
};  ?>
<?php
endwhile;
    else : echo '<p></p>';
endif;
?>

</div>
<!-- end of card -->

      </div>
      <aside class="col-md-4">

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
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
<br>
  <div class="container">
  <h3>Follow Us</h3>
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
</body>
