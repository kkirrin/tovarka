<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

add_filter('use_block_editor_for_post_type', '__return_false', 10);

add_theme_support('custom-templates');

// подключение и настройка меню через админку
add_action('after_setup_theme', 'add_menu');

// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post'));



function theme_add_scripts()
{


    // Подключаем файл baguetteBox.min.css
    wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // Подключаем файл animate.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    // Подключаем файл main.css
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

    // Подключаем файл main.css
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css');


    // Подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('swiper-bundle.min', get_template_directory_uri() . '/js/swiper-bundle.min.js');



    // Подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('swiper-bundle.min', get_template_directory_uri() . '/js/swiper-bundle.min.js');
    //  Для картинок 
    wp_enqueue_script('baguettebox', get_template_directory_uri() . '/js/baguettebox.js');
    // Для параллакса
    wp_enqueue_script('simpleParallax', get_template_directory_uri() . '/js/simpleParallax.js');
    // Для wow
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js');
    // Для скролла
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js');

    // wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
}

function add_menu()
{
    register_nav_menu('aside', 'Категории в sidebar');
}

// add_action('admin_menu', 'remove_default_menus');


// Добавляет вкладку и новый тип записей
add_action('init', 'create_news_type');
add_action('init', 'create_best_type');
add_action('init', 'create_sale_type');
function create_news_type()
{
    register_post_type(
        'trands',
        array(
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'rewrite' => array(
                'slug' => 'trands',
                'with_front' => false,
            ),
            'labels' => array(
                'name' => 'Трендовые товары баннеры',
                'singular_name' => 'Трендовые товары баннеры',
                'menu_name' => 'Трендовые товары баннеры',
                'all_items' => 'Все трендовые товары баннеры',
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category')
        )
    );
};
function create_best_type()
{
    register_post_type(
        'best',
        array(
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'rewrite' => array(
                'slug' => 'trands',
                'with_front' => false,
            ),
            'labels' => array(
                'name' => 'Хит продаж баннеры',
                'singular_name' => 'Хит продаж баннеры',
                'menu_name' => 'Хит продаж баннеры',
                'all_items' => 'Все хиты продаж баннеры',
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category')
        )
    );
};

function create_sale_type()
{
    register_post_type(
        'sale',
        array(
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'rewrite' => array(
                'slug' => 'sale',
                'with_front' => false,
            ),
            'labels' => array(
                'name' => 'Товары со скидкой баннеры',
                'singular_name' => 'Товары со скидкой баннеры',
                'menu_name' => 'Товары со скидкой баннеры',
                'all_items' => 'Все Товары со скидкой баннеры',
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category')
        )
    );
};


if (class_exists('WooCommerce')) {
    require_once(get_template_directory() . '/woocommers.php');
}

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
