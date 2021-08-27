<?php
/**
 * artcraft functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package artcraft
 */

if ( ! function_exists( 'artcraft_setup' ) ) :
function artcraft_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );
	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'artcraft' ),
	) );
	// Switch default core markup for search form, comment form, and comments
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'artcraft_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
//function artcraft_widgets_init() {
//	register_sidebar( array(
//		'name'          => esc_html__( 'Sidebar', 'artcraft' ),
//		'id'            => 'artcraft-sidebar',
//		'description'   => esc_html__( 'Add widgets here.', 'artcraft' ),
//		'before_widget' => '<section id="%1$s" class="widget %2$s">',
//		'after_widget'  => '</section>',
//		'before_title'  => '<h2 class="widget-title">',
//		'after_title'   => '</h2>',
//	) );
//}
//add_action( 'widgets_init', 'artcraft_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function artcraft_scripts() {
    /*
     * Подключаем стили:
     * Аргументы:
     * 1) название стиля (может быть любым)
     * 2) путь к файлу
     */
    // для локальных стилей
//	wp_enqueue_style( 'artcraft-style', get_stylesheet_uri() . '/css/style.css' );
    // для внешних стилей
	//wp_enqueue_style( 'artcraft-style', 'http://domain.com/style.css' );
    /*
     * Подключаем скрипты:
     * Аргументы:
     * 1) название скрипта (может быть любым)
     * 2) путь к файлу
     * 3) после каких скриптов подгружать (лучше указать пустой массив
     * 4) версия (оставляем пустые кавычки)
     * 5) подключение в футере (true = да, false = нет)
     */
	wp_enqueue_script( 'artcraft-main', get_template_directory_uri() . '/assets/js/main.js', [], '', true );
	wp_enqueue_script( 'artcraft-about', get_template_directory_uri() . '/assets/js/aboutUs.js', [], '', true );
	wp_enqueue_script( 'artcraft-basket', get_template_directory_uri() . '/assets/js/basket.js', [], '', true );
	wp_enqueue_script( 'artcraft-catering', get_template_directory_uri() . '/assets/js/catering.js', [], '', true );
	wp_enqueue_script( 'artcraft-find', get_template_directory_uri() . '/assets/js/find_us.js', [], '', true );
	wp_enqueue_script( 'artcraft-orders', get_template_directory_uri() . '/assets/js/orders.js', [], '', true );
	wp_enqueue_script( 'artcraft-products', get_template_directory_uri() . '/assets/js/products.js', [], '', true );
    /*
     * Добавляем возможность отправлять AJAX-запросы к скриптам
     * Аргументы:
     * 1) название скрипта, в котором будем писать ajax
     * 2) название объекта, к которому будем обращаться в файле скрипта
     * 3) элементы объекта, которые нам нужны (путь к обработчику аякса, путь к папке темы)
     */
    wp_localize_script( 'artcraft-script', 'myajax',
        [
            'url' => admin_url( 'admin-ajax.php' ),
            'template' => get_template_directory_uri()
        ]
    );
}
add_action( 'wp_enqueue_scripts', 'artcraft_scripts' );

/**
 * Load custom functions
 */
require get_template_directory() . '/includes/custom-functions.php';

function wc_get_product_html_by_product(WC_Product_Simple $product, $class_name = ''){
    $PRODUCT_IMAGE_URL = wp_get_attachment_image_url(( $product->get_image_id() ), 'full' );
    return
        '
<div class="universal-card '.$class_name.'">
<div style="height: 200px">
    <h3 class="universal-card__title">'.$product->get_name().'</h3>
    </div>
    <div class="universal-card__content">
        <div class="universal-card__content__wrapperImg">
            <img src="'.$PRODUCT_IMAGE_URL.'" alt="content Card">
        </div>
        
        <div class="universal-card__content__mainInfo">
            <p class="universal-card__content__mainInfo__title">'.$product->get_short_description().'</p>
            <p class="universal-card__content__mainInfo__price">$'.$product->get_price().'</p>
        </div>
    </div>
    '.wc_get_product_card_add_by_product($product).'
</div>
';
}

function wc_get_product_card_add_by_product($product){
    return '
    <div class="universal-card__add">
        <button class="universal-card__add__button '.$product->get_id().'">Add to cart</button>
        <input class="universal-card__add__input '.$product->get_id().'"  type="number" value="1">
    </div>';
}


function wc_get_product_of_cart_html_by_cart_item($item){
    $product = wc_get_product($item['product_id']);
    $cart = WC()->cart;
    $quantities = $cart->get_cart_item_quantities();
    $product_image_url = wp_get_attachment_image_url(($product->get_image_id()), 'full');
    return
        '
                     <tr class="table__tr">
                        <td aria-label="" class="table__tr-delete">
                            <a href="'.wc_get_cart_remove_url($item['key']).'" type="button" class="btn-delete"></a>
                        </td>
                        <td aria-label="Product" class="table__tr__product">
                            <div class="d-flex align-items-center table__td-product">
                                <div class="table__td-product-img">
                                    <img src="' . $product_image_url . '" alt="">
                                </div>
                                <p class="table__td-product-label">' . $product->get_name() . '</p>
                            </div>
                        </td>
                        <td aria-label="Price"
                            class="universal-card__content__mainInfo__price whiteBanner_orders__content__card__content__mainInfo__price mediaTable">
                            $' . $product->get_price() . '
                        </td>
                        <td aria-label="Quantity" class="table__td">
                            <div class="universal-card__add">
                                <input class="universal-card__add__input" type="number" name="cart['.$item['key'].'][qty]" value="' . $quantities[$product->get_id()] . '">
                            </div>
                        </td>
                        <td aria-label="Subtotal"
                            class="universal-card__content__mainInfo__price whiteBanner_orders__content__card__content__mainInfo__price mediaTd">
                            $' . $product->get_price() * $quantities[$product->get_id()] . '
                        </td>
                    </tr>
                    ';
}

function wc_print_products_by_category($category){
    $products = wc_get_products(array(
        'category' => array($category),
    ));
    foreach ($products as $product) {
        echo wc_get_product_html_by_product($product, 'positionCard');
    }
}