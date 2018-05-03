<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">
	<div class="<?php echo esc_attr( $container ); ?> padding">
		<div class="row">
			<div class="col-12 col-md-8">
				<?php if ( have_posts() ) : ?>
					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title pb-5">', '</h1>' );
						?>
					</header>
					
					<ul class="d-flex flex-wrap">
					<?php while ( have_posts() ) : the_post(); ?>
						<li class="mb-5 p-3 content-block">
							<?php get_template_part( 'loop-templates/content', get_post_format() );?>
						</li>
					<?php endwhile; ?>
					<?php else : ?>
					<?php get_template_part( 'loop-templates/content', 'none' ); ?>
					</ul>
				<?php endif; ?>

					<?php understrap_pagination(); ?>
			</div>

			<aside class="sidebar col-12 col-md-4 pt-5 pb-5">
				<?php dynamic_sidebar('right-page-sidebar'); ?>
			</aside>
		</div>
	</div>
</div>

<?php get_footer(); ?>
