<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Reset */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, null, 'screen');
		
		

		/* Register Bootstrap CDN */
		wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
		
		/* Register Styles */
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), null, null, 'screen');
	
		/* Enqueue Scripts */
		wp_enqueue_style('reset');
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('mainStyle');
		
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>