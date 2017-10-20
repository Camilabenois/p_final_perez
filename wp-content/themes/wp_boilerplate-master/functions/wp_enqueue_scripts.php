<?php 
	
	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Register Scripts */
		wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/js/lib/jquery.min.js'), null, '3.2.1', true);

		wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);

		wp_register_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array('jQuery3'), null, false);

		wp_register_script('flexslider', get_parent_theme_file_uri('/assets/js/lib/jquery.flexslider.min.js'), array('jQuery3'), null, false);

		wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/theme.js'), array('jQuery3'), $theme_data->get( 'Version' ), false);

		
		/* Enqueue Scripts */
		wp_enqueue_script('jQuery3');
		wp_enqueue_script('jQuery_migrate');
		wp_enqueue_script('bootstrap_js');
		wp_enqueue_script('flexslider');
		wp_enqueue_script('mainJS');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>