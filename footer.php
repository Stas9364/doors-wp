<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package doors
 */

?>

<footer id="colophon" class="site-footer">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer_menu',
                        'container' => '',
                        'items_wrap' => '%3$s'
                    ]);
                    ?>

                    <span class="accent-color">&copy; </span>
                    <span><?php echo bloginfo('name'); ?>,</span>
                    <span><?php the_time('Y'); ?></span>
                </div>
            </div>
        </div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
