<?php
/*
 Template name: About company
 */

get_header();
?>

    <!-- О компании -->
    <div class="about-company" style="background-image: url(<?php echo CFS()->get('about_bg'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="<?php echo CFS()->get('about_img'); ?>" alt="О компании">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Преимущества  -->
<?php get_header('advantages'); ?>

    <!-- Технический паспорт -->
    <div class="pasport" style="background-image: url(<?php echo CFS()->get('technical_passport_bg'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><?php echo CFS()->get('title_technical_passport'); ?></h2>
                    <p><?php echo CFS()->get('description_technical_passport'); ?></p>
                    <a href="<?php echo CFS()->get('pdf_file'); ?>" class="btn"
                       target="_blank"><?php echo CFS()->get('btn_open'); ?></a>
                    <a href="<?php echo CFS()->get('doc_file'); ?>" class="btn"
                       download=""><?php echo CFS()->get('btn_download'); ?></a>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();