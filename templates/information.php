<?php
/*
 *Template name: Information
 */

get_header();

$categories = get_categories([
    'type' => 'post',
    'parent' => 9,
    'orderby' => 'term_id',
    'order' => 'ASC',
    'numberposts' => -1
]);
?>

    <!-- Полезная информация -->
    <div class="information_page">
        <div class="container">
            <?php foreach ($categories as $cat) { ?>

                <div class="row information_title">
                    <div class="col-12">
                        <h2><?php echo $cat->name; ?></h2>
                    </div>
                </div>
                <div class="row information_grid">

                    <?php
                    $posts = get_posts([
                        'category' => $cat->cat_ID,
                        'order' => 'ASC',
                        'numberposts' => -1,
                    ]);
                    foreach ($posts as $post) {
                        setup_postdata($post);
                        ?>

                        <div class="col-3 col-lg-6 col-sm-12">
                            <?php the_post_thumbnail(); ?>
                            <h3><?php the_title(); ?></h3>
                        </div>

                    <?php }
                    wp_reset_postdata(); ?>

                </div>
            <?php } ?>

        </div>
    </div>

<?php
get_footer();
