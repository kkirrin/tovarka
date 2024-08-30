<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

get_header('shop');


?>





<section class="products">
    <?php

    $current_term = get_queried_object();
    wc_print_notices();

    $args = array(
        'taxonomy' => 'product_cat',
        'child_of' => $current_term->term_id,
        'hide_empty' => false,
    );

    // Получаем все подкатегории текущей категории

    $subcategory_ids = array($current_term->term_id);

    $all_subcategories = get_terms($args);
    foreach ($all_subcategories as $subcategory) {
        $subcategory_ids[] = $subcategory->term_id;
    }

    // var_dump($subcategory_ids);

    // Создаем новый запрос для получения товаров


    // Ваши аргументы для получения товаров
    $products_args = array(
        'post_type' => 'product',
        'posts_per_page' => -1, // Выводим все товары
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'term_id',
                'terms' => $subcategory_ids, // Используем собранные ID подкатегорий
            ),
        ),
    );

    // Выполняем запрос
    $products_query = new WP_Query($products_args);

    // Проверяем, есть ли товары
    if ($products_query->have_posts()) {
        echo '<ul class="products">'; // Начинаем список продуктов

        // Цикл по продуктам
        foreach ($products_query->posts as $post) {
            setup_postdata($post); // Подготовка поста для использования с шаблоном

            // Создаем объект продукта для использования WooCommerce функций
            $product = wc_get_product($post->ID); ?>

            <li <?php wc_product_class('catalog__product', $product); ?>>
                <?php
                /**
                 * Hook: woocommerce_before_shop_loop_item.
                 *
                 * @hooked woocommerce_template_loop_product_link_open - 10
                 */
                do_action('woocommerce_before_shop_loop_item');

                /**
                 * Hook: woocommerce_before_shop_loop_item_title.
                 *
                 * @hooked woocommerce_show_product_loop_sale_flash - 10
                 * @hooked woocommerce_template_loop_product_thumbnail - 10
                 */
                do_action('woocommerce_before_shop_loop_item_title');

                /**
                 * Hook: woocommerce_shop_loop_item_title.
                 *
                 * @hooked woocommerce_template_loop_product_title - 10
                 */
                do_action('woocommerce_shop_loop_item_title');

                /**
                 * Hook: woocommerce_after_shop_loop_item_title.
                 *
                 * @hooked woocommerce_template_loop_rating - 5
                 * @hooked woocommerce_template_loop_price - 10
                 */
                do_action('woocommerce_after_shop_loop_item_title');

                /**
                 * Hook: woocommerce_after_shop_loop_item.
                 *
                 * @hooked woocommerce_template_loop_product_link_close - 5
                 * @hooked woocommerce_template_loop_add_to_cart - 10
                 */
                do_action('woocommerce_after_shop_loop_item');
                ?>
            </li>
    <?php
        }
        echo '</ul>'; // Закрываем список продуктов
    } else {
        echo '<p>Нет товаров, соответствующих вашим критериям.</p>';
    }

    // Сбрасываем данные постов после использования WP_Query
    wp_reset_postdata();
    ?>


</section>