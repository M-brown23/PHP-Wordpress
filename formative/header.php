<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title><?php bloginfo('name');?></title>
	</head>

  <body style="background-color:#39393b;" <?php body_class(); ?>>
  <?php wp_head(); ?>
	<nav id="nav-id" class="navbar navbar-expand-lg navbar-light bg-light">

		<div class="container-fluid">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="logo" src="<?php bloginfo('stylesheet_directory');?>/images/download.png" alt="happy shark" id="logo"/></a>
        <ul>
            <?php $menu_args = ['theme_location' => 'primary', 'menu_class' => "nav navbar-nav"]; ?>
            <?php wp_nav_menu($menu_args); ?>
      </ul>
    </div>
  </nav>
