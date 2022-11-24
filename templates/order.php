<?php
/*
 * Template name: Order
 */
get_header();

$posts = get_posts([
    'post_type' => 'post',
    'numberposts' => -1,
    'category_name' => 'order',
    'orderby' => 'date',
    'order' => 'ASC'
]);
?>

    <!-- На заказ -->
    <div class="to-order">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- На заказ -->

                    <?php
                    foreach ($posts as $post) {
                        setup_postdata($post);
                        ?>

                        <div class="to-order-card">
                            <h2><?php the_title(); ?></h2>
                            <div class="to-order-card-inner">
                                <?php the_post_thumbnail(''); ?>
                                <div class="to-order-text">
                                    <?php the_content(); ?>
                                    <p><?php echo CFS()->get('order_information'); ?></p>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    wp_reset_postdata();
                    ?>

                    <!-- Форма -->
                    <div class="to-order-form">
                        <h3><?php echo CFS()->get('order_form_title'); ?></h3>
                       <?php echo do_shortcode( CFS()->get('order_form_shortcode') ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();