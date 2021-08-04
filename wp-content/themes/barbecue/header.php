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
    <meta charset="<?php bloginfo('charset'); ?>">
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
    <link
            rel="stylesheet"
            href="<?php bloginfo('template_directory'); ?>/assets/styles/style.css"
    />
    <?php wp_head(); ?>
</head>

<body>
<header class="header">
    <div class="container media768px_width">
        <div class="row">
            <div class="d-flex justify-content-between justify-content-lg-start mb-6">
                <a href="/" class="header__logo header__logo--main">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/TimsBBQ_White.png"
                         alt="Tim's Barbecue">
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
            <h1 class="header__title"><?= get_the_title() ?></h1>
            <div class="container-fluid header__inform">
                <div class="header__rectangle header__rectangle-main">
                    <h2 class="header__rectangle-title header__rectangle-title-main slash slash-main">We Take Great Pride in
                        Providing Only The Best Meats Available</h2>
                    <p class="header__rectangle-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, s
                        ed do eiusmod tempor incididunt ut labore et dolore ma
                        gna aliqua. Ut enim ad minim veniam, qu</p>
                </div>
            </div>
        </div>
    </div>
</header>

