<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package doors
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (is_404()) {
            echo 'Ошибка 404';
        } elseif (is_category('catalog')) {
            echo single_cat_title();
        } else {
            the_title();
        }
        ?>
    </title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="menu">
    <div class="container">
        <div class="row">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <?php the_custom_logo(); ?>
                </a>
            </div>

            <?php
            wp_nav_menu([
                'theme_location' => 'header_menu',
                'container' => '',
                'menu_class' => '',
                'menu_id' => ''
            ]);
            ?>

            <?php
            $settings = get_posts([
                'post_type' => 'post',
                'numberposts' => 1,
                'category_name' => 'settings',
            ]);
            foreach ($settings as $post) {
                setup_postdata($post);
                ?>

                <div class="phone">
                    <a href="<?php echo CFS()->get('phone_number_s') ?>">&#9742; <?php echo CFS()->get('phone_number'); ?></a>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>

        </div>
    </div>
</div>
