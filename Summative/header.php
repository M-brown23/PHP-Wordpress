
<html lang="en">
	<head>

		<!-- Required meta tags -->
		<meta charset="<?php bloginfo('charset');?>">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&family=Work+Sans:ital,wght@1,300&display=swap"rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="/style.css">
		<!-- Bootstrap CSS -->

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title><?php bloginfo('name');?></title>
	</head>


	<body <?php body_class(); ?>>
		<?php wp_head(); ?>
		<a class="a" href="<?php echo home_url(); ?>"><img class="img" src="<?php bloginfo('stylesheet_directory');?>/images/ASB_Bank_logo.png" alt=""></a>
		<header>
			<header class="header">
			  <input class="menu-btn" type="checkbox" id="menu-btn" />
			  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
		<div id="nav" class="container">
		      <nav class="navlist">
		        <ul  class='ul'>
		          <!-- <li class="list"><a style="color:#FFB600" href="#footer">Events</li></a>
		          <li class="list"><a style="color:#FFB600" href="#footer">About Us</li></a>
		          <li class="list"><a style="color:#FFB600" href="#footer">Contact</li></a> -->
							<?php
        // $args = ['title_li','null'];
        wp_page_menu();
        ?>
		        </ul>
		      </nav>
					</header>
		    </div>

				</body>
