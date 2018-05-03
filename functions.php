<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );

    wp_enqueue_script( 'isotope-script',  'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'isotope-loaded', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array(), $the_theme->get( 'Version' ), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

//Удаляем виджеты родительской темы
function remove_widgets(){

    unregister_sidebar( 'right-sidebar' );
    unregister_sidebar( 'left-sidebar' );
    unregister_sidebar( 'hero' );
    unregister_sidebar( 'statichero' );
    unregister_sidebar( 'footerfull' );

}
add_action( 'widgets_init', 'remove_widgets', 11 );


//Include child-theme custom-post-type.php
require_once('inc/custom-post-type.php' );

require_once ('inc/setup.php');

require_once ('inc/customizer.php');

require_once ('inc/widgets.php');


// Удаляем H2 из пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    return '<nav class="%1$s" role="navigation"><div class="nav-links">%3$s</div></nav>';
}
?>

<?php require_once ('inc/taxomony.php'); ?>

<?php
function isotope_classes($id){
    $terms = wp_get_post_terms ( get_the_ID(), 'projects');
    foreach ($terms as $term) {
        echo $term->slug. ' ';
    }
}
?>