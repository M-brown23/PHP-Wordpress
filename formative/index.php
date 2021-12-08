  <?php get_header(); ?>

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
              <?php the_title() ?>
              </h2>
              <br>
          </header>
          <h5  class="card-title">
                       <a style="color:#f8c74e;" href="<?php the_permalink(); ?>">

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
          <!-- <p>This is the index template</p> -->
	</body>

  <?php get_footer(); ?>
