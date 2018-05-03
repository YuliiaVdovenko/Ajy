<?php
get_header();
$container   = get_theme_mod( 'understrap_container_type' );?>

<div class="<?php echo esc_attr( $container ); ?> padding d-flex flex-wrap">
	<div class="col-12 col-md-6 col-lg-8">
		<p class="pt-5 pb-5 section-title work-header">
			Something about this taxonomy item
		</p>
		<?php the_post_thumbnail(); ?>
	</div>

	<aside class="sidebar col-12 col-md-6 col-lg-4 pt-5 pb-5">
		<?php dynamic_sidebar('right-page-sidebar'); ?>
	</aside>
</div>


<?php get_footer(); ?>




