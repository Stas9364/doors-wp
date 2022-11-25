<?php
/**
 * doors functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package doors
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function doors_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on doors, use a find and replace
        * to change 'doors' to the name of your theme in all the template files.
        */
    load_theme_textdomain('doors', get_template_directory() . '/languages');

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

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu('header_menu', 'Header');
    register_nav_menu('footer_menu', 'Footer');

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

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'doors_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 50,
            'width' => 100,
            'flex-width' => false,
            'flex-height' => false,
        )
    );

    add_image_size('', 100, 100, true);
}

add_action('after_setup_theme', 'doors_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function doors_content_width()
{
    $GLOBALS['content_width'] = apply_filters('doors_content_width', 640);
}

add_action('after_setup_theme', 'doors_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function doors_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'doors'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'doors'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'doors_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function doors_scripts()
{
    wp_enqueue_style('doors-style', get_stylesheet_uri());

    if(is_page_template('templates/portfolio.php') || is_single()) {
        wp_enqueue_style('baguetteBox-css', get_template_directory_uri() . '/assets/css/baguetteBox.min.css');
        wp_enqueue_script('baguetteBox-js', get_template_directory_uri() . '/assets/js/baguetteBox.min.js', array(), '', true);
    }
    if(is_page_template('templates/contacts.php')) {
        wp_enqueue_script('list-js', get_template_directory_uri() . '/assets/js/list.min.js', array(), '', true);
    }
    if(is_category('catalog')) {
        wp_enqueue_script('mixitup-js', get_template_directory_uri() . '/assets/js/mixitup.min.js', array(), '', true);
    }

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'doors_scripts');



