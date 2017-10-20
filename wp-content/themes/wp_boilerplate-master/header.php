<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>

</head>
<body>

<nav class="navegacion">
  	<div class="container">
	  	<div class="row">
	  		<div class="navbar-header">
	  			<button type='button' class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-e>
	  			  				<span class="sr-only">Toggle Navigation</span>
	  			  				<span class="icon-bar"></span>
	  			  				<span class="icon-bar"></span>
	  			  				<span class="icon-bar"></span>
	  			 </button>
	  			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-grace.png" class="img-responsive">
	  		</div>
	  			  <div class="navbar-right">	

				<?php 
				add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

				function special_nav_class ($classes, $item) {
				    if (in_array('current-post-ancestor', $classes) || in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
				        $classes[] = 'active ';
				    }
				    return $classes;
				}
					wp_nav_menu(array(
						'theme_location' => 'menu_principal',
						'container_id' => 'navbar',
						'container_class' => 'collapse navbar-collapse',
						'menu_class' => 'nav navbar-nav navbar-right'

					) );

				?>

	  		</div>
	  	</div>
	</div>
</nav>
 