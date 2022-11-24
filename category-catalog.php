<?php
get_header();

$settings = get_posts([
    'post_type' => 'post',
    'numberposts' => 1,
    'category_name' => 'settings',
]);
foreach ($settings as $post) {
    setup_postdata($post);
    ?>
    <div class="popular" style="background-image: url(<?php echo CFS()->get('settings_bg') ?>)">
    <?php
}
wp_reset_postdata();
?>

    <div class="container">
        <div class="row popular-title">
            <h2><?php single_cat_title(); ?></h2>
        </div>
        <div class="category-controll text-center">
            <button class="btn" type="button" data-filter="all">Все</button>
            <button class="btn" type="button"
                    data-filter=".<?php echo get_category(17, ARRAY_A)['slug']; ?>"><?php echo get_category(17, ARRAY_A)['name']; ?></button>
            <button class="btn" type="button"
                    data-filter=".<?php echo get_category(18, ARRAY_A)['slug']; ?>"><?php echo get_category(18, ARRAY_A)['name']; ?></button>
            <button class="btn" type="button"
                    data-filter=".<?php echo get_category(19, ARRAY_A)['slug'] ?>"><?php echo get_category(19, ARRAY_A)['name']; ?>
            </button>
            <button class="btn" type="button" data-sort="order:asc">По возрастанию</button>
            <button class="btn" type="button" data-sort="order:descending">По убыванию</button>
        </div>
        <div class="row popular-goods catalog">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    $all_category = get_the_category();
                    $res_name = '';
                    foreach ($all_category as $category) {
                        if ($category->term_id === 17 || $category->term_id === 18 || $category->term_id === 19) {
                            $res_name = $category->slug;
                        }
                    }
                    ?>

                    <div class="col-3 col-lg-6 col-sm-12 product mix <?php echo $res_name; ?>"
                         data-order="<?php echo CFS()->get('price'); ?>">
                        <?php the_post_thumbnail(); ?>
                        <h3><?php the_title(); ?></h3>
                        <div><?php echo CFS()->get('price'); ?></div>
                        <a href="<?php the_permalink(); ?>" class="btn"><?php echo CFS()->get('btn_more'); ?></a>
                    </div>

                <?php }
            } ?>
        </div>
        <?php the_posts_pagination(); ?>
    </div>
    </div>

<?php
get_footer();
