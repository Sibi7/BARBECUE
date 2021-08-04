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
                            <p class="blackBanner__content__item__wrapper_title">2 Meats</p>
                            <p class="blackBanner__content__item__wrapper_title">3 Sides</p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
              <img class="blackBanner__content__item__img-wrapper__for-price"
                   src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                   alt="meetWrapper">
              <p class="blackBanner__content__item__img-wrapper__price">
                  $16.95
              </p>
          </span>
                    </div>
                    <div class="blackBanner__content__item">
                        <div class="blackBanner__content__item__wrapper">
                            <p class="blackBanner__content__item__wrapper_title">2 Meats</p>
                            <p class="blackBanner__content__item__wrapper_title">3 Sides</p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
              <img class="blackBanner__content__item__img-wrapper__for-price"
                   src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                   alt="meetWrapper">
              <p class="blackBanner__content__item__img-wrapper__price">
                  $19.95
              </p>
          </span>
                    </div>
                </div>
                <p class="blackBanner__description">
                    A $60.00 catering fee includes thermal packaging, disposable cutlery, napkins, serving utensils and
                    sterno. There is an additional charge of $0.50 per mile (round trip) for delivery and setup.
                <h4 class="blackBanner__description-hint">Minimum order of $250.00</h4></p>
                <p class="blackBanner__header-red">ON SITE ** ON SITE ** ON SITE ** ON SITE ** ON SITE **</p>
                <div class="blackBanner__content">
                    <div class="blackBanner__content__item">
                        <div class="blackBanner__content__item__wrapper">
                            <p class="blackBanner__content__item__wrapper_title">2 Meats</p>
                            <p class="blackBanner__content__item__wrapper_title">3 Sides</p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
              <img class="blackBanner__content__item__img-wrapper__for-price"
                   src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                   alt="meetWrapper">
              <p class="blackBanner__content__item__img-wrapper__price">
                  $16.95
              </p>
          </span>
                    </div>
                    <div class="blackBanner__content__item">
                        <div class="blackBanner__content__item__wrapper">
                            <p class="blackBanner__content__item__wrapper_title">2 Meats</p>
                            <p class="blackBanner__content__item__wrapper_title">3 Sides</p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
              <img class="blackBanner__content__item__img-wrapper__for-price"
                   src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                   alt="meetWrapper">
              <p class="blackBanner__content__item__img-wrapper__price">
                  $19.95
              </p>
          </span>
                    </div>
                </div>
                <p class="blackBanner__description">
                    Includes our 10’x10′ custom tent set up, tables and coverings, pro chafer, sterno, cutlery, napkins,
                    rolls and sauces. This is a buffet style set up including a 2 hour service (not including set up and
                    breakdown).
                </p>
            </div>
        </section>


        <!--SECTION CARDS-->

        <section class="cards wow animate__animated animate__fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="cards__title">
                            <h3>These Catering Packages Are Based<br>
                                On <span>A Minimum of 50 Guests</span></h3>
                            <p>Includes our BBQ Trailer. This option is ideal as it opens up your menu to all of our<br>
                                offerings and live cooking. It also comes with the aroma of our smoker. In the
                                unfortunate<br>
                                circumstance of rain, we have you covered there.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="cards__image">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/card_1.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="cards__image">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/card_2.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="cards__image">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/card_3.png" alt="">
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
                                <p>Prime Grade Beef Brisket<br>
                                    – $2 Upcharge
                                </p>
                                <p>Prime Grade House Brined Pastrami<br>
                                    – $2 Upcharge</p>
                            </div>
                            <ul class="cards__meats__list">
                                <li>Pork Shoulder</li>
                                <li>Pork Spare Ribs</li>
                                <li>Pork Belly Burnt Ends</li>
                                <li>Smoked Turkey Breast</li>
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
                                <li>Mac N’ Cheese</li>
                                <li>Slaw</li>
                                <li>BBQ Baked Beans</li>
                                <li>Pasta Salad w/Basil and Fresh<br>
                                    Mozzarella
                                </li>
                                <li>Potato Salad</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="cards__discounts">
                            <div class="cards__discounts-box">Discounts Apply For Events Of 150 Guests Or More. Contact
                                Us
                                Using The Link Below For More Details.
                            </div>
                            <div class="cards__discounts-text">
                                <p><span>*</span>Tax and gratuity not included</p>
                                <p><span>**</span> $150.00 On Site Service Charge</p>
                                <p><span>***</span> $300.00 On Site Service Charge With BBQ Trailer</p>
                                <p>^ Up Charge on meats cooked on site include: Prime Grade NY Strip Steak,<br>
                                    Prime Grade Prime Rib Roast, Salmon Filet, Prime Brisket Cheese Burgers, Hot Dogs
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
                                <p>Prime Grade Beef Brisket</p>
                                <p>$27</p>
                            </div>
                            <div class="menu__list-item">
                                <p>Pork Spare Ribs</p>
                                <p>$20</p>
                            </div>
                            <div class="menu__list-item">
                                <p>Pulled Pork Shoulders</p>
                                <p>$19</p>
                            </div>
                            <div class="menu__list-item">
                                <p>Pork Belly Burnt Ends</p>
                                <p>$209</p>
                            </div>
                            <div class="menu__list-item">
                                <p>Smoked Turkey Breasts<br>(when available)</p>
                                <p>$20</p>
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
                                <p>Texas Brisket w/<br> Pickles and Onions</p>
                                <p>$12</p>
                            </div>
                            <div class="menu__list-item">
                                <p>Carolina Pulled Pork w/<br> Pickles and Onions</p>
                                <p>$10</p>
                            </div>
                            <div class="menu__list-item">
                                <p>Smitty Brisket Cheesesteak</p>
                                <p>$13</p>
                            </div>
                            <div class="menu__list-item">
                                <p>Add any Small Size Side and a Beverage</p>
                                <p>$4</p>
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
                                <p>* Prime Grade Brisket</p>
                                <p>$19</p>
                            </div>
                            <div class="menu__list-item">
                                <p>* Pork Spare Ribs</p>
                                <p>$18</p>
                            </div>
                            <div class="menu__list-item">
                                <p>* Pulled Pork Shoulder</p>
                                <p>$17</p>
                            </div>
                            <div class="menu__list-item">
                   <span>* Includes a Half Pound of Meat and<br>
                     2 Small Sides</span>
                            </div>
                            <div class="menu__list-item">
                                <p>BBQ Sampler Plate</p>
                                <p>$23</p>
                            </div>
                            <div class="menu__list-item">
                   <span>** Includes a Quarter Pound of Each<br>
                     Meat and 2 Small Sides</span>
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
                                <p>Mac N’ Cheese.....</p>
                                <p>8 Oz. $6 / 12 Oz. $9 / 32 Oz. $13</p>
                            </div>
                            <div class="menu__list-item list__item-block">
                                <p>Cole Slaw……</p>
                                <p>8 Oz. $4 / 12 Oz. $6 / 32 Oz. $10</p>
                            </div>
                            <div class="menu__list-item list__item-block">
                                <p>BBQ Baked Beans…..</p>
                                <p>8 Oz. $4 / 12 Oz. $6 / 32 Oz. $10</p>
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
                                <p>Homemade Sweet Tea</p>
                                <p>$2</p>
                            </div>
                            <div class="menu__list-item">
                                <p>Soda</p>
                                <p>$1</p>
                            </div>
                            <div class="menu__list-item">
                                <p>Bottled Water</p>
                                <p>$1</p>
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
                            <h3>Our Family Meal</h3>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/order_6.png" alt="">
                        </div>
                        <div class="pre-orders__text orders__text">
                            <p><span>Includes:</span>
                                One Pound Each<br>
                                of Brisket, Ribs and<br>
                                Pulled Pork
                            </p>

                            <p class="orders__text--2">Includes a 12 Oz.<br>
                                sides of Baked Beans<br>
                                and Slaw, Pickles and Onions</p>

                            <span class="orders__text-sp">$57</span>
                        </div>
                    </div>

                    <div class="pre-orders__card pre-orders__card--2">
                        <h2>FAMILY PACKS</h2>

                        <div class="pre-orders__title">
                            <h3>Our BBQ TRIO</h3>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/order_6.png" alt="">
                        </div>
                        <div class="pre-orders__text orders__text">
                            <p><span>Includes:</span>
                                Two Pound Each<br>
                                of Brisket, Ribs and<br>
                                Pulled Pork
                            </p>

                            <p class="orders__text--2">Includes 32 Ounce<br>
                                Sides of Mac N’ Cheese, Baked<br>
                                Beans and Slaw, Sauce,<br>
                                Pickles and Onions</p>

                            <span class="orders__text-sp">$125</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pre-orders__right">
                <div class="pre-orders__contacts">
                    <h2>Pre-orders</h2>
                    <p class="pre-orders__contacts-text">We are creating something awesome for our<br>
                        customers. In the meantime, please email, or<br>
                        text your BBQ orders to the contacts below.</p>
                    <p class="pre-orders__contacts-patronage">Thank You For Your Patronage!</p>
                    <p class="pre-orders__contacts-info pre-orders__contacts-email">Timsbarbecue1@gmail.com</p>
                    <p class="pre-orders__contacts-info pre-orders__contacts-phone"> 267-549-8150</p>
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
