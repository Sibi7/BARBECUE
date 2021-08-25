
<?php
/*
 Template Name: orders
 Template Post Type: page
 */

get_header();

?>
    <main>
        <p class="catering__separator uppercase">We Can Serve 40 to 1000 Guests! We Can Serve 40 to 1000 Guests! We Can Serve 40 to 1000 Guests!</p>
        <section class="blackBanner_orders ">
            <div class="container orders-black">
                <p class="slash_white"></p>
                <p class="orders-black__title">MEATS BY THE POUND </p>
                <div class="orders-black__wrapper">
                    <div class="orders-black__wrapper__single-item">

                        <?php

                        $products = wc_get_products(array(
                            'category' => array('meats_by_the_pound'),
                        ));

                        echo wc_get_product_html_by_product($products[0], 'positionCard');
                        echo wc_get_product_html_by_product($products[1], 'positionCard');
                        ?>

                    </div>
                    <div class="orders-black__wrapper__single-item">
                        <?=wc_get_product_html_by_product($products[2], 'positionCard')?>
                        <?=wc_get_product_html_by_product($products[3], 'positionCard')?>
                    </div>
                </div>
            </div>


        </section>
        <section class=" container whiteBanner_orders ">
            <div class="slash_black"></div>
            <h6 class="whiteBanner_orders__title">SANDWICHES</h6>
            <div class="whiteBanner_orders__content">
                <?php
                $products = wc_get_products(array(
                    'category' => array('sandwiches'),
                ));

                echo wc_get_product_html_by_product($products[2], 'positionCard whiteBanner_orders__content__card');
                echo wc_get_product_html_by_product($products[1], 'positionCard whiteBanner_orders__content__card');
                echo wc_get_product_html_by_product($products[0], 'positionCard whiteBanner_orders__content__card');
                ?>
            </div>
        </section>
        <section class="blackBanner_orders margin_bottom_blackBanner_orders">
            <div class="container orders-black">
                <p class="slash_white"></p>
                <p class="orders-black__title">PLATES W/2 SMALL SIDES</p>
                <div class="orders-black__wrapper">
                    <div class="orders-black__wrapper__single-item">

                        <?php

                        $products = wc_get_products(array(
                            'category' => array('meats_by_the_pound'),
                        ));

                        echo wc_get_product_html_by_product($products[0], 'positionCard');
                        echo wc_get_product_html_by_product($products[1], 'positionCard');
                        ?>

                    </div>
                    <div class="orders-black__wrapper__single-item">
                        <?=wc_get_product_html_by_product($products[2], 'positionCard')?>
                        <?=wc_get_product_html_by_product($products[3], 'positionCard')?>
                    </div>
                </div>
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

<script src="<?php bloginfo('template_directory'); ?>/assets/js/addToCart.js"></script>