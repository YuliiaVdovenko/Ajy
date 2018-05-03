<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );?>

	<!--section Blog/Single post-->
	<div class="image-background"
		 style="background-image: url(<?php echo get_theme_mod('back-page-image'); ?>);
				 background-size: cover; background-repeat: no-repeat; background-position: center;">
		<div class="<?php echo esc_attr( $container ); ?> pt-5 pb-5">
			<h2 class="blog-name"> 
				<?= the_title()?> 
			</h2>
		</div>
	</div>

	<!--Main Post-->
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-12 col-lg-8 pt-5 pb-5">
				<main class="site-main" id="main">
				<?php if (have_posts()) : while ( have_posts() ) : the_post();?>
					<div class="content-block col-12">
						<?php the_post_thumbnail(); ?>
						<h2>
							<?php the_title() ?>
						</h2>
						<?php the_content();?>
					</div>
				<?php endwhile;
				endif; ?>
				</main>
				<div class="post-pag d-flex justify-content-between">
					<?php previous_post_link('%link', 'Previous');?> 
					<?php next_post_link('%link', 'Next');?>
				</div>
			</div>

			<aside class="sidebar col-12 col-md-6 col-lg-4 pt-5 pb-5">
				<?php dynamic_sidebar('right-page-sidebar'); ?>
			</aside>

		</div>
	</div>

<?php get_footer(); ?>
