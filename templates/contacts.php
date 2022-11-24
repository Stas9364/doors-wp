<?php
/*
 Template name: Contacts
 */
get_header();
?>

    <!-- Контакты -->
    <div class="our-contacts">
    <div class="container">
        <div class="row">
            <div class="col-9 col-lg-12">
                <?php
                $loop = CFS()->get('branch_offices');
                foreach ($loop as $item) {
                    ?>

                    <div class="contacts-block">
                        <h2><?php echo $item['city']; ?></h2>
                        <div class="contacts-inner">
                            <div class="contacts-card">
                                <img src="<?php echo CFS()->get('write_img'); ?>" alt="пишите">
                                <h3><?php echo CFS()->get('write'); ?></h3>
                                <p><?php echo $item['email']; ?></p>
                            </div>
                            <div class="contacts-card">
                                <img src="<?php echo CFS()->get('call_img'); ?>" alt="звоните">
                                <h3><?php echo CFS()->get('call'); ?></h3>
                                <p><?php echo $item['phone_number']; ?></p>
                            </div>
                            <div class="contacts-card">
                                <img src="<?php echo CFS()->get('come_img'); ?>" alt="приезжайте">
                                <h3><?php echo CFS()->get('come'); ?></h3>
                                <p><?php echo $item['address']; ?></p>
                            </div>
                        </div>

                        <?php echo $item['map']; ?>
                    </div>

                <?php } ?>

            </div>

            <div class="col-3 col-lg-12" id="cities">
                <h2><?php echo CFS()->get('dealers_title'); ?></h2>
                <input type="text" class="search" placeholder="Поиск">
                <ul class="list">

                    <?php
                    $loop = CFS()->get('dealers_loop');
                    foreach ($loop as $row) {
                        ?>

                        <li><p class="city"><?php echo $row['dealers_address']; ?></p></li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>


<?php
get_footer();
