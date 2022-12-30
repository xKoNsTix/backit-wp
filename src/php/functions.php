 

<?php
require_once( ABSPATH . 'wp-load.php' );
function load_styles_and_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

    // add theme directory path to a js variable  !!!!IMPORTANT


    $data = array(
        'template_url' => get_template_directory_uri(),
    );
    wp_localize_script('my-theme-main', 'themeData', $data);
}

function cc_mime_types($mimes){$mimes['svg']= 'images/svg+xml'; return $mimes;} //svg functionality
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');
add_theme_support('post-thumbnails'); //post thumbnails
?>
