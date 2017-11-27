<?php

function twentyseventeen_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
     * If you're building a theme based on Twenty Seventeen, use a find and replace
     * to change 'twentyseventeen' to the name of your theme in all the template files.
     */
    load_theme_textdomain('01');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    add_image_size('twentyseventeen-featured-image', 2000, 1200, true);

    add_image_size('twentyseventeen-thumbnail-avatar', 100, 100, true);

    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');



    add_theme_support('starter-content', $starter_content);
}

add_action('after_setup_theme', 'twentyseventeen_setup');

/**
 * Enqueue scripts and styles.
 */
function my_scripts() {

//    wp_enqueue_style('color-pickr', get_template_directory_uri().('/css/includes/color-pickr/color-pickr.css'));
     wp_enqueue_style('style', get_template_directory_uri().('/style.css'));
    wp_enqueue_style('bootstrap', get_template_directory_uri().('/css/includes/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('animations', get_template_directory_uri().('/css/includes/wow-js/animations.css'));
    wp_enqueue_style('litebox', get_template_directory_uri().('/css/includes/litebox/litebox.css'));
    wp_enqueue_style('owl', get_template_directory_uri().('/css/includes/owl-carousel/owl.carousel.css'));
    wp_enqueue_style('style-moban', get_template_directory_uri().('/css/style.css'));
    wp_enqueue_style('media', get_template_directory_uri().('/css/media.css'));
    wp_enqueue_style('font-awesome', get_template_directory_uri(). ('/css/includes/font-awesome-4.2.0/css/font-awesome.min.css'));
    wp_enqueue_style('font1', 'http://fonts.googleapis.com/css?family=PT+Sans:400,700');
    wp_enqueue_style('font2', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700,300');



    // Load the html5 shiv.
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/css/includes/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('jquery-easing', get_template_directory_uri().'/js/jquery.easing.1.3.min.js');
    wp_enqueue_script('jquery-sticky', get_template_directory_uri().'/js/jquery.sticky.js');
    wp_enqueue_script('jquery-nav', get_template_directory_uri().'/js/jquery.nav.js');
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/css/includes/owl-carousel/owl.carousel.min.js');
    wp_enqueue_script('wow-js', get_template_directory_uri().'/css/includes/wow-js/wow.min.js');


    wp_enqueue_script('jquery-scrolly', get_template_directory_uri().'/js/jquery.scrolly.js');
    wp_enqueue_script('isotope', get_template_directory_uri().'/js/isotope.pkgd.min.js');
    wp_enqueue_script('images-loaded', get_template_directory_uri().'/css/includes/litebox/images-loaded.min.js');
    wp_enqueue_script('liteboxjs', get_template_directory_uri(). '/css/includes/litebox/litebox.min.js');
    wp_enqueue_script('waypoints', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js');
    wp_enqueue_script('counterup', get_template_directory_uri().'/js/jquery.counterup.min.js');
    wp_enqueue_script('nicescroll', get_template_directory_uri().'/js/jquery.nicescroll.min.js');
    wp_enqueue_script('nicescroll', get_template_directory_uri().'/css/includes/contact-form/app.js');
    wp_enqueue_script('validatr', get_template_directory_uri().'/css/includes/contact-form/validatr.js');
    wp_enqueue_script('customjs', get_template_directory_uri().'/js/custom.js');
}



add_action('wp_enqueue_scripts', 'my_scripts');







