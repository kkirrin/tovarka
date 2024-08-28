<?php

defined('ABSPATH') || exit;

get_header('shop');

do_action('woocommerce_before_main_content');

?>

<header class="woocommerce-products-header">
    <?php if (apply_filters('woocommerce_show_page_title', true)): ?>
        <h1 class="woocommerce-products-header__title page-title">
            <?php woocommerce_page_title(); ?>
        </h1>
    <?php endif; ?>
    <?php do_action('woocommerce_archive_description'); ?>
</header>

<?php
// Проверяем, есть ли продукты в категории
if (have_posts()) : ?>

    <ul class="products">
        <?php
        while (have_posts()) :
            the_post();
            wc_get_template_part('content', 'product'); // Загружаем шаблон продукта
        endwhile; ?>
    </ul>

<?php
    // Пагинация
    the_posts_pagination(array(
        'prev_text' => '<span class="nav-prev">' . __('←', 'woocommerce') . '</span>',
        'next_text' => '<span class="nav-next">' . __('→', 'woocommerce') . '</span>',
    ));

else :
    echo '<p>' . __('No products found in this category.', 'woocommerce') . '</p>';
endif;

do_action('woocommerce_after_main_content');

get_footer();
