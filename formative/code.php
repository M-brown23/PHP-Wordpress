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

           </div>
          </footer>
        </article>

        <div id="content">

        <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

        <?php if( have_posts() ): ?>

        <?php while( have_posts() ): the_post(); ?>

        <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div style="color: #f8c74e; ">
         Written by <h2 class="author"> <?php the_author('F j, Y'); ?></h2>
        Posted on: <span class="date"><?php echo get_the_date('F j, Y'); ?> <?php the_time(); ?></span>
           <span class="badge">

        <?php the_excerpt(__('Continue reading »','example')); ?>

        </div><!-- /#post-<?php get_the_ID(); ?> -->

        <?php endwhile; ?>

        <div class="navigation">
        <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
        </div><!-- /.navigation -->

        <?php else: ?>

        <div id="post-404" class="noposts">

        <p><?php _e('None found.','example'); ?></p>

        </div><!-- /#post-404 -->

        <?php endif; wp_reset_query(); ?>

        </div>
