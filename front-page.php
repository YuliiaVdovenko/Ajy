<?php get_header();

$container = get_theme_mod( 'understrap_container_type' );?>

<?php
/**
 * The template for displaying front-page.
 *
 * @package understrap
 */
?>

<?php
while (have_rows ('modules_home_page')) :the_row ();
    switch (get_row_layout()) {
        case 'title_section' :
        get_template_part ('page-templates/modules/title');
        break;
        case 'offer_section' :
        get_template_part ('page-templates/modules/work-list');
        break;
        case 'portfolio_list' :
        get_template_part ('page-templates/modules/portfolio-list');
        break;
        case 'welcome_here' :
        get_template_part ('page-templates/modules/about');
        break;
        default: break;
    }
    endwhile; ?>



    <?php get_footer(); ?>