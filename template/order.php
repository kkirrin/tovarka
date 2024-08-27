<?php

add_action('woocommerce_thankyou', 'truemisha_complete_orders');


// автовыполнение заказа
function truemisha_complete_orders($order_id)
{
    if (!$order_id) {
        return;
    }

    $order = wc_get_order($order_id);
    $order->update_status('completed');
}


// Функция "повторить заказ" для вывода LI заказа на странице ЛК

// Получаем ID активного юзера 
$user_id = get_current_user_id();

// форматирование цены формата 123 000
function formatPrice($order_total)
{
    return number_format($order_total, 0, '.', ' ');
}

function show_user_order($user_id)
{

    if ($user_id) {
        $customer_orders = wc_get_orders(
            array(
                'customer' => $user_id,
                'status' => array('wc-pending', 'wc-processing', 'wc-on-hold', 'wc-completed'),
            )
        );

        if ($customer_orders) {
            foreach ($customer_orders as $order) {

                $order_id = $order->get_id();
                $order_total = $order->get_total();
                $formatted_price = formatPrice($order_total);
                $order_number = $order->get_order_number(); // получаем номер заказа
                $order_link = $order->get_view_order_url(); // ссылка на просмотр заказа
                $order_repeat_link = wc_get_endpoint_url('order-pay', $order_id, wc_get_page_permalink('checkout')); //ссылка на повторный заказ
                $order_date = $order->get_date_created(); // дата создания заказа
                $expected_delivery_date = date('j F', strtotime($order_date . '+ 6 days')); // ожидаемую дата доставки вручную
                $order_date_formatter = date('j F', strtotime($order_date)); // дата создания заказа отформатированная 
                $items_count = wc_get_order($order_id)->get_item_count(); // получает количество товаров в заказе

                // Перевод месяцев на русский язык
                $months = array(
                    'January' => 'января',
                    'February' => 'февраля',
                    'March' => 'марта',
                    'April' => 'апреля',
                    'May' => 'мая',
                    'June' => 'июня',
                    'July' => 'июля',
                    'August' => 'августа',
                    'September' => 'сентября',
                    'October' => 'октября',
                    'November' => 'ноября',
                    'December' => 'декабря',
                );

                // русификация месяца
                $expected_delivery_date = str_replace(array_keys($months), array_values($months), $expected_delivery_date);
                // русификация месяца для даты заказа
                $date_final = str_replace(array_keys($months), array_values($months), $order_date_formatter);

                echo '<li class="lk-order-item">';
                echo '    <div class="flex justify-between mb-5">';
                echo '        <div>';
                echo "           <span class='font-medium block'>Заказ №{$order_number}</span>";
                echo "            <span class='text-lg font-bold'>{$date_final}</span>";
                echo '        </div>';
                echo "       <span class='text-xl font-bold'>{$formatted_price} &#x20bd</span>";
                echo '    </div>';

                // Вес товаров
                $order_items = $order->get_items();
                $total_weight = 0;

                foreach ($order->get_items() as $item_id => $item) {
                    $product_item = $item->get_product();
                    $weight = (int) $product_item->get_weight();
                    $total_weight += $weight;
                }

                if (($items_count % 100 < 10 || $items_count % 100 > 20) && in_array($items_count % 10, array(1))) {
                    $suffix = 'товар';
                } else if (($items_count % 100 < 10 || $items_count % 100 > 20) && in_array($items_count % 10, array(2, 3, 4))) {
                    $suffix = 'товара';
                } else {
                    $suffix = 'товаров';
                }

                echo "<p class='text-dark-gray mb-5'> {$items_count} {$suffix} ({$total_weight} кг)</p>";
                echo '    <div class="flex flex-wrap gap-5 items-center justify-between">';
                echo '       <ul class="flex gap-3">';

                // изображение продуктов внутри заказа
                foreach ($order->get_items() as $item_id => $item) {
                    $product = $item->get_product();
                    $product_image = $product->get_image();

                    echo '<li class="lk-product-item">';
                    echo "{$product_image}";
                    echo '</li>';
                }

                echo '         </ul>';
                echo "       <a href='{$order_link}' class='lk-order-item-button'>";
                echo '       <span>Повторить</span>';
                echo '         <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.60654 2.22266C11.2793 2.91714 13.249 5.3026 13.249 8.13859C13.249 11.5187 10.451 14.2588 6.99952 14.2588C3.54801 14.2588 0.75 11.5187 0.75 8.13859C0.75 5.3026 2.71972 2.91714 5.3925 2.22266"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M4.43945 1.44922L5.86995 2.21005L5.10912 3.64055" stroke="white"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>';
                echo ' </a>';

                echo ' </div>';
                echo ' </li>';
            }
        } else {
            echo "У вас нет заказов.";
        }
    } else {
        // тут поменять адрес страницы 
        echo '<p class="auth-wrapper">Вы должны быть <a href="https://ra-market.ru/login/"><span>авторизованны</span></a></p>';
    }
}

