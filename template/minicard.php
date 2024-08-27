<?php
// функция выводит количество товаров в мини корзине
function minicart_count_after_content()
{
    $items_count = WC()->cart->get_cart_contents_count();
    $text_label = _n('Item', 'Items', $items_count, 'woocommerce');
    if ($items_count) {
        echo $items_count;
    }
}

function minicard_subtotal()
{
    $items_total = WC()->cart->get_cart_subtotal();
    echo $items_total;
}
?>