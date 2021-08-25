<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

define('PRODUCT_IMAGE_URL', wp_get_attachment_image_url(($product->get_image_id()), 'full'));

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div class="container-fluid header__inform header header_product">
    <div class="header__rectangle header__rectangle_product">
        <h2 class="header__rectangle-title header__rectangle-title-main text-style-red slash slash-product"><?= $product->get_name() ?></h2>
        <p class="header__rectangle-description_product"><?= substr($product->get_description(), 5) ?></p>

        <div class="header__info_product">
            <p class="triangle header__info-count"><?= $product->get_stock_quantity() . ' in stock' ?></p>
            <?= wc_get_product_card_add_by_product($product) ?>
        </div>
    </div>
</div>

<main>
    <div class="container "><h6 class="whiteBanner_orders__title">Related Products</h6></div>

    <section class=" container whiteBanner_orders products__whiteBanner_orders__mt">

        <div class="whiteBanner_orders__content">

            <?php
            $related_products_id = wc_get_related_products($product->get_id(), 3);
            foreach ($related_products_id as $id){
                echo wc_get_product_html_by_product(wc_get_product($id), "whiteBanner_orders__content__card");
            }
            ?>
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





<style>
    .header__rectangle_product:before {
        background-image: url("<?=PRODUCT_IMAGE_URL?>");
    }
</style>
<script src="<?php bloginfo('template_directory'); ?>../../../themes/barbecue/assets/js/addToCart.js"></script>