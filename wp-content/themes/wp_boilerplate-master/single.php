<?php get_header() ?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
	</br>
<?php echo do_shortcode("[breadcrumb]"); ?>
	</div>
</div>
<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<h3 class="margins"><?php the_title() ?> </h3>
			<div class="espacio">
				<?php the_post_thumbnail('posts_thumbnails',array('class' => 'img-responsive')); ?>
			</div>
		
		<?php the_content() ?>
		<div align= "center" class="espacio">
		<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></br>
		</div>
		</div>
	</div>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>


<?php get_footer() ?>