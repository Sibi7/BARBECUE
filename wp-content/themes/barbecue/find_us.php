<?php
/*
 Template Name: find_us
 Template Post Type: page
 */

get_header();

?>

    <main>
        <section>
            <div class="container-fluid header__inform container media768px_width">
                <div class="header__rectangle header__rectangle-main">
                    <h2 class="header__rectangle-title header__rectangle-title-main slash slash-main">We Take Great Pride in
                        Providing Only The Best Meats Available</h2>
                    <p class="header__rectangle-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, s
                        ed do eiusmod tempor incididunt ut labore et dolore ma
                        gna aliqua. Ut enim ad minim veniam, qu</p>
                </div>
            </div>
        </section>
        <p class="catering__separator uppercase"><span>We Can Serve 40 to 1000 Guests! </span> <span> We Can Serve 40 to 1000 Guests! </span> <span> We Can Serve 40 to 1000 Guests!</span></p>
        <section class=" section__eventInfo">

            <div class="container eventInfo ">
                <h3 class="eventInfo__title  ">EVENT INFO:</h3>
                <div class="eventInfo__wrapper-content">
                    <div class="eventInfo__wrapper-content__item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/kalendarr.svg" alt="kalendarr"
                             class="eventInfo__wrapper-content__item__img">
                        <h4 class="eventInfo__wrapper-content__item__content">Start Time:</h4>
                        <p class="eventInfo__wrapper-content__item__description"><?= get_field('start_time') ?>
                        </p>
                    </div>
                    <div class="eventInfo__wrapper-content__item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/kalendarr.svg" alt="kalendarr"
                             class="eventInfo__wrapper-content__item__img">
                        <h4 class="eventInfo__wrapper-content__item__content">End Date:</h4>
                        <p class="eventInfo__wrapper-content__item__description"><?= get_field('end_date') ?></p>
                    </div>
                    <div class="eventInfo__wrapper-content__item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/kalendarr.svg" alt="kalendarr"
                             class="eventInfo__wrapper-content__item__img">
                        <h4 class="eventInfo__wrapper-content__item__content">End Time:</h4>
                        <p class="eventInfo__wrapper-content__item__description"><?= get_field('end_time') ?></p>
                    </div>
                    <div class="eventInfo__wrapper-content__item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/kalendarr.svg" alt="kalendarr"
                             class="eventInfo__wrapper-content__item__img">
                        <h4 class="eventInfo__wrapper-content__item__content">participants:</h4>
                        <p class="eventInfo__wrapper-content__item__description"><?= get_field('participants') ?></p>
                    </div>
                </div>

            </div>
        </section>
        <section class="blackBanner-underSection">
            <div class="blackBanner-underSection__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48744.946192434385!2d-75.02584411633266!3d40.218868680100805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6ac81bb7eed8b%3A0xefda540c9149d4ca!2zMTA4MiAybmQgU3QgUGlrZSwgUmljaGJvcm8sIFBBIDE4OTU0LCDQodCo0JA!5e0!3m2!1sru!2sua!4v1626203660691!5m2!1sru!2sua"
                        width="100%" height="467" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="blackBanner-underSection__black-banner">
                <p class="blackBanner-underSection__black-banner__address"><?= get_field('adress') ?></p>
                <a href="<?= get_field('link') ?>" class="blackBanner-underSection__black-banner__link"><?= get_field('link_text') ?></a>
            </div>
        </section>
        <section class="online-orders online-orders-about-us">
            <div class="container">
                <div class="online-orders__inform">
                    <h2 class="online-orders__title color-red">We are creating something
                        awesome for our customers.</h2>
                    <p class="online-orders__description">In the meantime, please email, or text your BBQ orders to the
                        contacts below.</p>
                    <ul class="d-flex online-orders__list">
                        <li class="online-orders__item online-orders__item-email"><a class="online-orders__link" href="#"><?= get_field('email') ?></a>
                        </li>
                        <li class="online-orders__item online-orders__item-whatsapp"><a class="online-orders__link"
                                                                                        href="#"><?= get_field('phone') ?></a></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();

