<?php
get_header();
$container   = get_theme_mod( 'understrap_container_type' );?>

<section>
	<div class="<?php echo esc_attr( $container ); ?> d-flex flex-wrap align-items-center home-block-welcome pb-5 pb-md-0">
		<?php if( get_sub_field('welcome_image') ): ?>
			<div class="image-background col-12 col-md-6 align-items-end pt-5 mt-md-5">
				<img src="<?= get_sub_field('welcome_image'); ?>" alt="" class="section-image">
			</div>
		<?php endif; ?>
		<?php if( get_sub_field('welcome_title') ): ?>
			<div class="col-12 col-md-6 text-center text-md-left about-text">
				<h2 class="about-title pb-3 pb-md-5 pt-5 pt-md-0"> 
					<?= get_sub_field('welcome_title'); ?>
				</h2>
		<?php endif; ?>
		<?php if( get_sub_field('welcome_text') ): ?>
				<p>
					<?= get_sub_field('welcome_text'); ?>
				</p>
			</div>
		<?php endif; ?>
	</div>
</section>