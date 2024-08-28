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

    <div class="catalog-form mb-7">
        <?php wp_nav_menu([
            'theme_location' => 'bands',
            'container' => '',
            'menu_class' => 'bands-menu',
            'menu_id' => ''
        ]);
        ?>

        <div class="tag-wrapper">
            <?php echo do_shortcode('[wpf-filters id=6]'); ?>
        </div>


        <div>
            <a href="#popup" class="popup-link filter-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                    <path
                        d="M3.25 20.5833H18.4167M7.58333 12.9999H22.75M15.1667 5.41658L22.75 5.41658M10.8333 5.41658H3.25"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M20.5833 18.4167C21.0119 18.4167 21.4308 18.5437 21.7871 18.7818C22.1434 19.0199 22.4211 19.3583 22.5851 19.7542C22.7491 20.1501 22.792 20.5857 22.7084 21.006C22.6248 21.4263 22.4184 21.8124 22.1154 22.1154C21.8124 22.4184 21.4263 22.6248 21.006 22.7084C20.5857 22.792 20.1501 22.7491 19.7542 22.5851C19.3583 22.4211 19.0199 22.1434 18.7818 21.7871C18.5437 21.4308 18.4167 21.0119 18.4167 20.5833C18.4167 20.0087 18.6449 19.4576 19.0513 19.0513C19.4576 18.6449 20.0087 18.4167 20.5833 18.4167ZM3.25 13C3.25 13.4285 3.37707 13.8474 3.61515 14.2037C3.85323 14.56 4.19161 14.8377 4.58752 15.0017C4.98343 15.1657 5.41907 15.2086 5.83936 15.125C6.25965 15.0414 6.64572 14.8351 6.94873 14.5321C7.25175 14.229 7.4581 13.843 7.5417 13.4227C7.6253 13.0024 7.5824 12.5668 7.41841 12.1709C7.25442 11.7749 6.97671 11.4366 6.6204 11.1985C6.2641 10.9604 5.84519 10.8333 5.41667 10.8333C4.84203 10.8333 4.29093 11.0616 3.8846 11.4679C3.47827 11.8743 3.25 12.4254 3.25 13ZM10.8333 5.41667C10.8333 5.84519 10.9604 6.26409 11.1985 6.6204C11.4366 6.97671 11.7749 7.25441 12.1709 7.4184C12.5668 7.58239 13.0024 7.6253 13.4227 7.5417C13.843 7.4581 14.2291 7.25174 14.5321 6.94873C14.8351 6.64572 15.0414 6.25965 15.125 5.83936C15.2086 5.41907 15.1657 4.98342 15.0017 4.58752C14.8377 4.19161 14.56 3.85323 14.2037 3.61515C13.8474 3.37707 13.4285 3.25 13 3.25C12.4254 3.25 11.8743 3.47827 11.4679 3.8846C11.0616 4.29093 10.8333 4.84203 10.8333 5.41667Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Фильтры
            </a>
        </div>
    </div>

    <div>
        <!-- sidebar -->
        <!-- <div class="catalog-form__sidebar">
			<nav class="catalog-menu hidden sm:block">
				<?php wp_nav_menu([
                    'theme_location' => 'sidebar',
                    'container' => '',
                    'menu_class' => 'menu',
                    'menu_id' => ''
                ]);
                ?>
			</nav> -->

        <!-- <div class="side-bar-range">
				<p>Цена:</p> -->
        <!-- <?php echo do_shortcode('[wpf-filters id=1]'); ?> -->
        <!-- </div> -->
        <!-- </div> -->

        <div class="catalog-form__content">
            <!-- <div class="catalog-form-filter"> -->
            <!-- <?php echo do_shortcode('[wpf-filters id=2]'); ?> -->
            <!-- </div> -->
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

<section id="popup" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                <svg width="32" height="32" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                    <path
                        d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                    </path>
                </svg>
            </button>
            <h2 class="popup__title">Фильтры</h2>
            <div>
                <?php echo do_shortcode('[wpf-filters id=4]'); ?>
                <?php echo do_shortcode('[wpf-filters id=5]'); ?>

                <?php wp_nav_menu([
                    'theme_location' => 'sidebar',
                    'container' => '',
                    'menu_class' => 'menu',
                    'menu_id' => ''
                ]);
                ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer('shop');
