<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="clients-section pt-5 pb-5 text-center">
	<div class="<?php echo esc_attr( $container ); ?>">
		
		<?php if( get_theme_mod('clients_title') ): ?>
			<h2 class="section-title pt-5 pb-5"> 
				<?php echo get_theme_mod('clients_title'); ?>
			</h2>
		<?php endif; ?>

		<?php
			$clients = new WP_Query( array('post_type' => array( 'clients' )) );
			if ( $clients->have_posts() ) { ?>
				<ul class="d-flex flex-wrap pb-5">
					<?php while ( $clients->have_posts() ) {
						$clients->the_post(); ?>
						<li class="element-item col-6 col-sm-3 pb-3">
							<a href="<?php the_field ('site_link');?>" target="_blank">
								<?php the_post_thumbnail(); ?>
							</a>
						</li>
					<?php
					}
					wp_reset_query();
					wp_reset_postdata();
					?>
				</ul>
				<?php }?>
	</div>
</div>




	<footer class="site-footer footer">
		<div class="image-background"
			 style="background-image: url(<?php echo get_theme_mod('back-image'); ?>);
					background-size: cover; background-repeat: no-repeat; background-position: center;">

		<div class="<?php echo esc_attr( $container ); ?>">
			<div class="row">
				<div class="col-12 col-md-6 pt-5">
					<?php if( get_theme_mod('info_name') ): ?>
						<h2 class="section-title pt-5 pb-5">
							<?php echo get_theme_mod('info_name'); ?>
						</h2>
					<?php endif; ?>

					<?php if( get_theme_mod('description') ): ?>
					<p class="section-text offer-p footer-p pt-3 pb-5">
						<?php echo get_theme_mod('description'); ?>
					</p>
					<?php endif; ?>

					<?php if( get_theme_mod('phone_number') ): ?>
					<ul class="d-flex flex-column">
						<li class="d-inline-flex pb-3 align-items-center">
							<span class="social-icon">
								<i class="fa fa-phone"></i>
							</span>
							<a href="tel:<?php echo get_theme_mod('phone_number'); ?>" class="tel">
								<?php echo get_theme_mod('phone_number'); ?>
							</a>
						</li>
						<?php endif; ?>

					<?php if( get_theme_mod('address_text') ): ?>
						<li class="d-inline-flex pb-3 align-items-center">
							<span class="social-icon icon-map">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</span>
							<address>
								<?php echo get_theme_mod('address_text'); ?>
							</address>
						</li>
					</ul>
					<?php endif; ?>

					<?php if( get_theme_mod('map') ): ?>
						<div class="embed-responsive embed-responsive-16by9 mt-5">
							<?php echo get_theme_mod('map'); ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="col-12 col-md-6 pt-5 mt-5">
					<?php echo do_shortcode( '[contact-form-7 id="38" title="Contact form 1"]' ); ?>
				</div>
			</div>
		</div>
		</div>

		<div class="footer-background">
			<?php if ( ! has_custom_logo() ) { ?>
			<?php if ( is_front_page() && is_home() ) : ?>
			<h1 class="navbar-brand mb-0">
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			<?php else : ?>

			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
			<?php endif; ?>
			<?php } else { the_custom_logo(); } ?>
		</div>

		<?php if( get_theme_mod('copyright') ): ?>
			<div class="site-info">
				<span> &copy; </span>
				<time datetime="<?php echo date('Y');?>"> <?php echo date('Y');?> </time>
				<span> <?php echo get_theme_mod('copyright'); ?></span>
			</div>
	<?php endif; ?>
	</footer>


<?php wp_footer(); ?>

