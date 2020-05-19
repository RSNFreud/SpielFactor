<?php get_header(); ?>

	<div class="stickybar">
		<div class="jumbotron jumbotron-fluid" style="padding: 0">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/banner.jpg" width="100%" height="100%">
		</div>
	</div>

	<div class="row" id="text">
		<div class="col-md-9" id="contentbox">

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile; endif; 
			?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>
	</div> <!-- /.row -->

<?php get_footer(); ?>