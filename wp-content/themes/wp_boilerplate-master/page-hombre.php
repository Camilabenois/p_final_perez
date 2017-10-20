<?php get_header() ?>
<ul>
<?php
	$arg= array(
		'post_type'     => 'Products' ,
		'category_name' => 'Hombre',
		'posts_per_page'=> 5,
		
	);
	$get_arg = new WP_Query( $arg );
	while ($get_arg->have_posts() ) {
		$get_arg->the_post();

		?>

<div class="container center">
	<h3><?php the_title() ?> </h3>
	<div class="container">
		<div class="row border">
			<div class="col-md-5 col-md-offset-3"><h4><?php the_content() ?> </h4>

				<?php the_post_thumbnail('posts_thumbnails',array('class' => 'img-responsive')); ?>
			</div>
		</div>
	</div>			
</div>
		
	<?php } wp_reset_postdata();
	?>

</ul>
<?php get_footer() ?>