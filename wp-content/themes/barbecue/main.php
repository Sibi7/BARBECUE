<?php
/*
 Template Name: Главная
 Template Post Type: page
 */

get_header();

?>
    <main>
        <section class="menu">
            <div class="d-flex align-items-end">
                <div class="menu__img">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/image_1.png" alt="">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/image_2.png" alt="">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/image_3.png" alt="">
                </div>
                <a href="#" class="link menu__link">
                    Our menu
                </a>
            </div>
        </section>

        <!--SECTION HISTORY-->

        <section class="history wow animate__animated animate__fadeInUp">
            <div class="container">
                <div class="row">
                    <h2 class="col-12 county__title county__title-history uppercase slash__left-top">
                        <?= get_field('black_title') ?> <br>
                        <span class="county__title-red county__title-bold"><?= get_field('red_title') ?></span>

                    </h2>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="history__left">
                            <h4><?= get_sub_field('grey_title') ?></h4>
                            <?= get_field('history') ?>
                            <button class="history__btn">Read more</button>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="history__right">
                            <div class="history__right-box">
                                <img src="<?= get_field('photo') ?>" alt="">
                                <h3><?= get_field('photo_title') ?></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="history__delicious">
                            <p><?= get_field('delicious') ?></p>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/Polygon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--SECTION GUESTS-->

        <section class="guests wow animate__animated animate__fadeInUp">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="guests__box">
                            <span><?= get_field('title') ?></span>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/Slice_1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--SECTION ONLINE-ORDERS-->


        <section class="online-orders wow animate__animated animate__fadeInUp">
            <div class="container">
                <div class="online-orders__inform">
                    <h2 class="online-orders__title color-red"><?= get_field('contact_title') ?></h2>
                    <p class="online-orders__description"><?= get_field('under_contact_title') ?></p>
                    <ul class="d-flex online-orders__list">
                        <li class="online-orders__item online-orders__item-email"><a class="online-orders__link"
                                                                                     href="#"><?= get_field('email') ?></a>
                        </li>
                        <li class="online-orders__item online-orders__item-whatsapp"><a class="online-orders__link"
                                                                                        href="#"><?= get_field('phone') ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- hueta dima -->
        <!-- <p class="catering__separator uppercase">We Can Serve 40 to 1000 Guests! We Can Serve 40 to 1000 Guests! We Can -->
        <!-- Serve 40 to 1000 Guests!</p> -->
        <section class="container col-12 county county__index-mb">


            <h2 class="county__title uppercase slash__left-top">
                <?= get_field('service_black_title') ?> <br>
                <span class="county__title-red county__title-bold"><?= get_field('service_red_title') ?></span>

            </h2>

            <div class="county__items">
                <div class="county__items__item">
                    <div class="county__items__item__wrapperImg alignment"><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/moped.png" alt=""
                                class="county__items__item_img"></div>
                    <h3 class="county__items__item_title"><?= get_field('title1') ?></h3>
                    <p class="county__items__item_description"><?= get_field('description1') ?></p>
                </div>
                <div class="county__items__item">
                    <div class="county__items__item__wrapperImg"><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/bbq.png" alt=""
                                class="county__items__item_img"></div>
                    <h3 class="county__items__item_title"><?= get_field('title2') ?></h3>
                    <p class="county__items__item_description"><?= get_field('description2') ?></p>
                </div>
                <div class="county__items__item">
                    <div class="county__items__item__wrapperImg"><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/soup.png" alt=""
                                class="county__items__item_img"></div>
                    <h3 class="county__items__item_title"><?= get_field('title3') ?></h3>
                    <p class="county__items__item_description"><?= get_field('description3') ?></p>
                </div>
            </div>

            <button class="county__btn">We cater</button>

        </section>


        <!-- hueta dima black cock -->
        <section class="container__blackBanner blackBanner__index wow animate__animated animate__fadeInUp">
            <div class="container blackBanner">
                <h2 class="blackBanner__title"><?= get_field('catering_options_title') ?></h2>
                <h3 class="blackBanner__subtitle"><?= get_field('catering_options_subtitle') ?></h3>
                <p class="blackBanner__header-red"><?= get_field('redline') ?></p>
                <div class="blackBanner__content">
                    <div class="blackBanner__content__item">
                        <div class="blackBanner__content__item__wrapper">
                            <p class="blackBanner__content__item__wrapper_title"><?= get_field('meats1') ?></p>
                            <p class="blackBanner__content__item__wrapper_title"><?= get_field('sides1') ?></p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
              <img class="blackBanner__content__item__img-wrapper__for-price"
                   src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                   alt="meetWrapper">
              <p class="blackBanner__content__item__img-wrapper__price">
                  <?= get_field('cost1') ?>
              </p>
          </span>
                    </div>
                    <div class="blackBanner__content__item">
                        <div class="blackBanner__content__item__wrapper">
                            <p class="blackBanner__content__item__wrapper_title"><?= get_field('meats2') ?></p>
                            <p class="blackBanner__content__item__wrapper_title"><?= get_field('sides2') ?></p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
              <img class="blackBanner__content__item__img-wrapper__for-price"
                   src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                   alt="meetWrapper">
              <p class="blackBanner__content__item__img-wrapper__price">
                  <?= get_field('cost2') ?>
              </p>
          </span>
                    </div>
                </div>
                <p class="blackBanner__description">
                    <?= get_field('free_package') ?>
                <h4 class="blackBanner__description-hint"><?= get_field('min_order') ?></h4></p>
                <p class="blackBanner__header-red"><?= get_field('redline2') ?></p>
                <div class="blackBanner__content">
                    <div class="blackBanner__content__item">
                        <div class="blackBanner__content__item__wrapper">
                            <p class="blackBanner__content__item__wrapper_title"><?= get_field('meats3') ?></p>
                            <p class="blackBanner__content__item__wrapper_title"><?= get_field('sides3') ?></p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
              <img class="blackBanner__content__item__img-wrapper__for-price"
                   src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                   alt="meetWrapper">
              <p class="blackBanner__content__item__img-wrapper__price">
                  <?= get_field('cost3') ?>
              </p>
          </span>
                    </div>
                    <div class="blackBanner__content__item">
                        <div class="blackBanner__content__item__wrapper">
                            <p class="blackBanner__content__item__wrapper_title"><?= get_field('meats4') ?></p>
                            <p class="blackBanner__content__item__wrapper_title"><?= get_field('sides4') ?></p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
              <img class="blackBanner__content__item__img-wrapper__for-price"
                   src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                   alt="meetWrapper">
              <p class="blackBanner__content__item__img-wrapper__price">
                  <?= get_field('cost4') ?>
              </p>
          </span>
                    </div>
                </div>
                <p class="blackBanner__description">
                    <?= get_field('compaction') ?>
                </p>
            </div>
        </section>


        <!--SECTION CARDS-->

        <section class="cards wow animate__animated animate__fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="cards__title">
                            <h3><?= get_field('card_title_black'); ?><span> <?= get_field('card_title_red'); ?></span></h3>
                            <p><?= get_field('card_description'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="cards__image">
                            <div class="cards__image-box">
                                <div class="cards__image-title">
                                    <h2><?= get_field('card1_title'); ?></h2>
                                </div>

                                <div class="cards__box-img">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cards_image_img.png" alt="meats">
                                    <div class="cards__box-text">
                                        <p><?= get_field('card1_meats'); ?></p>
                                        <p><?= get_field('card1_sides'); ?></p>
                                    </div>
                                </div>

                                <div class="cards__box-price">
                                    <p><?= get_field('card1_price'); ?></p>
                                    <p><?= get_field('card1_guests'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="cards__image">
                            <div class="cards__image-box">
                                <div class="cards__image-title">
                                    <h2><?= get_field('card2_title'); ?></h2>
                                </div>

                                <div class="cards__box-img">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cards_image_img.png" alt="meats">
                                    <div class="cards__box-text">
                                        <p><?= get_field('card2_meats'); ?></p>
                                        <p><?= get_field('card2_sides'); ?></p>
                                    </div>
                                </div>

                                <div class="cards__box-price">
                                    <p><?= get_field('card2_price'); ?></p>
                                    <p><?= get_field('card2_guests'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="cards__image">
                            <div class="cards__image-box">
                                <div class="cards__image-title">
                                    <h2><?= get_field('card3_title'); ?></h2>
                                </div>

                                <div class="cards__box-img">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cards_image_img.png" alt="meats">
                                    <div class="cards__box-text">
                                        <p><?= get_field('card3_meats'); ?></p>
                                        <p><?= get_field('card3_sides'); ?></p>
                                    </div>
                                </div>

                                <div class="cards__box-price">
                                    <p><?= get_field('card3_price'); ?></p>
                                    <p><?= get_field('card3_guests'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 d-flex justify-content-end">
                        <div class="cards__meats">
                            <div class="cards__meats__box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/meat.png" alt="">
                                <h4>MEATS</h4>
                            </div>
                            <div class="cards__meats__text">
                                <p><?= get_field('upcharge1'); ?></p>
                                <p><?= get_field('upcharge2'); ?></p>
                            </div>
                            <ul class="cards__meats__list">
                                <?= get_field('meats_red_list'); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <div class="cards__sides">
                            <div class="cards__sides-box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/tray.png" alt="">
                                <h4>SIDES</h4>
                            </div>
                            <ul class="cards__sides-list">
                                <?= get_field('sides_red_list'); ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="cards__discounts">
                            <div class="cards__discounts-box"><?= get_field('black_discount'); ?></div>
                            <div class="cards__discounts-text">
                                <p><span>*</span><?= get_field('star1'); ?></p>
                                <p><span>**</span><?= get_field('star2'); ?></p>
                                <p><span>***</span> <?= get_field('star3'); ?></p>
                                <p>^ <?= get_field('up_charge'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--SECTION ORDERS-->

        <section class="orders wow animate__animated animate__fadeInUp">
            <div class="orders__title">
                <h2>OUR BARBECUE TRAILER MENU</h2>
                <p>Chef's selection </p>
            </div>

            <div class="orders__list">
                <div class="orders__list-item">
                    <div class="orders__list-title title--1">
                        <h3>Meats By The Pound</h3>

                    </div>
                    <div class="orders__list-menu menu__list">
                        <div class="menu__list-img">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/order_1.png" alt="">
                        </div>
                        <div class="menu__list-box">
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_meats_name1'); ?></p>
                                <p><?= get_field('trailer_menu_meats_price1'); ?></p>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_meats_name2'); ?></p>
                                <p><?= get_field('trailer_menu_meats_price2'); ?></p>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_meats_name3'); ?></p>
                                <p><?= get_field('trailer_menu_meats_price3'); ?></p>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_meats_name4'); ?></p>
                                <p><?= get_field('trailer_menu_meats_price4'); ?></p>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_meats_name5'); ?></p>
                                <p><?= get_field('trailer_menu_meats_price5'); ?></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="orders__list-item">
                    <div class="orders__list-title title--2">
                        <h3>Sandwiches w/Chips</h3>

                    </div>
                    <div class="orders__list-menu menu__list">
                        <div class="menu__list-img">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/order_2.png" alt="">
                        </div>
                        <div class="menu__list-box">
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_sandwiches_name1'); ?></p>
                                <p><?= get_field('trailer_menu_sandwiches_price1'); ?></p>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_sandwiches_name2'); ?></p>
                                <p><?= get_field('trailer_menu_sandwiches_price2'); ?></p>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_sandwiches_name3'); ?></p>
                                <p><?= get_field('trailer_menu_sandwiches_price3'); ?></p>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_sandwiches_name4'); ?></p>
                                <p><?= get_field('trailer_menu_sandwiches_price4'); ?></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="orders__list-item">
                    <div class="orders__list-title title--3">
                        <h3>Plates w/ 2 Small Sides</h3>
                    </div>

                    <div class="orders__list-menu menu__list menu__list--3">
                        <div class="menu__list-img">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/order_3.png" alt="">
                        </div>
                        <div class="menu__list-box">
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_plates_name1'); ?></p>
                                <p><?= get_field('trailer_menu_plates_price1'); ?></p>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_plates_name2'); ?></p>
                                <p><?= get_field('trailer_menu_plates_price2'); ?></p>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_plates_name3'); ?></p>
                                <p><?= get_field('trailer_menu_plates_price3'); ?></p>
                            </div>
                            <div class="menu__list-item">
                   <span><?= get_field('include1'); ?></span>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_plates_name4'); ?></p>
                                <p><?= get_field('trailer_menu_plates_price4'); ?></p>
                            </div>
                            <div class="menu__list-item">
                   <span><?= get_field('include2'); ?></span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="orders__list-item">
                    <div class="orders__list-title title--4">
                        <h3>Sides</h3>

                    </div>
                    <div class="orders__list-menu menu__list list--4">
                        <div class="menu__list-img">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/order_4.png" alt="">
                        </div>
                        <div class="menu__list-box">
                            <div class="menu__list-item list__item-block">
                                <p><?= get_field('trailer_menu_sides_name1'); ?></p>
                                <p><?= get_field('trailer_menu_sides_price1'); ?></p>
                            </div>
                            <div class="menu__list-item list__item-block">
                                <p><?= get_field('trailer_menu_sides_name2'); ?></p>
                                <p><?= get_field('trailer_menu_sides_price2'); ?></p>
                            </div>
                            <div class="menu__list-item list__item-block">
                                <p><?= get_field('trailer_menu_sides_name3'); ?></p>
                                <p><?= get_field('trailer_menu_sides_price3'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="orders__list-item list__item-empty" style="width: 400px;"></div>

                <div class="orders__list-item">
                    <div class="orders__list-title title--5">
                        <h3>Beverages</h3>

                    </div>
                    <div class="orders__list-menu menu__list menu__list--5">
                        <div class="menu__list-img">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/order_5.png" alt="">
                        </div>
                        <div class="menu__list-box">
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_beverages_name1'); ?></p>
                                <p><?= get_field('trailer_menu_beverages_price1'); ?></p>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_beverages_name2'); ?></p>
                                <p><?= get_field('trailer_menu_beverages_price2'); ?></p>
                            </div>
                            <div class="menu__list-item">
                                <p><?= get_field('trailer_menu_beverages_name3'); ?></p>
                                <p><?= get_field('trailer_menu_beverages_price3'); ?></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!--SECTION PRE-ORDERS-->

        <section class="pre-orders">
            <div class="pre-orders__left">
                <div class="pre-orders__cards">
                    <div class="pre-orders__card pre-orders__card--1">
                        <h2>FAMILY PACKS</h2>

                        <div class="pre-orders__title">
                            <h3><?= get_field('pack_title1'); ?></h3>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/order_6.png" alt="">
                        </div>
                        <div class="pre-orders__text orders__text">
                            <p><span>Includes:</span>
                                <?= get_field('pack_meats_includes1'); ?>
                            </p>

                            <p class="orders__text--2"><?= get_field('pack_sides_includes1'); ?></p>

                            <span class="orders__text-sp"><?= get_field('pack_price1'); ?></span>
                        </div>
                    </div>

                    <div class="pre-orders__card pre-orders__card--2">
                        <h2>FAMILY PACKS</h2>

                        <div class="pre-orders__title">
                            <h3><?= get_field('pack_title2'); ?></h3>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/order_6.png" alt="">
                        </div>
                        <div class="pre-orders__text orders__text">
                            <p><span>Includes:</span>
                                <?= get_field('pack_meats_includes2'); ?>
                            </p>

                            <p class="orders__text--2"><?= get_field('pack_sides_includes2'); ?></p>

                            <span class="orders__text-sp"><?= get_field('pack_price2'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pre-orders__right">
                <div class="pre-orders__contacts">
                    <h2>Pre-orders</h2>
                    <p class="pre-orders__contacts-text"><?= get_field('pre_order_description'); ?></p>
                    <p class="pre-orders__contacts-patronage"><?= get_field('pre_order_thanks'); ?></p>
                    <p class="pre-orders__contacts-info pre-orders__contacts-email"><?= get_field('email'); ?></p>
                    <p class="pre-orders__contacts-info pre-orders__contacts-phone"><?= get_field('phone'); ?></p>
                    <button class="pre-orders__contacts-btn">Find us</button>
                </div>
                <div class="pre-orders__right-img"></div>

            </div>
        </section>

        <!--SECTION SLIDER-->

        <div class="slider wow animate__animated animate__fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-1 slider__empty"></div>
                    <div class="col-11">
                        <div class="d-flex flex-column align-items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/Rectangle_small.png" alt="">
                            <h2 class="slider__title">WHAT OUR <br><span>CUSTOMERS SAY</span></h2>
                        </div>
                        <div class="swiper-container mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/slider_woman.png"
                                         alt="">
                                    <div class="swiper-slide__box">
                                        <h3>Alex alex</h3>
                                        <p>Excellent! Huge
                                            portions and meat
                                            was melt in your mouth!
                                            Thank you!
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/slider_woman.png"
                                         alt="">
                                    <div class="swiper-slide__box">
                                        <h3>Alex alex</h3>
                                        <p>Excellent! Huge
                                            portions and meat
                                            was melt in your mouth!
                                            Thank you!
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/slider_woman.png"
                                         alt="">
                                    <div class="swiper-slide__box">
                                        <h3>Alex alex</h3>
                                        <p>Excellent! Huge
                                            portions and meat
                                            was melt in your mouth!
                                            Thank you!
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/slider_woman.png"
                                         alt="">
                                    <div class="swiper-slide__box">
                                        <h3>Alex alex</h3>
                                        <p>Excellent! Huge
                                            portions and meat
                                            was melt in your mouth!
                                            Thank you!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();
