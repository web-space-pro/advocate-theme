<?php

if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}

add_action( 'after_setup_theme', 'advocate_theme_setup' );
function advocate_theme_setup() {
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on custom-theme, use a find and replace
        * to change 'custom-theme' to the name of your theme in all the template files.
        */
    load_theme_textdomain( 'advocate-theme', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );

    //Add Thumbnail Theme support
    add_theme_support( 'post-thumbnails' );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
    */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );


    // Add theme support for selective refresh for widgets.
    //add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}

if ( function_exists('add_theme_support') ) {

	// Add Menu Support
    add_theme_support('menus');

    // Add Woocomerse Support
    // add_theme_support( 'woocommerce' );
    // add_theme_support( 'wc-product-gallery-slider' );

    //add_theme_support('automatic-feed-links');
	//add_theme_support( 'html5', array( 'search-form' ) );

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('small', 300, '', true);
    add_image_size('medium', 600, '', true);
    add_image_size('large', 1000, '', true);
    add_image_size('large2', 1400, '', true);
    add_image_size('large3', 1920, '', true);
}

// Remove Wordpress emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

?>
