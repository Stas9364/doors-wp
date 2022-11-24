<?php
/*
Template name: Main page
 */

get_header();
?>

    <div class="header" style="background-image: url(img/header.png)">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-12">
                    <div class="header-inner">
                        <div class="header-catalog">
                            <h2>Каталог</h2>
                            <div class="doors">
                                <div class="door">
                                    <div class="name" style="background-image: url(img/door1.jpg)">Модели глухие</div>
                                </div>
                                <div class="door">
                                    <div class="name" style="background-image: url(img/door2.jpg)">Модели со стеклом</div>
                                </div>
                                <div class="door">
                                    <div class="name" style="background-image: url(img/door3.jpg)">Увеличенного формата</div>
                                </div>
                            </div>
                            <a class="btn" href="catalog.html">Смотреть</a>
                        </div>
                        <div class="header-order">
                            <h2>На заказ</h2>
                            <div class="doors">
                                <div class="door">
                                    <div class="name" style="background-image: url(img/door1.png)">Ворота</div>
                                </div>
                                <div class="door">
                                    <div class="name" style="background-image: url(img/door2.png)">Заборы и ограждения</div>
                                </div>
                                <div class="door">
                                    <div class="name" style="background-image: url(img/door3.png)">Навесы</div>
                                </div>
                            </div>
                            <a class="btn" href="order.html">Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Преимущества  -->
<?php get_header('advantages'); ?>

    <!-- О нас -->
    <div class="about" style="background-image: url(img/bg-about.jpg)">
        <div class="container">
            <div class="row about-inner">
                <div class="col-6 col-lg-12">
                    <h2>ZHOVNER – ЭТО ВЫСОКОКАЧЕСТВЕННЫЙ ПРОДУКТ, <span>ПРОИЗВОДЯЩИЙСЯ В РОССИИ.</span></h2>
                    <p>Двери ZHOVNER избавят вас от тревоги за сохранность Вашей собственности. Залог качества и надежности - отечественное производство. Наше предприятие находится в городе Крымск Краснодарского края.</p>
                </div>
                <div class="col-6 col-lg-12 text-center">
                    <a href="catalog.html" class="btn">Перейти в каталог</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Популярные товары -->
    <div class="popular" style="background-image: url(img/background.jpg)">
        <div class="container">
            <div class="row popular-title">
                <h2>ПОПУЛЯРНЫЕ ТОВАРЫ</h2>
            </div>
            <div class="row popular-goods">
                <div class="col-3 col-lg-6 col-sm-12 product">
                    <img src="img/сatalog/door_anglia.png" alt="Название">
                    <h3>Название</h3>
                    <div>45000 &#8381;</div>
                    <a href="door.html" class="btn">Подробнее</a>
                </div>
                <div class="col-3 col-lg-6 col-sm-12 product">
                    <img src="img/сatalog/door_anglia.png" alt="Название">
                    <h3>Название</h3>
                    <div>45000 &#8381;</div>
                    <a href="door.html" class="btn">Подробнее</a>
                </div>
                <div class="col-3 col-lg-6 col-sm-12 product">
                    <img src="img/сatalog/door_anglia.png" alt="Название">
                    <h3>Название</h3>
                    <div>45000 &#8381;</div>
                    <a href="door.html" class="btn">Подробнее</a>
                </div>
                <div class="col-3 col-lg-6 col-sm-12 product">
                    <img src="img/сatalog/door_anglia.png" alt="Название">
                    <h3>Название</h3>
                    <div>45000 &#8381;</div>
                    <a href="door.html" class="btn">Подробнее</a>
                </div>
                <div class="col-3 col-lg-6 col-sm-12 product">
                    <img src="img/сatalog/door_anglia.png" alt="Название">
                    <h3>Название</h3>
                    <div>45000 &#8381;</div>
                    <a href="door.html" class="btn">Подробнее</a>
                </div>
                <div class="col-3 col-lg-6 col-sm-12 product">
                    <img src="img/сatalog/door_anglia.png" alt="Название">
                    <h3>Название</h3>
                    <div>45000 &#8381;</div>
                    <a href="door.html" class="btn">Подробнее</a>
                </div>
                <div class="col-3 col-lg-6 col-sm-12 product">
                    <img src="img/сatalog/door_anglia.png" alt="Название">
                    <h3>Название</h3>
                    <div>45000 &#8381;</div>
                    <a href="door.html" class="btn">Подробнее</a>
                </div>
                <div class="col-3 col-lg-6 col-sm-12 product">
                    <img src="img/сatalog/door_anglia.png" alt="Название">
                    <h3>Название</h3>
                    <div>45000 &#8381;</div>
                    <a href="door.html" class="btn">Подробнее</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="catalog.html" class="btn">Перейти в каталог</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Форма обратной связи -->
    <div class="contacts" style="background-image: url(img/bg-contacts.png)">
        <div class="container">
            <div class="row">
                <div class="col-4 col-lg-12 contacts-item">
                    <h3>Закажите звонок специалиста</h3>
                    <p>Вы можете заказать звонок нашего специалиста в удобное для Вас время.</p>
                    <form action="">
                        <input type="text" placeholder="Имя">
                        <input type="text" placeholder="Телефон">
                        <input type="text" placeholder="Когда позвонить?">
                        <button class="btn">Заказать звонок</button>
                    </form>
                </div>
                <div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
                    <img src="img/icons/tag.png" alt="Подробно">
                    <h3>Подробно</h3>
                    <p>Наши специалисты помогут Вам в выборе нужной двери.</p>
                </div>
                <div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
                    <img src="img/icons/clock.png" alt="Быстро">
                    <h3>Быстро</h3>
                    <p>Мы стараемся максимально быстро ответить на Ваш запрос.</p>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
