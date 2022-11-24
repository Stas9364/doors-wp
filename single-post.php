<?php
get_header();
?>

    <!-- Страница одной двери -->
    <div class="door-template">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-12">
                    <div class="door-gallery">

                        <?php
                        $loop = CFS()->get('gallery');
                        foreach ($loop as $row) {
                            ?>

                            <a href="<?php echo $row['img'] ?>"
                               data-caption="<?php echo $row['gallery_description'] ?>">
                                <img src="<?php echo $row['img'] ?>"
                                     alt="<?php echo $row['gallery_title_img'] ?>">
                            </a>

                            <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="col-6 col-lg-12 door-description">
                    <h2><?php the_title(); ?> </h2>
                    <!-- <h2>Название <span>Под заказ</span></h2> -->
                    <p><?php the_content(); ?></p>

                    <?php if (CFS()->get('is_available')) { ?>
                        <h3><?php echo CFS()->get('price'); ?></h3>
                    <?php } else {
                        echo CFS()->get('not_available');
                    } ?>

                    <?php echo do_shortcode(CFS()->get('door_form_shortcode')); ?>

                    <table>
                        <caption><?php echo CFS()->get('specifications_title'); ?></caption>

                        <?php
                        $loop_s = CFS()->get('specifications_loop');
                        foreach ($loop_s as $row) {
                            ?>

                            <tr>
                                <td><?php echo $row['parameter'] ?></td>
                                <td><?php echo $row['value'] ?></td>
                            </tr>

                            <?php
                        }
                        ?>

                    </table>
                    <a class="btn" href=""><?php echo CFS()->get('information_title'); ?></a>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();

