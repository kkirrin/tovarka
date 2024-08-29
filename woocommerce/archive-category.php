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

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */



?>
CТРАНИЦЫ ДЛЯ КАТЕГОРИИ СО ВСЕМИ КАТЕГОРИЯМИ и ТОВАРАМИ
<div class="container" style="margin-top: 80px;">
    <?php if (function_exists('z_taxonomy_image'))
        z_taxonomy_image(); ?>

    <?php
    do_action('woocommerce_before_main_content');

    ?>

    <header class="woocommerce-products-header">
        <?php if (apply_filters('woocommerce_show_page_title', true)): ?>
            <div class="flex mb-5">
                <h1 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative">
                    <?php woocommerce_page_title(); ?>
                </h1>
            </div>
            <!-- <h1 class="woocommerce-products-header__title page-title">
				<?php woocommerce_page_title(); ?>
			</h1> -->
        <?php endif; ?>
        <?php
        /**
         * Hook: woocommerce_archive_description.
         *
         * @hooked woocommerce_taxonomy_archive_description - 10
         * @hooked woocommerce_product_archive_description - 10
         */
        do_action('woocommerce_archive_description');
        ?>
    </header>

    <div>
        </nav>


        <?php if (function_exists('z_taxonomy_image'))
            z_taxonomy_image();


        $parent_id = $term->parent;
        $parent_term = get_term($parent_id, 'product_cat');

        // ТУТ ПОЛУЧЕНИЕ ВСЕХ ПОДКАТЕГОРИЙ ДЛЯ ТЕКУЩЕЙ РОДИТЕЛЬСКОЙ КАТЕГОРИИ
        $subcategories = get_terms(array(
            'taxonomy' => 'product_cat',
            'parent' => $parent_id,
            'hide_empty' => false,
        ));
        ?>

        <!-- ТУТ ВЫВОД ПОДКАТЕГОРИЙ -->
        <div class="flex">
            <?php foreach ($subcategories as $sub_category) : ?>
                <div>
                    <a href="<?php echo get_category_link($sub_category->term_id); ?>">
                        <span class="image">
                            <?php
                            $sub_thumbnail_url = wp_get_attachment_url(get_woocommerce_term_meta($sub_category->term_id, 'thumbnail_id', true));
                            ?>
                            <img src="<?php echo esc_url($sub_thumbnail_url ? $sub_thumbnail_url : '/wp-content/uploads/woocommerce-placeholder.png'); ?>" alt="<?php echo esc_attr($sub_category->name); ?>" />
                        </span>
                        <p><?php echo esc_html($sub_category->name); ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- ТУТ ВЫВОД ТОВАРОЙ ИЗ КАТЕГОРИЙ -->
        <div class="catalog-form__content">
            <?php
            if (woocommerce_product_loop()) {

                /**
                 * Hook: woocommerce_before_shop_loop.
                 *
                 * @hooked woocommerce_output_all_notices - 10
                 * @hooked woocommerce_result_count - 20
                 * @hooked woocommerce_catalog_ordering - 30
                 */
                do_action('woocommerce_before_shop_loop');

                woocommerce_product_loop_start();

                if (wc_get_loop_prop('total')) {
                    while (have_posts()) {
                        the_post();

                        /**
                         * Hook: woocommerce_shop_loop.
                         */
                        do_action('woocommerce_shop_loop');

                        wc_get_template_part('content', 'product');
                    }
                }

                woocommerce_product_loop_end();

                /**
                 * Hook: woocommerce_after_shop_loop.
                 *
                 * @hooked woocommerce_pagination - 10
                 */
                do_action('woocommerce_after_shop_loop');
            } else {
                /**
                 * Hook: woocommerce_no_products_found.
                 *
                 * @hooked wc_no_products_found - 10
                 */
                do_action('woocommerce_no_products_found');
            }

            /**
             * Hook: woocommerce_after_main_content.
             *
             * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
             */
            do_action('woocommerce_after_main_content');

            /**
             * Hook: woocommerce_sidebar.
             *
             * @hooked woocommerce_get_sidebar - 10
             */
            do_action('woocommerce_sidebar');

            ?>
        </div>

    </div>
</div>

<?php
get_footer('shop');
