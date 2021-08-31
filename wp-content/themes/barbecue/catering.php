<?php
/*
 Template Name: catering
 Template Post Type: page
 */

get_header();
?>

    <main>
        <section>
            <div class="container-fluid header__inform container media768px_width">
                <div class="header__rectangle header__rectangle-main">
                    <h2 class="header__rectangle-title header__rectangle-title-main slash slash-main"><?=get_field('header__title')?></h2>
                    <p class="header__rectangle-description"><?=get_field('header__content')?></p>
                </div>
            </div>
        </section>
        <p class="catering__separator uppercase">
            <span><?=get_field('record_1')?></span>
            <span><?=get_field('record_2')?></span>
            <span><?=get_field('record_3')?></span></p>
        <section class="container col-12 county ">

            <h2 class="county__title uppercase slash__left-top">
                <?=get_field('county__black_title')?> <br>

                <span class="county__title-red county__title-bold">
                    <?=get_field('county__red_title')?>
                </span>

            </h2>
            <div class="county__items">
                <div class="county__items__item"><div class="county__items__item__wrapperImg alignment">
                        <img src="<?=get_field('county_item_1')['icon']['url']?>"
                             alt="" class="county__items__item_img"></div>
                    <h3 class="county__items__item_title"><?=get_field('county_item_1')['title']?></h3>
                    <p class="county__items__item_description">
                        <?=get_field('county_item_1')['desciption']?>
                    </p>
                </div>
                <div class="county__items__item"><div class="county__items__item__wrapperImg">
                        <img src="<?=get_field('county_item_2')['icon']['url']?>"
                             alt="" class="county__items__item_img"></div>
                    <h3 class="county__items__item_title"><?=get_field('county_item_2')['title']?></h3>
                    <p class="county__items__item_description">
                        <?=get_field('county_item_2')['desciption']?>
                    </p>
                </div>
                <div class="county__items__item"><div class="county__items__item__wrapperImg">
                        <img src="<?=get_field('county_item_3')['icon']['url']?>"
                             alt="" class="county__items__item_img"></div>
                    <h3 class="county__items__item_title"><?=get_field('county_item_3')['title']?></h3>
                    <p class="county__items__item_description">
                        <?=get_field('county_item_3')['desciption']?>
                    </p>
            </div>

        </section>
        <section class="container__blackBanner catering__blackBanner">
            <div class="container blackBanner">
                <h2 class="blackBanner__title">
                    <?=get_field('black_banner')['title']?>
                </h2>
                <h3 class="blackBanner__subtitle"><?=get_field('black_banner')['subtitle']?></h3>
                <p class="blackBanner__header-red">
                    <?=get_field('black_banner')['block_1']['title']?>
                </p>
                <div class="blackBanner__content">
                    <div class="blackBanner__content__item">
                        <div class="blackBanner__content__item__wrapper">
                            <p class="blackBanner__content__item__wrapper_title">
                                <?=get_field('black_banner')['block_1']['content_item_1']['title_1']?>
                            </p>
                            <p class="blackBanner__content__item__wrapper_title">
                                <?=get_field('black_banner')['block_1']['content_item_1']['title_2']?>
                            </p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
                        <img class="blackBanner__content__item__img-wrapper__for-price"
                             src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                             alt="meetWrapper">
                        <p class="blackBanner__content__item__img-wrapper__price">
                            <?=get_field('black_banner')['block_1']['content_item_1']['price']?>
                        </p>
                    </span>
                    </div>
                    <div class="blackBanner__content__item">
                        <div class="blackBanner__content__item__wrapper">
                            <p class="blackBanner__content__item__wrapper_title">
                                <?=get_field('black_banner')['block_1']['content_item_2']['title_1']?>
                            </p>
                            <p class="blackBanner__content__item__wrapper_title">
                                <?=get_field('black_banner')['block_1']['content_item_2']['title_2']?>
                            </p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
                        <img class="blackBanner__content__item__img-wrapper__for-price"
                             src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                             alt="meetWrapper">
                        <p class="blackBanner__content__item__img-wrapper__price">
                            <?=get_field('black_banner')['block_1']['content_item_2']['price']?>
                        </p>
                    </span>
                    </div>
                </div>
                <p class="blackBanner__description">
                     <?=get_field('black_banner')['block_1']['description']?>
                <h4 class="blackBanner__description-hint">
                    <?=get_field('black_banner')['hint_subtitle']?>
                </h4></p>
                <p class="blackBanner__header-red">ON SITE ** ON SITE ** ON SITE ** ON SITE ** ON SITE **</p>
                <div class="blackBanner__content">
                    <div class="blackBanner__content__item">
                        <div class="blackBanner__content__item__wrapper">
                            <p class="blackBanner__content__item__wrapper_title">
                                <?=get_field('black_banner')['block_2']['content_item_1']['title_1']?>
                            </p>
                            <p class="blackBanner__content__item__wrapper_title">
                                <?=get_field('black_banner')['block_2']['content_item_1']['title_2']?>
                            </p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
                        <img class="blackBanner__content__item__img-wrapper__for-price"
                             src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                             alt="meetWrapper">
                        <p class="blackBanner__content__item__img-wrapper__price">
                            <?=get_field('black_banner')['block_2']['content_item_1']['price']?>
                        </p>
                    </span>
                    </div>
                    <div class="blackBanner__content__item">
                        <div class="blackBanner__content__item__wrapper">
                            <p class="blackBanner__content__item__wrapper_title">
                                <?=get_field('black_banner')['block_2']['content_item_2']['title_1']?>
                            </p>
                            <p class="blackBanner__content__item__wrapper_title">
                                <?=get_field('black_banner')['block_2']['content_item_2']['title_2']?>
                            </p>
                        </div>
                        <span class="blackBanner__content__item__img-wrapper">
                        <img class="blackBanner__content__item__img-wrapper__for-price"
                             src="<?php bloginfo('template_directory'); ?>/assets/img/meetWrapperPrice.png"
                             alt="meetWrapper">
                        <p class="blackBanner__content__item__img-wrapper__price">
                            <?=get_field('black_banner')['block_2']['content_item_2']['price']?>
                        </p>
                    </span>
                    </div>
                </div>
                <p class="blackBanner__description">
                    <?=get_field('black_banner')['block_2']['description']?>
                </p>
            </div>
        </section>
        <section class="online-orders">
            <div class="container">
                <div class="online-orders__inform">
                    <h2 class="online-orders__title color-red">
                        <?=get_field('online-orders__title')?>
                    </h2>
                    <p class="online-orders__description">
                        <?=get_field('online-orders__description')?>
                    </p>
                    <ul class="d-flex online-orders__list">
                        <li class="online-orders__item online-orders__item-email"><a class="online-orders__link" href="#">
                                <?=get_field('online-orders__email')?>
                            </a></li>
                        <li class="online-orders__item online-orders__item-whatsapp"><a class="online-orders__link" href="#">
                                <?=get_field('online-orders__phone')?>
                            </a></li>
                    </ul>
                </div>
            </div>
        </section>





    </main>


<?php

get_footer();
?>