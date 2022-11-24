<?php

$posts = get_posts([
    'numberposts' => -1,
    'category_name' => 'advantages',
    'orderby' => 'title',
    'post_type' => 'post'
]);
?>

<!-- Преимущества  -->
<div class="advantages" style="background-image: url(<?php echo CFS()->get('advantages_bg_1'); ?>)">
    <div class="container">
        <h2><?php echo get_category(7, ARRAY_A)['name']; ?></h2>
    </div>
</div>
<div class="advantages-cards" style="background-image: url(<?php echo CFS()->get('advantages_bg_2'); ?>)">
    <div class="container">
        <div class="row advantages-cards-inner">

            <?php
            foreach ($posts as $post) {
                setup_postdata($post);
                ?>

                <div class="col-4 col-lg-6 col-sm-12 advantages-card">
                    <?php the_post_thumbnail('adv_thumbnail'); ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div>

                <?php
            }
            wp_reset_postdata();
            ?>

        </div>
    </div>
</div>
