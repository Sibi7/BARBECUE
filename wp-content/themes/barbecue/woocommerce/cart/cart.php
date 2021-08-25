<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
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
$woocommerce = WC();
$items = $woocommerce->cart->get_cart();

defined( 'ABSPATH' ) || exit;

foreach ($items as $item){
    echo  $item['product_id'];
}

//echo '<iframe><hr><pre>'.print_r($items).'</pre><hr></iframe>';
?>

<main>
    <section class="basket">
        <div class="container table-width">
            <div class="row">
                <table class="basket-table">
                    <thead>
                    <tr><th class="table__th table__th-delete"></th>
                        <th class="table__th table__th-product">Product</th>
                        <th class="table__th table__th-price">Price</th>
                        <th class="table__th table__th-quantity">Quantity</th>
                        <th class="table__th table__th-price">Subtotal</th>
                    </tr></thead>
                    <tbody>
                    <tr class="table__tr">
                        <td aria-label="" class="table__tr-delete">
                            <button type="button" class="btn-delete"></button>
                        </td>
                        <td aria-label="Product" class="table__tr__product">
                            <div class="d-flex align-items-center table__td-product">
                                <div class="table__td-product-img">
                                    <img src="./img/Слой_26.png" alt="">
                                </div>
                                <p class="table__td-product-label">Smitty Brisket Cheesesteak</p>
                            </div>
                        </td>
                        <td aria-label="Price" class="universal-card__content__mainInfo__price whiteBanner_orders__content__card__content__mainInfo__price mediaTable">$13</td>
                        <td aria-label="Quantity" class="table__td">
                            <div class="universal-card__add">
                                <input class="universal-card__add__input" type="number" value="5">
                            </div>
                        </td>
                        <td aria-label="Subtotal" class="universal-card__content__mainInfo__price whiteBanner_orders__content__card__content__mainInfo__price mediaTd">$13</td>
                    </tr>
                    <tr class="table__tr">
                        <td aria-label="" class="table__tr-delete">
                            <button type="button" class="btn-delete"></button>
                        </td>
                        <td aria-label="Product" class="table__tr__product">
                            <div class="d-flex align-items-center table__td-product">
                                <div class="table__td-product-img">
                                    <img src="./img/Слой_26.png" alt="">
                                </div>
                                <p class="table__td-product-label">Smitty Brisket Cheesesteak</p>
                            </div>
                        </td>
                        <td aria-label="Price" class="universal-card__content__mainInfo__price whiteBanner_orders__content__card__content__mainInfo__price mediaTable">$13</td>
                        <td aria-label="Quantity" class="table__td">
                            <div class="universal-card__add">
                                <input class="universal-card__add__input" type="number" value="5">
                            </div>
                        </td>
                        <td aria-label="Subtotal" class="universal-card__content__mainInfo__price whiteBanner_orders__content__card__content__mainInfo__price mediaTd">$13</td>
                    </tr>
                    <tr class="table__tr">
                        <td aria-label="" class="table__tr-delete">
                            <button type="button" class="btn-delete"></button>
                        </td>
                        <td aria-label="Product" class="table__tr__product">
                            <div class="d-flex align-items-center table__td-product">
                                <div class="table__td-product-img">
                                    <img src="./img/Слой_26.png" alt="">
                                </div>
                                <p class="table__td-product-label">Smitty Brisket Cheesesteak</p>
                            </div>
                        </td>
                        <td aria-label="Price" class="universal-card__content__mainInfo__price whiteBanner_orders__content__card__content__mainInfo__price mediaTable">$13</td>
                        <td aria-label="Quantity" class="table__td">
                            <div class="universal-card__add">
                                <input class="universal-card__add__input" type="number" value="5">
                            </div>
                        </td>
                        <td aria-label="Subtotal" class="universal-card__content__mainInfo__price whiteBanner_orders__content__card__content__mainInfo__price mediaTd">$13</td>
                    </tr>
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
                        <p class="county__items__cart__blackBlock__subtotal__price">$55.00</p>
                    </div>
                </div>
                <h4 class="county__items__cart__shipping">Shipping</h4>
                <p class="county__items__cart__description">Enter your address to view
                    shipping options.</p>
                <div class="county__items__cart__wrapper">
                    <p class="county__items__cart__wrapper__totalPrice">Total : <span class="county__items__cart__wrapper__totalPrice-paymentPrice">$60</span></p>
                </div>
                <button class="county__items__cart__buttonProceed">Proceed to checkout</button>
            </div>
            <div class="county__items__item"><div class="county__items__item__wrapperImg"><img src="./img/bbq.png" alt="" class="county__items__item_img"></div>
                <h3 class="county__items__item_title">FULL SERVICE CATERING</h3>
                <p class="county__items__item_description">To get the FULL Tim’s Barbecue experience in your home,
                    backyard, corporate setting, or anywhere else, let us come and do all the work.</p>
            </div>
            <div class="county__items__item"><div class="county__items__item__wrapperImg"><img src="./img/soup.png" alt="" class="county__items__item_img"></div>
                <h3 class="county__items__item_title">ONSITE COOKING</h3>
                <p class="county__items__item_description">For catering orders, we can bring our delicious barbecue to
                    you. You can also pick up our barbecue, or use our delivery service that covers a 5 mile radius.</p>
            </div>
        </div>

    </section>
</main>
