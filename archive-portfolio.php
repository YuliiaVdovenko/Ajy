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

<div class="<?php echo esc_attr( $container ); ?> padding">
	<header class="page-header pt-5 pb-5">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="taxonomy-description section-text">', '</div>' );
		?>
	</header>
	<div class="row">
		<?php
		$portfolio = new WP_Query( array('post_type' => array( 'portfolio' )) );
		if ( $portfolio->have_posts() ) { 
			?>
			<ul class="d-flex flex-wrap filter-img-list">
				<?php while ( $portfolio->have_posts() ) {
					$portfolio->the_post(); ?>
					<li class="col-12 col-sm-6 col-lg-4 portfolio-item pb-5">
						<div class="img-border">
							<a href="<?= get_permalink();?>" target="_blank">
								<?php the_post_thumbnail(); ?>
							</a>
							<div class="portfolio-hover">
								<?php $terms = wp_get_post_terms( $post->ID, 'projects', array ("fields" => "all"));
								if( $terms && ! is_wp_error($terms) ){
									foreach( $terms as $term ){ ?>
									<a href="<?= get_term_link($term) ?>" class="hover-a" target="_blank">
										<?= $term->name; ?>
									</a>
									<?php }
								}?>
							</div>
						</div>
					</li>
					<?php
				}
				wp_reset_query();
				wp_reset_postdata();
				?>
			</ul>
			<?php }?>
		</main>
	</div>
</div>

<?php understrap_pagination(); ?>

<?php get_footer(); ?>
