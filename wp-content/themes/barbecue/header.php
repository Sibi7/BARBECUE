<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */

/**
 * Вывод настроек темы
 *
 * @link http://manual.unyson.io/en/latest/helpers/php.html#database
 */
// fw_get_db_customizer_option($option_id, $default_value = null);

/**
 * Вывод меню
 *
 * @link https://wp-kama.ru/function/wp_nav_menu
 */
// wp_nav_menu([
//  'theme_location' => 'primary
//]);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700&display=swap" rel="stylesheet">
    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
<?php wp_head(); ?>
</head>


<header class="header">
    <div class="container media768px_width">
        <div class="row">
            <div class="d-flex justify-content-between justify-content-lg-start mb-6">
                <a href="/" class="header__logo header__logo--main">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/TimsBBQ_White.png" alt="Tim's Barbecue">
                </a>
                <nav class="d-flex align-self-center h-ml-5 site-navbar">
                    <ul class="d-flex header__list">
                        <li class="header__item"><a href="/" class="header__item-link">home</a></li>
                        <li class="header__item"><a href="./about_us.html" class="header__item-link">about us</a></li>
                        <li class="header__item"><a href="./orders.html" class="header__item-link">reviews</a></li>
                        <li class="header__item"><a href="./catering.html" class="header__item-link">catering</a></li>
                        <li class="header__item"><a href="./find_us.html" class="header__item-link">find us</a></li>
                        <li class="header__item"><a href="./products.html" class="header__item-link">contact</a></li>
                    </ul>

                    <!-- nav-toggler for mobile version only -->
                    <button class="nav-toggler hover">
                        <span></span>
                    </button>
                </nav>
            </div>
            <h1 class="header__title">TIM's BARBECUE</h1>
        </div>
    </div>
    <div class="container-fluid header__inform">
        <div class="header__rectangle header__rectangle-main">
            <h2 class="header__rectangle-title header__rectangle-title-main slash slash-main">We Take Great Pride in
                Providing Only The Best Meats Available</h2>
            <p class="header__rectangle-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, s
                ed do eiusmod tempor incididunt ut labore et dolore ma
                gna aliqua. Ut enim ad minim veniam, qu</p>
        </div>
    </div>
