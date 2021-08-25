<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/_cart/_cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */


defined('ABSPATH') || exit;


?>
<main>
    <section class="basket">
        <div class="container table-width">
            <div class="row">
                <table class="basket-table">
                    <thead>
                    <tr>
                        <th class="table__th table__th-delete"></th>
                        <th class="table__th table__th-product">Product</th>
                        <th class="table__th table__th-price">Price</th>
                        <th class="table__th table__th-quantity">Quantity</th>
                        <th class="table__th table__th-price">Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $cart = WC()->cart;

                    $get_id = function ($arrayItem) {
                        return $arrayItem['product_id'];
                    };
                    $items['id'] = array_values(array_map($get_id, $cart->get_cart()));

                    foreach (WC()->cart->get_cart() as $item) {
                        echo wc_get_product_of_cart_html_by_cart_item($item);

                    }

                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="container col-12 county margin__basket">

        <div class="county__items">
            <div class="county__items__item county__items__cart">
                <div class="county__items__cart__blackBlock">
                    <h3 class="county__items__cart__blackBlock__title">CART TOTALS</h3>
                    <div class="county__items__cart__blackBlock__subtotal">
                        <p class="county__items__cart__blackBlock__subtotal__h">Subtotal</p>
                        <p class="county__items__cart__blackBlock__subtotal__price"><?= $cart->get_cart_total() ?></p>
                    </div>
                </div>
                <h4 class="county__items__cart__shipping">Shipping</h4>
                <p class="county__items__cart__description">Enter your address to view
                    shipping options.</p>
                <div class="county__items__cart__wrapper">
                    <p class="county__items__cart__wrapper__totalPrice">Total : <span
                                class="county__items__cart__wrapper__totalPrice-paymentPrice"><?= $cart->get_cart_total() ?></span>
                    </p>
                </div>
                <a href="http://bbq.loc/checkout/" class="county__items__cart__buttonProceed">Proceed to checkout</a>
            </div>
            <div class="county__items__item">
                <div class="county__items__item__wrapperImg"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/img/bbq.png" alt=""
                            class="county__items__item_img"></div>
                <h3 class="county__items__item_title">FULL SERVICE CATERING</h3>
                <p class="county__items__item_description">To get the FULL Tim’s Barbecue experience in your home,
                    backyard, corporate setting, or anywhere else, let us come and do all the work.</p>
            </div>
            <div class="county__items__item">
                <div class="county__items__item__wrapperImg"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/img/soup.png" alt=""
                            class="county__items__item_img"></div>
                <h3 class="county__items__item_title">ONSITE COOKING</h3>
                <p class="county__items__item_description">For catering orders, we can bring our delicious barbecue to
                    you. You can also pick up our barbecue, or use our delivery service that covers a 5 mile radius.</p>
            </div>
        </div>

    </section>


    <div class="container">
        <div class="online-orders__inform">
            <h2 class="online-orders__title color-red">
                <?= get_field('online-orders__title') ?>
            </h2>
            <p class="online-orders__description">
                <?= get_field('online-orders__description') ?>
            </p>
            <ul class="d-flex online-orders__list">
                <li class="online-orders__item online-orders__item-email"><a class="online-orders__link" href="#">
                        <?= get_field('online-orders__email') ?>
                    </a></li>
                <li class="online-orders__item online-orders__item-whatsapp"><a class="online-orders__link" href="#">
                        <?= get_field('online-orders__phone') ?>
                    </a></li>
            </ul>
        </div>
    </div>
    </section>

</main>
<?php
get_footer();
?>
<style>
    .btn-delete {
        background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/remove.svg);
    }

    .county__items__cart__blackBlock__title:before {
        background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/treugol_red.svg);
    }
</style>