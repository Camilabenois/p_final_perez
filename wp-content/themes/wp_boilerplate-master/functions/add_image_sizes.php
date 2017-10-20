<?php
	
	// Agrega los tamaños personalizados en la lista de tamaños disponibles en el administrador
	function dl_image_sizes($sizes) {
		$addsizes = array(
			"slideshow" => __( "Tamaño del slideshow"),
			"custom_logo" => __( "Tamaño personalizado del logo"),
			"recent_posts_thumbnails" => __( "Tamaño personalizado thumbnails front page"),
			"recent_posts_thumbnails_sidebar" =>  __( "Tamaño personalizado thumbnails sidebar"),
			"post_thumbnails" => __( "Tamaño personalizado thumbnails blog page"),
			"post_thumbnails_bloglist" => __( "Tamaño personalizado thumbnails blog list"),
			"treatment_icons" => __( "Tamaño para íconos en Custom Post Type Tratamientos")
		);
		return array_merge($sizes, $addsizes);
	}
	// Agrega tamaños de imágenes personalizadas en posts
	if ( function_exists( 'add_theme_support' ) ) { 
		add_image_size( 'slideshow', 1970, 972, true); // Personalización del tamaño del slideshow
		add_image_size( 'custom_logo', 800, 600, true); // Personalización del tamaño del logo
		add_image_size( 'recent_posts_thumbnails', 185, 137, true); // Personalización de thumbnails front page
		add_image_size( 'recent_posts_thumbnails_sidebar', 143, 122, true); // Personalización de thumbnails sidebar
		add_image_size( 'post_thumbnails', 360, 204, true); // Personalización de thumbnails blog page
		add_image_size( 'post_thumbnails_bloglist', 262, 202, true); // Personalización de thumbnails blog list
		add_image_size( 'treatment_icons', 200, 200, false); //Tamaño para íconos en Custom Post Type Tratamientos
		
		add_filter('image_size_names_choose', 'dl_image_sizes');
	}
?>