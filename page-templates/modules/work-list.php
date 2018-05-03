<?php
get_header();
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="offer-section pt-5 pb-5">
	<div class="<?php echo esc_attr( $container ); ?>">
		
		<?php if( get_sub_field('offer_title') ): ?>
			<h2 class="section-title pt-5 pb-5"> 
				<?= get_sub_field('offer_title'); ?>
			</h2>
		<?php endif; ?>
		
		<?php if( get_sub_field('offer_text') ): ?>
			<p class="pb-5 offer-p section-text">
				<?= get_sub_field('offer_text'); ?> 
			</p>
		<?php endif; ?>
		
		<?php if (have_rows ('image_list')) : ?>
			<ul class="d-flex flex-wrap pt-5 pb-5 justify-content-center justify-content-md-between">
				<?php while (have_rows ('image_list')) : the_row ();?>
					<li class="col-12 col-sm-6 col-md-4 pb-4" style="background-image: url(<?= get_sub_field('image'); ?>); background-size: 15rem; background-repeat: no-repeat; background-position: top;">
						<h3 class="offer-image-title pb-3"><?= get_sub_field('image_title'); ?></h3>
						<p class="section-text offer-image-text"> <?= get_sub_field('image_description'); ?></p>
					</li>
				<?php endwhile;?>
			</ul>
		<?php endif; ?>
	</div>
</section>