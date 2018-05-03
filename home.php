<?php
/**
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );?>


<!--section Home Blog-->

<?php if( get_field('blog_title', get_option('page_for_posts')) ): ?>
    <div class="image-background"
    style="background-image: url(<?php echo get_theme_mod('back-page-image'); ?>);
    background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="<?php echo esc_attr( $container ); ?> pt-5 pb-5">
        <h2 class="blog-name"> 
            <?php the_field('blog_title',get_option('page_for_posts')); ?>
        </h2>
    </div>
</div>
<?php endif;?>

<!--Section Posts-->
<?php if (have_posts()) : ?>
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <main class="col-md-6 col-lg-8">
                <ul class="pt-5 pb-5 row">
                    <?php while ( have_posts() ) : the_post();?>
                        <li class="col-12 col-lg-6 post-item pb-5">
                            <a href="<?php the_permalink(); ?>" class="link-button">
                              <i class="fa fa-share fa-3x"></i>
                          </a>
                          <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail();?>
                        </a>
                        <div class="img-title-div">
                          <h2 class="p-3">
                             <a href="<?php the_permalink(); ?>" class="img-title">
                                <?php the_title() ?>
                            </a>
                        </h2>
                        <?php the_excerpt(); ?>
                        <div class="d-flex flex-wrap justify-content-center clock">
                         <i class="fa fa-clock-o clock-i"></i>
                         <?php
                         $archive_year = get_the_time('Y');
                         $archive_month = get_the_time('m');
                         $archive_day = get_the_time('d');
                         ?>
                         <a href="<?= get_day_link($archive_year, $archive_month, $archive_day); ?>" class="blog-date">
                            <time datetime="<?= get_the_date('Y-m-d'); ?>" >
                                <?= get_the_date('m, j, Y'); ?>
                            </time>
                        </a>
                    </div>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>

    <div class="my-pagination pb-5">
        <?php the_posts_pagination(); ?>
    </div>
</main>
<?php endif; ?>

<aside class="sidebar col-md-6 col-lg-4 pt-5 pb-5">
    <?php dynamic_sidebar('right-page-sidebar'); ?>
</aside>

</div>
</div>


<?php get_footer(); ?>
