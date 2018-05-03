<?php
get_header();
$container   = get_theme_mod( 'understrap_container_type' );?>


<section class="welcome-section pt-5 pb-5">
	<div class="<?php echo esc_attr( $container ); ?> d-flex flex-wrap align-items-center padding">
			
			<?php if( get_sub_field('back_image') ): ?>
				<div class="image-background col-12 col-md-6" >
					<img src="<?= get_sub_field('back_image'); ?>" alt="back_image" class="section-image pb-5 pb-md-0">
				</div>
			<?php endif; ?>

			<?php if( get_sub_field('title') ): ?>
			<div class="col-12 col-md-6 text-center text-md-left">
				<h2 class="welcome-title pb-5"> 
					<?= get_sub_field('title'); ?>
					<span class="us"> 
						<?= get_sub_field('title_2'); ?>
					</span>
				</h2>
			<?php endif; ?>

			<?php if( get_sub_field('sub_title') ): ?>
				<h3 class="welcome-subtitle">
					<?= get_sub_field('sub_title'); ?>
				</h3>
			<?php endif; ?>
			
			<?php if( get_sub_field('some_text') ): ?>
				<p class="welcome-clients pb-5">
					<?= get_sub_field('some_text'); ?> 
				</p>
			<?php endif; ?>
			
			<?php if( get_sub_field('about') ): ?>
				<p class="section-text welcome-p"> 
					<?= get_sub_field('about'); ?>
				</p>
			<?php endif; ?>
			</div>
	</div>
	<span class="go-anchor arrow-down">
		<i class="fa fa-angle-down fa-4x"></i>
	</span>
</section>




