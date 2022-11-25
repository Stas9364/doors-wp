<?php
/*
Template name: Main page
 */

get_header();

$my_posts = get_posts( array(
    'numberposts' => -1,
    'category'    => 20,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'post',
) );
?>

    <div class="header" style="background-image: url(<?php echo CFS()->get('main_page_bg_img'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-12">
                    <div class="header-inner">

                        <?php
                        $loop = CFS()->get('section_loop');
                        foreach ($loop

                        as $row => $label) {
                        ?>

                        <div class="<?php echo $label['class_name_section']; ?>">
                            <h2><?php echo $label['title_section']; ?></h2>
                            <div class="doors">

                                <?php
                                foreach ($label['elements_loop'] as $el) {
                                    ?>

                                    <div class="door">
                                        <div class="name"
                                             style="background-image: url(<?php echo $el['el_img']; ?>)"><?php echo $el['el_title']; ?>
                                        </div>
                                    </div>

                                <?php } ?>

                            </div>
                            <a class="btn"
                               href="/<?php echo $label['link_path']; ?>"><?php echo $label['btn_section_title']; ?>
                            </a>

                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Преимущества  -->
<?php get_header('advantages'); ?>

    <!-- О нас -->
    <div class="about" style="background-image: url(<?php echo CFS()->get('about_us_bg'); ?>)">
        <div class="container">
            <div class="row about-inner">
                <div class="col-6 col-lg-12">
                    <h2><?php echo CFS()->get('about_us_title'); ?></h2>
                    <p><?php echo CFS()->get('about_us_description'); ?></p>
                </div>
                <div class="col-6 col-lg-12 text-center">
                    <a href="/<?php echo CFS()->get('about_us_link'); ?>"
                       class="btn"><?php echo CFS()->get('about_us_btn_title'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Популярные товары -->
    <div class="popular" style="background-image: url(<?php echo CFS()->get('advantages_bg_2'); ?>)">
        <div class="container">
            <div class="row popular-title">
                <h2><?php echo CFS()->get('popular_goods_title'); ?></h2>
            </div>
            <div class="row popular-goods">

                <?php
                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>

                    <div class="col-3 col-lg-6 col-sm-12 product">
                        <?php the_post_thumbnail(); ?>
                        <h3><?php the_title(); ?></h3>
                        <div><?php echo CFS()->get('price'); ?></div>
                        <a href="<?php the_permalink(); ?>" class="btn">
                            <?php echo CFS()->get('btn_more'); ?>
                        </a>
                    </div>

                <?php }
                wp_reset_postdata();
                ?>

            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="/<?php echo CFS()->get('about_us_link'); ?>"
                       class="btn"><?php echo CFS()->get('about_us_btn_title'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Форма обратной связи -->
    <div class="contacts" style="background-image: url(<?php echo CFS()->get('call_order_section_bg'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-4 col-lg-12 contacts-item">
                    <h3><?php echo CFS()->get('call_order_section_title'); ?></h3>
                    <p><?php echo CFS()->get('call_order_section_description'); ?></p>
                    <?php echo do_shortcode(CFS()->get('call_order_form')); ?>
                </div>

                <?php
                $loop_order = CFS()->get('call_order_section_characteristics');
                foreach ($loop_order as $item) {
                    ?>

                    <div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
                        <img src="<?php echo $item['characteristic_img']; ?>" alt="Подробно">
                        <h3><?php echo $item['characteristic_title']; ?></h3>
                        <p><?php echo $item['characteristic_description']; ?></p>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>

<?php
get_footer();