// Функция отрисовки инпутов "ПРОФИЛЯ -> Ваши данные"

function add_custom_field($type)
{
    $user = wp_get_current_user();

    $field = '<form class="form-lk" action="#" method="post">';
    $field .= '<div class="form-lk__field">';
    switch ($type) {
        case 'user_name':
            $input_value = esc_attr($user->first_name);
            break;
        case 'user_email':
            $input_type = 'email';
            $input_value = $user->user_email;
            break;
        case 'user_birth':
            $input_type = 'date';
            $input_value = $user->birth;
            $styles = 'padding-right: 76px;';
            break;
        case 'user_pass':
            $input_type = 'password';
            break;
        case 'user_phone':
            $input_type = 'tel';
            $input_value = esc_attr($user->billing_phone);
            break;
        case 'billing_address_1':
            $input_value = esc_attr($user->billing_address_1);
            break;
        case 'billing_wooccm11':
            $input_value = esc_attr($user->billing_wooccm11);
            break;
        case 'billing_wooccm12':
            $input_value = esc_attr($user->billing_wooccm12);
            break;
        case 'billing_wooccm13':
            $input_value = esc_attr($user->billing_wooccm13);
            break;
        case 'billing_wooccm14':
            $input_value = esc_attr($user->billing_wooccm14);
            break;
    }

    $field .= '<input id="' . $type . '" class="input_field" type="' . (isset($input_type) ? $input_type : 'text') . '" name="' . $type . '" value="' . (isset($input_value) ? $input_value : '') . '" disabled' . (isset($styles) ? ' style="' . $styles . '"' : '') . ' />';
    $field .= wp_nonce_field('save_account_details_access');
    $field .= '<div class="edit"></div>';

    $field .= '<button type="submit" name="save_account_details" class="submit hidden"></button>';
    $field .= '<div class="cancel hidden"></div>';
    $field .= '</div>';
    $field .= '</form>';

    return $field;
}

// Функция обработки инпутов
add_action('init', 'handle_custom_name_fields_form_submission');
function handle_custom_name_fields_form_submission()
{
    if (isset($_POST['save_account_details']) && wp_verify_nonce($_POST['_wpnonce'], 'save_account_details_access')) {
        $customer_id = get_current_user_id();

        if (isset($_POST['user_name'])) {
            update_user_meta($customer_id, 'first_name', sanitize_text_field($_POST['user_name']));
        } elseif (isset($_POST['user_email'])) {
            $email = sanitize_email($_POST['user_email']);
            if (is_email($email)) {
                wp_update_user(
                    array(
                        'ID' => $customer_id,
                        'user_email' => $email
                    )
                );
            } else {
                print_r("Введите корректный адрес почты");
            }
        } elseif (isset($_POST['user_birth'])) {
            update_user_meta($customer_id, 'birth', sanitize_text_field($_POST['user_birth']));
        } elseif (isset($_POST['user_phone'])) {
            update_user_meta($customer_id, 'billing_phone', sanitize_text_field($_POST['user_phone']));
        } elseif (isset($_POST['billing_address_1'])) {
            update_user_meta($customer_id, 'billing_address_1', sanitize_text_field($_POST['billing_address_1']));
        } elseif (isset($_POST['billing_wooccm11'])) {
            update_user_meta($customer_id, 'billing_wooccm11', sanitize_text_field($_POST['billing_wooccm11']));
        } elseif (isset($_POST['billing_wooccm12'])) {
            update_user_meta($customer_id, 'billing_wooccm12', sanitize_text_field($_POST['billing_wooccm12']));
        } elseif (isset($_POST['billing_wooccm13'])) {
            update_user_meta($customer_id, 'billing_wooccm13', sanitize_text_field($_POST['billing_wooccm13']));
        } elseif (isset($_POST['billing_wooccm14'])) {
            update_user_meta($customer_id, 'billing_wooccm14', sanitize_text_field($_POST['billing_wooccm14']));
        }
    }
}
