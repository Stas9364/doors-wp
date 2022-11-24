<?php
/*
 * Template name: Portfolio
 */
get_header();
?>

    <!-- Наши работы -->
    <div class="portfolio" style="background-image: url(<?php echo CFS()->get('portfolio_bg'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gallery">

                        <?php
                        $loop = CFS()->get('portfolio_loop');
                        foreach ($loop as $row) {
                            ?>

                            <a href="<?php echo $row['portfolio_img'] ?>"
                               data-caption="<?php echo $row['portfolio_description'] ?>">
                                <img src="<?php echo $row['portfolio_img'] ?>"
                                     alt="<?php echo $row['portfolio_title'] ?>">
                            </a>

                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();