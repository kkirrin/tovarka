<?php

// Получаем ID активного юзера
$user_id = get_current_user_id();

function show_favorite_product($user_id)
{
    $wishlist = tinv_wishlist_get($user_id);
    $wlp      = new TInvWL_Product($wishlist);
    $products = $wlp->get_wishlist(array());

    $product_item = '';

    foreach ($products as $wl_product) {
        $product = $wl_product['data'];

        $product_item   .=  '<li class="relative swiper-slide new-slide card h-auto relative card product type-product post-46 status-publish first instock product_cat-new has-post-thumbnail shipping-taxable purchasable product-type-simple woocommerce">';
        $product_item   .=      '<a href="' . $product->get_permalink() . '" alt="' . $product->get_title() . '">';
        if (has_post_thumbnail($product->get_id())) {
            $product_item   .=      get_the_post_thumbnail($product->get_id(), 'shop_catalog');
        }
        $product_item   .=          '<span class="card__attr mb-5">250 мл</span>';
        $product_item   .=          '<h3 class="card__title">' . $product->get_name() . '</h3>';
        $product_item   .=      '</a>';

        $product_item   .=      '<div class="flex flex-wrap items-center gap-5">';
        $product_item   .=          '<span class="card__price">' . wc_price($product->get_price()) . '</span>';
        $product_item   .=          '<div class="flex items-center gap-2 relative">';
        $product_item   .=              '<a href="?add-to-cart=' . $product->get_id() . '" class="relative card__to-card button button product_type_simple add_to_cart_button ajax_add_to_cart" data-quantity="1" data-product_id="' . $product->get_id() . '" data-product_sku="' . $product->get_sku() . '" aria-label="' . __('Добавить в корзину', 'domain') . '" rel="nofollow">В корзину</a>';
        //$product_item   .=              '<a href="#">';
        //$product_item   .=                  '<img src="'. get_template_directory_uri() .'/src/img/icons/icon-heart.svg" width="25" height="25" alt="добавить в избранное">';
        //$product_item   .=              '</a>';
        $product_item   .=              '<div class="heart-img-wrapper">' . do_shortcode('[ti_wishlists_addtowishlist]') . '</div>';
        $product_item   .=          '</div>';
        $product_item   .=      '</div>';
        $product_item   .=  '</li>';
    }

    return $product_item;
}
