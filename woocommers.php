<?php
// инициализация woocommerce
add_action('after_setup_theme', 'woocommerce_support');

function woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('post-thumbnails', array('post', 'page', 'product'));
}

function bbloomer_remove_sidebar_product_pages()
{

    if (is_product()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }

    if (is_tax()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }

    if (is_shop()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }
}

function woocommerce_remove_gallery_single_products()
{
    remove_action('woocommerce_product_thumbnails', 'woocommerce_get_gallery_image_html', 10);
}

function woocommerce_remove_details_single_products()
{
    remove_action('woocommerce_gallery_single_products', 'woocommerce_get_gallery_single_single', 10);
};

// удаляет галлерею в single product
add_action('woocommerce_single_product_summary', 'woocommerce_remove_gallery_single_products', 10);
// удаляет сайдбар со страниц
add_action('wp', 'bbloomer_remove_sidebar_product_pages');

// отключает вывод заголовка на странице карточки товара
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
// add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 15 );

// отключает вывод короткого описания товара
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);



// Подключение функций "ЗАКАЗЫ" корзины
if (class_exists('WooCommerce')) {
    // require_once(get_template_directory() . '/template/order.php');
}

// Подключение функций мини корзины
if (class_exists('WooCommerce')) {
    // require_once(get_template_directory() . '/template/minicard.php');
}




function true_order_again($actions, $order)
{
    // добавляет кнопку только для выполненных заказов
    if ($order->has_status('completed')) {

        $actions['order-again'] = array(
            'url' => wp_nonce_url(
                add_query_arg(
                    'order_again',
                    $order->get_id(),
                    wc_get_cart_url()
                ),
                'woocommerce-order_again'
            ),
            'name' => __('Order again', 'woocommerce'),
        );
    }
    return $actions;
}

add_filter('woocommerce_my_account_my_orders_actions', 'true_order_again', 25, 2);
