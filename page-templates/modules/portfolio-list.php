<?php
get_header();
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="pb-5 pt-5 text-center">
	<div class="<?php echo esc_attr( $container ); ?>" >
		
		<?php if( get_sub_field('portfolio_title') ): ?>
			<h3 class="pt-0 pt-md-5 pb-5 section-title work-header"> 
				<?= get_sub_field('portfolio_title') ?>
			</h3>
		<?php endif; ?>
		
		<?php if( get_sub_field('portfolio_subtitle') ): ?>
			<p class="section-text offer-p work-p pb-3 pb-md-0"> 
				<?= get_sub_field('portfolio_subtitle') ?> 
			</p>
		<?php endif; ?>
		
		<?php $terms = get_terms( 'projects' );
				if( $terms && ! is_wp_error($terms) ){ ?>
		<div id="filters" class="button-group">
			<span class="button-port" data-fiter="*"> All </span>
			<ul class="d-inline-flex flex-wrap justify-content-center justify-content-md-around filter-list pb-5 pt-sm-5">
				<?php
					foreach( $terms as $term ){ ?>
						<li>
							<span class="button-port" data-filter="<?= '.' . $term->slug; ?>">
								<?= $term->name; ?></span>
						</li>
						<?php
					}
				?>
			</ul>
		</div>
		<?php } ?>

			<?php
				$portfolio = new WP_Query( array('post_type' => array( 'portfolio' )) );
				if ( $portfolio->have_posts() ) { 
			?>
			<ul class="row filter-img-list portfolio-list">
					<?php while ( $portfolio->have_posts() ) {
						$portfolio->the_post(); ?>
						<li class="col-12 col-sm-6 col-lg-4 portfolio-item pb-5 <?php isotope_classes(get_the_ID()); ?>">
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
		</div>
</section>