</header>
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
                    Great barbecue and catering <br>
                    <span class="county__title-red county__title-bold">in bucks county</span>

                </h2>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="history__left">
                        <h4>Our History</h4>
                        <p>At Tim’s Barbecue, We Take Great Pride In Providing Only The Best Meats Available.</p>
                        <p> Prime Grade Angus meats include our slow-smoked, melt-in-your-mouth Texas Style Brisket, NY
                            Strip, Prime Rib Roast and our Premium Pork Products. Tim’s Barbecue brings you the best of
                            Texas style “Craft Barbecue.” Chef/Owner, Tim Smith describes Craft Barbecue as follows:
                            “The meat is slow smoked for many hours with real wood on our custom built smoker. No
                            shortcuts are taken here, offering the best top quality Angus beef and pork products.”</p>
                        <button class="history__btn">Read more</button>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="history__right">
                        <div class="history__right-box">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/history_image.png" alt="">
                            <h3>Our new mobile kitchen <br>
                                is ready for your next event.</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="history__delicious">
                        <p>We strive to make your special event just that…SPECIAL.<br>
                            Our friendly staff does a wonderful job from start to finish<br>
                            to bring you and your guests a pleasant experience and,<br>
                            of course, <span>DELICIOUS food!</span></p>
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
                        <span>We Can Serve 40 to 1000 Guests!     We Can Serve 40 to 1000 Guests!   We Can Serve 40 to 1000 Guests!</span>
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
                <h2 class="online-orders__title color-red">We are creating something
                    awesome for our customers.</h2>
                <p class="online-orders__description">In the meantime, please email, or text your BBQ orders to the contacts below.</p>
                <ul class="d-flex online-orders__list">
                    <li class="online-orders__item online-orders__item-email"><a class="online-orders__link" href="#">Timsbarbecue1@gmail.com</a></li>
                    <li class="online-orders__item online-orders__item-whatsapp"><a class="online-orders__link" href="#">267-549-8150</a></li>
                </ul>
            </div>
        </div>
    </section>


    <!-- hueta dima -->
    <!-- <p class="catering__separator uppercase">We Can Serve 40 to 1000 Guests! We Can Serve 40 to 1000 Guests! We Can -->
    <!-- Serve 40 to 1000 Guests!</p> -->
    <section class="container col-12 county county__index-mb">




        <h2 class="county__title uppercase slash__left-top">
            Great barbecue and catering <br>
            <span class="county__title-red county__title-bold">in bucks county</span>

        </h2>

        <div class="county__items">
            <div class="county__items__item"><div class="county__items__item__wrapperImg alignment"><img src="<?php bloginfo('template_directory'); ?>/assets/img/moped.png" alt="" class="county__items__item_img"></div>
                <h3 class="county__items__item_title">FOOD DROP OFF</h3>
                <p class="county__items__item_description">For catering orders, we can bring our delicious barbecue to
                    you. You can also pick up our barbecue, or use our delivery service that covers a 5 mile radius.</p>
            </div>
            <div class="county__items__item"><div class="county__items__item__wrapperImg"><img src="<?php bloginfo('template_directory'); ?>/assets/img/bbq.png" alt="" class="county__items__item_img"></div>
                <h3 class="county__items__item_title">FULL SERVICE CATERING</h3>
                <p class="county__items__item_description">To get the FULL Tim’s Barbecue experience in your home,
                    backyard, corporate setting, or anywhere else, let us come and do all the work.</p>
            </div>
            <div class="county__items__item"><div class="county__items__item__wrapperImg"><img src="<?php bloginfo('template_directory'); ?>/assets/img/soup.png" alt="" class="county__items__item_img"></div>
                <h3 class="county__items__item_title">ONSITE COOKING</h3>
                <p class="county__items__item_description">For catering orders, we can bring our delicious barbecue to
                    you. You can also pick up our barbecue, or use our delivery service that covers a 5 mile radius.</p>
            </div>
        </div>

        <button class="county__btn">We cater</button>

    </section>



    <!-- hueta dima black cock -->
    <section class="container__blackBanner blackBanner__index wow animate__animated animate__fadeInUp">
        <div class="container blackBanner">
            <h2 class="blackBanner__title">OUR CATERING OPTIONS</h2>
            <h3 class="blackBanner__subtitle">Сustomize your perfect menu </h3>
            <p class="blackBanner__header-red">ON SITE ** ON SITE ** ON SITE ** ON SITE ** ON SITE **</p>
            <div class="blackBanner__content">
                <div class="blackBanner__content__item">
                    <div class="blackBanner__content__item__wrapper">
                        <p class="blackBanner__content__item__wrapper_title">2 Meats</p>
                        <p class="blackBanner__content__item__wrapper_title">3 Sides</p>
                    </div>
                    <span class="blackBanner__content__item__img-wrapper">
              <img class="blackBanner__content__item__img-wrapper__for-price" src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
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
              <img class="blackBanner__content__item__img-wrapper__for-price" src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
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
              <img class="blackBanner__content__item__img-wrapper__for-price" src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
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
              <img class="blackBanner__content__item__img-wrapper__for-price" src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                   alt="meetWrapper">
              <p class="blackBanner__content__item__img-wrapper__price">
                  $19.95
              </p>
          </span>
                </div>
            </div>
            <p class="blackBanner__description">
                Includes our 10’x10′ custom tent set up, tables and coverings, pro chafer, sterno, cutlery, napkins, rolls and sauces. This is a buffet style set up including a 2 hour service (not including set up and breakdown).
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
                            offerings and live cooking. It also comes with the aroma of our smoker. In the unfortunate<br>
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
                                Mozzarella</li>
                            <li>Potato Salad</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="cards__discounts">
                        <div class="cards__discounts-box">Discounts Apply For Events Of 150 Guests Or More. Contact Us
                            Using The Link Below For More Details.</div>
                        <div class="cards__discounts-text">
                            <p><span>*</span>Tax and gratuity not included</p>
                            <p><span>**</span>   $150.00 On Site Service Charge</p>
                            <p><span>***</span>   $300.00 On Site Service Charge With BBQ Trailer</p>
                            <p>^ Up Charge on meats cooked on site include: Prime Grade NY Strip Steak,<br>
                                Prime Grade Prime Rib Roast,  Salmon Filet, Prime Brisket Cheese Burgers, Hot Dogs</p>
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
                            <p>8 Oz. $6 / 12 Oz. $9 / 32 Oz.  $13</p>
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
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/slider_woman.png" alt="">
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
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/slider_woman.png" alt="">
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
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/slider_woman.png" alt="">
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
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/slider_woman.png" alt="">
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

    <!--SECTION ABOUT-->

    <section class="about wow animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="about__box about__box--left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/Rectangle_small.png" alt="">
                        <h3>About us</h3>
                    </div>
                    <p class="about__text">At Tim's Barbecue, we take great pride in providing only the best meats
                        available. Tim's Barbecue brings you the best of Texas style “Craft Barbecue." Chef/Owner, Tim
                        Smith describes Craft Barbecue as follows, " The meat is slow smoked for many hours with real
                        wood on our custom built smoker. We take no short cuts here, offering the best top quality Angus
                        beef and pork products."</p>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="about__box about__box--right">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/Rectangle_small.png" alt="">
                        <h3>Where to find us</h3>
                    </div>
                    <div class="about__info">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon_.png" alt="">
                        <p>Richboro Beer & Soda</p>
                    </div>
                    <div class="about__info">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon_1.png" alt="">
                        <p>Saturday – 4-7PM</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2">
                    <div class="about__house">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dom.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>


<body>

