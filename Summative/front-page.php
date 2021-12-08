<?php

/*

Template Name: Front Page Page Template

*/

?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link rel="stylesheet" href="wp-content/themes/formative/style.css">
<?php get_header(); ?>


<body style="background-color:<?php echo get_theme_mod('color_picker2');?>">
  <header class="hero">
    <div class="hero-inner">

      <div class="hero-text">
        <div class="color">
          <img class="img-2" src="<?php bloginfo('stylesheet_directory');?>/images/1916142.png" alt="">
          <br>
        <i style="font-family: sans-serif;font-size: 3.6rem;color: #FFB600; margin-left: 16px;">Sports Centre</i>
        <br>
        <i style="font-size: 20px; color: #Faf9f6; margin-left: 18px;">
          Lets get Active! Book an indoor sports venue now!
        </i>
        <br>
        <button class="button"><a href="http://192.168.33.10/formative/index.php/bookings/">Book Now</button></a>
      </div>
    </div>
  </div>
  </header>


</body>

<?php get_footer(); ?>
