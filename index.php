<?php
/*
    Template Name: главная
    */
?>

<?php get_header(); ?>

<main>
    <h1 class="visually-hidden">Скрытый заголовок</h1>

    <section class="md:pt-[30px] pt-[6px]">
        <div class="container">
            <div class="flex gap-[10px]">
                <div class="relative md:flex hidden items-center justify-between w-full">
                    <input
                        alt=""
                        placeholder="input search text"
                        class="bg-white p-[8px] rounded-[10px] w-full"
                        style="z-index: 0">
                    <svg class="absolute right-[20px]" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17.5 17.5L13.875 13.875" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <button class="cart_btn">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1H1.60632C2.62694 1 3.48384 1.7685 3.59452 2.78311L4.40548 10.2169C4.51616 11.2315 5.37306 12 6.39368 12H15.046C15.9602 12 16.7581 11.3801 16.984 10.4942L18.3639 5.08311C18.6864 3.81854 17.731 2.58889 16.426 2.58889H4.6M4.62476 15.6249H5.37476M4.62476 16.3749H5.37476M15.6248 15.6249H16.3748M15.6248 16.3749H16.3748M6 16C6 16.5523 5.55229 17 5 17C4.44772 17 4 16.5523 4 16C4 15.4477 4.44772 15 5 15C5.55229 15 6 15.4477 6 16ZM17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z" stroke="white" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

        </div>
    </section>

    <section class="md:pt-[60px] pt-[40px]">
        <div class="container">
            <div class="flex gap-[27px]">
                <aside id="category_aside" class="min-w-[300px] rounded-[30px] bg-white p-[2px]">
                    <nav>
                        <!-- <ul class="text-black sub-menu">
                            <li class="pt-[14px] pl-[25px] pb-[14px] flex gap-[10px]">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/auto.svg'; ?>" alt="auto">
                                <a href="" class="">Авто</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#" class="">
                                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="cat">
                                            <p>
                                                Category 1
                                            </p>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="">
                                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="cat">
                                            <p>
                                                Category 1
                                            </p>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="#" class="">
                                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="cat">
                                            <p>
                                                Category 1
                                            </p>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="#" class="">
                                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="cat">
                                            <p>
                                                Category 1
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pt-[14px] pl-[25px] pb-[14px] flex gap-[10px]">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/auto.svg'; ?>" alt="auto">
                                <a href="" class="">Аксессуары</a>
                            </li>
                            <li class="pt-[14px] pl-[25px] pb-[14px] flex gap-[10px]">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/auto.svg'; ?>" alt="auto">
                                <a href="" class="">Бинокли/монокуляры</a>
                            </li>
                        </ul> -->

                        <ul class="text-black sub-menu">
                            <?php
                            $categories = get_terms(array(
                                'taxonomy'   => 'product_cat',
                                'orderby'    => 'meta_value_num',
                                'order'      => 'ASC',
                                'hide_empty' => false,
                                'parent'     => 0, // Задаем значение parent в 0, чтобы получить только родительские категории
                            ));

                            // Проверяем, растет ли массив категорий
                            if (!is_wp_error($categories) && !empty($categories)) :
                                foreach ($categories as $category) :
                            ?>
                                    <li class="pt-[14px] pl-[25px] pb-[14px] flex gap-[10px]">
                                        <a href="<?php echo get_category_link($category->term_id); ?>" style="display: flex; justify-content: center; align-items: center; gap: 10px;">
                                            <?php
                                            $thumbnail_url = wp_get_attachment_url(get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true));
                                            ?>
                                            <img style="max-width: 40px; max-height: 40px;" src="<?php echo esc_url($thumbnail_url ? $thumbnail_url : '/wp-content/uploads/woocommerce-placeholder.png'); ?>" alt="<?php echo esc_attr($category->name); ?>" />
                                            <p class="text"><?php echo esc_html($category->name); ?></p>
                                        </a>

                                        <?php
                                        // Получаем подкатегории
                                        $sub_categories = get_terms(array(
                                            'taxonomy'   => 'product_cat',
                                            'parent'     => $category->term_id,
                                            'orderby'    => 'meta_value_num',
                                            'order'      => 'ASC',
                                            'hide_empty' => false,
                                        ));

                                        // Включаем проверку, что есть подкатегории
                                        if (!is_wp_error($sub_categories) && !empty($sub_categories)) :
                                        ?>
                                            <ul class="sub-menu">
                                                <?php foreach ($sub_categories as $sub_category) : ?>
                                                    <li>
                                                        <a href="<?php echo get_category_link($sub_category->term_id); ?>">
                                                            <span class="image">
                                                                <?php
                                                                $sub_thumbnail_url = wp_get_attachment_url(get_woocommerce_term_meta($sub_category->term_id, 'thumbnail_id', true));
                                                                ?>
                                                                <img src="<?php echo esc_url($sub_thumbnail_url ? $sub_thumbnail_url : '/wp-content/uploads/woocommerce-placeholder.png'); ?>" alt="<?php echo esc_attr($sub_category->name); ?>" />
                                                            </span>
                                                            <p><?php echo esc_html($sub_category->name); ?></p>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </nav>

                </aside>

                <div class="main-swiper md:max-w-[1100px] max-w-full">
                    <div class="main-wrapper overflow-hidden">
                        <h2 class="text-black md:text-[38px] text-[24px] font-medium">Широкий выбор <span class="text-blue md:text-[38px] text-[24px]">трендовых</span> товаров</h2>
                        <span class="text-[16px]">Качество, проверенное временем</span>
                        <div class="main-item relative">

                            <div class="md:block hidden absolute" style="z-index: 1000;">
                                <a href="/shop" class=" flex justify-center text-white rounded-[40px] bg-blue px-[15px] w-[280px] py-[20px] mt-[20px] font-medium btn_catalog--blue clip_box ">
                                    <p>Перейти в каталог</p>
                                </a>
                            </div>

                            <div class="md:hidden block absolute" style="z-index: 1000;">
                                <button href="/shop" class=" flex justify-center text-white rounded-[40px] bg-blue px-[15px] w-[160px] py-[15px] mt-[20px] font-medium btn_catalog--blue clip_box ">
                                    <p>Каталог</p>
                                </button>
                            </div>


                            <?php
                            // Запрос WP, чтобы получить посты типа 'trands'
                            $args = array(
                                'post_type' => 'trands',
                                'posts_per_page' => -1, // Получить все посты (или укажите нужное количество)
                            );
                            $data = get_posts($args); // Используем get_posts для получения записей

                            // Проверяем, есть ли записи
                            if ($data):
                                foreach ($data as $post):
                                    setup_postdata($post); // Настраиваем глобальную переменную $post для использования в шаблоне

                                    // Получаем значения галереи ACF
                                    $gallery = get_field('trand_gallery'); // Получаем основную галерею
                                    $gallery_s = get_field('trand_gallery_s'); // Получаем малую галерею

                                    // Проверяем, что хотя бы одна галерея не пустая
                                    if ($gallery || $gallery_s) : ?>
                                        <div class="swiper-wrapper relative">
                                            <?php
                                            // Если есть основная галерея
                                            if ($gallery) :
                                                // Проходим по всем изображениям в галерее
                                                foreach ($gallery as $image) :
                                                    $img_url = esc_url($image['url']); // Получаем URL изображения
                                                    $img_alt = esc_attr($image['alt']); // Получаем alt текст изображения
                                            ?>
                                                    <div class="swiper-slide relative pt-[15px]">
                                                        <img class="md:block hidden w-full" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">
                                                        <img class="md:hidden block" style="width: 100%;" src="<?php echo $gallery_s ? esc_url($gallery_s[0]['url']) : ''; ?>" alt="<?php echo $gallery_s ? esc_attr($gallery_s[0]['alt']) : ''; ?>">
                                                    </div>
                                            <?php
                                                endforeach;
                                            endif; // end if ($gallery)
                                            ?>
                                        </div>
                            <?php endif; // end if ($gallery || $gallery_s)
                                endforeach; // end foreach ($data)
                                wp_reset_postdata(); // Сбрасываем глобальную переменную $post
                            endif; // end if ($data)
                            ?>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div id="all_cats" class="all_cats">
                        <div style="background-image: url('<?php echo get_template_directory_uri() . '/src/img/main/all_cat.png'; ?>'); background-repeat: no-repeat; background-size: cover;">
                            <p>Все бренды в <br> одном месте </p>

                            <svg width="104" height="16" viewBox="0 0 104 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M103.64 8.59275C104.02 8.2051 104.014 7.58258 103.626 7.20231L97.3091 1.00551C96.9214 0.62524 96.2989 0.631226 95.9186 1.01888C95.5384 1.40653 95.5444 2.02905 95.932 2.40931L101.547 7.91759L96.039 13.5328C95.6587 13.9205 95.6647 14.543 96.0523 14.9233C96.44 15.3035 97.0625 15.2975 97.4428 14.9099L103.64 8.59275ZM0.69085 9.87064L102.947 8.88741L102.928 6.92103L0.671943 7.90426L0.69085 9.87064Z" fill="white" />
                            </svg>

                        </div>

                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/dyson.png'; ?>" alt="all_cats">
                        </div>

                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/inkbird.png'; ?>" alt="all_cats">
                        </div>

                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/tmakota.png'; ?>" alt="all_cats">
                        </div>

                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/umiio.png'; ?>" alt="all_cats">
                        </div>

                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/dewalt.png'; ?>" alt="all_cats">
                        </div>

                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/frrby.png'; ?>" alt="all_cats">
                        </div>

                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/xiomi.png'; ?>" alt="all_cats">
                        </div>

                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/yandex.png'; ?>" alt="all_cats">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="md:pt-[60px] pt-[40px]">
        <div class="container">


            <div class="gallery-wrapper new-swiper overflow-hidden relative">
                <div class="md:hidden flex justify-between items-center bg-gray relative h-[100px]">
                    <div class="pt-[30px] pl-[20px] rounded-[20px]">
                        <h2 class=" text-black md:text-[38px] text-[20px]">Новинки</h2>
                    </div>

                    <div class="clip_box top right">
                        <a href="/shop" class="clip flex justify-center text-white text-center rounded-[40px] bg-blue px-[15px] md:w-[280px] sm:w-[200px] w-[160px]  py-[20px] mt-[20px] font-medium btn_catalog--blue ">
                            <p class="md:text-[16px] text-[14px]">Перейти в каталог</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-wrapper new-wrapper">


                    <div class="new-slide">
                        <div class="new-item">
                            <div class="flex items-center justify-between bg-gray">
                                <h2 class="md:block hidden text-black md:text-[38px] text-[20px]">Новинки</h2>
                                <div class="md:block hidden clip_box top right">
                                    <a href="" class="clip flex justify-center text-white text-center rounded-[40px] bg-blue px-[15px] md:w-[280px] sm:w-[200px] w-[160px]  py-[20px] mt-[20px] font-medium btn_catalog--blue ">
                                        <p class="md:text-[16px] text-[14px]">Перейти в каталог</p>
                                    </a>
                                </div>
                            </div>

                            <div class="relative">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/pc.png'; ?>" alt="">
                            </div>

                            <p class="font-black md:text-[24px] text-[14px]">Ноутбук FRBBY V16 PRO</p>
                            <p class="font-black md:text-[24px] text-[14px]">28 550 ₽</p>
                        </div>
                    </div>

                    <div class="new-slide">
                        <div class="new-item">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/main/bot.png'; ?>" alt="">
                            <p class="font-black md:text-[24px] text-[14px]">Робот пылесос Xiaomi Roborock</p>
                            <p class="font-black md:text-[24px] text-[14px]">63 300 ₽</p>
                        </div>
                    </div>

                    <div class="new-slide">
                        <div class="new-item">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/main//thing.png'; ?>" alt="">
                            <p class="font-black md:text-[24px] text-[14px]">Проектор Frbby P20PRO Android</p>
                            <p class="font-black md:text-[24px] text-[14px]">8 400 ₽</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="md:hidden block pt-[40px]">
        <div class="container relative overflow-hidden">
            <h3 class="font-medium text-[16px] py-[20px]">Все бренды в одном месте </h3>
            <div id="all_cats--second" class="all_cats all_cats--second">
                <div class="category-swiper overflow-hidden">
                    <div class="category-item">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/dyson.png'; ?>" alt="all_cats">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/inkbird.png'; ?>" alt="all_cats">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/tmakota.png'; ?>" alt="all_cats">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/umiio.png'; ?>" alt="all_cats">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/dewalt.png'; ?>" alt="all_cats">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/frrby.png'; ?>" alt="all_cats">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/xiomi.png'; ?>" alt="all_cats">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/yandex.png'; ?>" alt="all_cats">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hit-swiper md:pt-[60px] pt-[40px]">
        <div class="container">
            <div class="hit-item overflow-hidden">
                <div class="swiper-wrapper">

                    <?php
                    $args = array(
                        'post_type' => 'best',
                        'posts_per_page' => -1,
                    );
                    $data = get_posts($args);

                    if ($data):
                        foreach ($data as $post):
                            setup_postdata($post);

                            $gallery = get_field('best_gallery');
                            $gallery_s = get_field('best_gallery_s');

                            if ($gallery || $gallery_s) : ?>
                                <div class="swiper-wrapper relative">
                                    <?php
                                    if ($gallery) :
                                        foreach ($gallery as $image) :
                                            $img_url = esc_url($image['url']);
                                            $img_alt = esc_attr($image['alt']);
                                    ?>
                                            <div class="swiper-slide">
                                                <img class="md:flex hidden absolute top-0 right-[160px]" src="<?php echo get_template_directory_uri() . '/src/img/main/hit_btn.png'; ?>" alt="">
                                                <img class="md:flex hidden mt-[60px]" style="width: 100%;" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">

                                                <?php
                                                if ($gallery_s) :
                                                    foreach ($gallery_s as $small_image) :
                                                        $small_img_url = esc_url($small_image['url']);
                                                        $small_img_alt = esc_attr($small_image['alt']);
                                                ?>
                                                        <img class="md:hidden block absolute top-[30px] right-[40px]" src="<?php echo get_template_directory_uri() . '/src/img/main/hit_btn_s.png'; ?>" alt="">
                                                        <img class="md:hidden block" src="<?php echo $small_img_url; ?>" alt="<?php echo $small_img_alt; ?>">
                                                <?php
                                                    endforeach; // end foreach ($gallery_s)
                                                endif; // end if ($gallery_s)
                                                ?>
                                            </div>
                                    <?php
                                        endforeach; // end foreach ($gallery)
                                    endif; // end if ($gallery)
                                    ?>
                                </div>
                    <?php endif; // end if ($gallery || $gallery_s)
                        endforeach; // end foreach ($data)
                        wp_reset_postdata(); // Сбрасываем глобальную переменную $post
                    endif; // end if ($data)
                    ?>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>



    <section class="md:pt-[60px] pt-[40px]">
        <div class="container">
            <div class="grid md:grid-cols-4 grid-cols-2 gap-[30px]">
                <div class="bg-white rounded-[30px] min-w-[255] min-h-[172px] flex flex-col items-center justify-center gap-[10px]">
                    <svg width="100.000000" height="60.000000" viewBox="0 0 100 60" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs />
                        <path id="Vector" d="M51.6 20C51.16 20.01 50.75 20.19 50.44 20.5L41.64 29.27L36.23 23.87C34.71 22.29 32.26 24.73 33.85 26.24L40.46 32.84C41.11 33.49 42.18 33.49 42.84 32.84L52.82 22.88C53.92 21.81 53.11 20 51.6 20L51.6 20ZM1.66 33.33L11.66 33.33C12.59 33.33 13.33 34.07 13.33 35C13.33 35.92 12.59 36.66 11.66 36.66L1.66 36.66C0.74 36.66 0 35.92 0 35C0 34.07 0.74 33.33 1.66 33.33ZM1.66 20L11.66 20C12.59 20 13.33 20.74 13.33 21.66C13.33 22.59 12.59 23.33 11.66 23.33L1.66 23.33C0.74 23.33 0 22.59 0 21.66C0 20.74 0.74 20 1.66 20ZM1.66 6.66L11.66 6.66C12.59 6.66 13.33 7.41 13.33 8.33C13.33 9.25 12.59 10 11.66 10L1.66 10C0.74 10 0 9.25 0 8.33C0 7.41 0.74 6.66 1.66 6.66ZM81.66 43.33C77.08 43.33 73.33 47.08 73.33 51.66C73.33 56.25 77.08 60 81.66 60C86.25 60 90 56.25 90 51.66C90 47.08 86.25 43.33 81.66 43.33ZM81.66 46.66C84.44 46.66 86.66 48.88 86.66 51.66C86.66 54.44 84.44 56.66 81.66 56.66C78.88 56.66 76.66 54.44 76.66 51.66C76.66 48.88 78.88 46.66 81.66 46.66ZM38.33 43.33C33.75 43.33 30 47.08 30 51.66C30 56.25 33.75 60 38.33 60C42.91 60 46.66 56.25 46.66 51.66C46.66 47.08 42.91 43.33 38.33 43.33ZM38.33 46.66C41.11 46.66 43.33 48.88 43.33 51.66C43.33 54.44 41.11 56.66 38.33 56.66C35.55 56.66 33.33 54.44 33.33 51.66C33.33 48.88 35.55 46.66 38.33 46.66ZM21.66 0C18.92 0 16.66 2.26 16.66 5L16.66 41.66C16.66 44.4 18.92 46.66 21.66 46.66L28.33 46.66C30.58 46.7 30.58 43.3 28.33 43.33L21.66 43.33C20.71 43.33 20 42.62 20 41.66L20 5C20 4.04 20.71 3.33 21.66 3.33L65 3.33C65.95 3.33 66.66 4.04 66.66 5L66.66 43.33L48.33 43.33C46.13 43.33 46.17 46.7 48.33 46.66L71.66 46.66C73.86 46.66 73.84 43.33 71.66 43.33L70 43.33L70 13.33L84.09 13.33L96.66 32.98L96.66 41.66C96.66 42.62 95.95 43.33 95 43.33L91.66 43.33C89.48 43.33 89.48 46.66 91.66 46.66L95 46.66C97.74 46.66 100 44.4 100 41.66L100 32.5C100 32.18 99.9 31.86 99.74 31.6L86.4 10.76C86.1 10.29 85.57 10 85 10L70 10L70 5C70 2.26 67.74 0 65 0L21.66 0Z" fill="#3B8ED7" fill-opacity="1.000000" fill-rule="nonzero" />
                    </svg>
                    <p class="font-medium text-black md:text-[16px] text-[12px] text-center">Доставка в любой город <br> России</p>
                </div>

                <div class="bg-white rounded-[30px] min-w-[255] min-h-[172px] flex flex-col items-center justify-center gap-[10px]">
                    <svg width="70.000000" height="70.000000" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs />
                        <path id="sVector 7" d="M35 19.25L35 37.18L45.5 42.43" stroke="#3B8ED7" stroke-opacity="1.000000" stroke-width="3.000000" />
                        <circle id="Ellipse 365" cx="35.000000" cy="35.000000" r="33.500000" stroke="#3B8ED7" stroke-opacity="1.000000" stroke-width="3.000000" />
                    </svg>

                    <p class="font-medium text-black md:text-[16px] text-[12px] text-center">Доставка в течение <br>1 часа по Владивостоку</p>
                </div>

                <div class="bg-white rounded-[30px] min-w-[255] min-h-[172px] flex flex-col items-center justify-center gap-[10px]">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.7775 63.5C40.2603 63.5 48.233 60.1979 54.2409 54.1976C59.8143 48.6313 63.1016 41.2347 63.4983 33.3664C63.5361 32.5928 62.9315 31.9135 62.1569 31.8758C61.3823 31.838 60.7022 32.4418 60.6644 33.2155C60.3055 40.3668 57.3015 47.103 52.2194 52.1787C46.7594 57.6318 39.4857 60.6508 31.7586 60.6508C24.0315 60.6508 16.7578 57.6507 11.2978 52.1787C0.0188902 40.914 0.0188902 22.5734 11.2978 11.3087C20.9142 1.70445 35.8772 0.100591 47.2506 7.32737L44.0577 11.2332L53.2207 10.3087L52.295 1.15725L49.0643 5.11971C36.5385 -3.03164 19.9318 -1.31457 9.2952 9.3086C-3.0984 21.6866 -3.0984 41.8008 9.2952 54.1788C15.322 60.1979 23.2947 63.5 31.7775 63.5Z" fill="#3B8ED7" />
                        <path d="M46.7595 25.2339C46.7595 25.2151 46.7595 25.1962 46.7406 25.1962C46.7406 25.1585 46.7217 25.1396 46.7217 25.1019C46.7217 25.083 46.7028 25.0452 46.7028 25.0264C46.7028 25.0075 46.6839 24.9886 46.6839 24.9698C46.6461 24.8754 46.6083 24.7999 46.5516 24.7245L40.5438 15.9127C40.2793 15.5165 39.8447 15.29 39.3724 15.29H24.1449C23.6726 15.29 23.2381 15.5165 22.9736 15.9127L16.9657 24.7056C16.909 24.7811 16.8712 24.8754 16.8335 24.9509C16.8335 24.9698 16.8146 24.9886 16.8146 25.0075C16.7957 25.0264 16.7957 25.0641 16.7957 25.083C16.7957 25.1207 16.7768 25.1396 16.7768 25.1773C16.7768 25.1962 16.7768 25.2151 16.7579 25.2151C16.739 25.3094 16.7201 25.4038 16.7201 25.4981V46.8011C16.7201 47.5747 17.3624 48.2162 18.137 48.2162H45.3614C46.136 48.2162 46.7784 47.5747 46.7784 46.8011V25.517C46.7784 25.4038 46.7784 25.3094 46.7595 25.2339ZM24.9006 18.1204H38.6167L42.6786 24.0829H20.8198L24.9006 18.1204ZM43.9445 45.4048H19.5729V26.9321H43.9634V45.4048H43.9445Z" fill="#3B8ED7" />
                    </svg>

                    <p class="font-medium text-black md:text-[16px] text-[12px] text-center">Проверка товаров <br> перед отправкой</p>
                </div>

                <div class="bg-white rounded-[30px] min-w-[255] min-h-[172px] flex flex-col items-center justify-center gap-[10px]">
                    <svg width="67" height="62" viewBox="0 0 67 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M61.6641 14.2227H44.2031C46.918 12.2695 48.5977 9.59375 48.8125 7.01562C49.0469 4.30078 47.5234 1.09766 42.6211 0.277343C42.0742 0.179687 41.5273 0.140625 41 0.140625C38.8711 0.140625 37.1133 0.921876 35.7852 2.44531C34.5352 3.87109 33.8516 5.80469 33.4805 7.75781C33.1094 5.80469 32.4063 3.85156 31.1758 2.44531C29.8672 0.921876 28.1094 0.140625 25.9805 0.140625C25.4727 0.140625 24.9258 0.179687 24.3594 0.277343C19.457 1.09766 17.9531 4.30078 18.168 7.01562C18.3828 9.59375 20.082 12.2695 22.7773 14.2227H5.31641C2.875 14.2227 0.902344 16.1953 0.902344 18.6367V21.4297C0.902344 23.8711 2.875 25.8438 5.31641 25.8438H6.60547V56.3906C6.60547 59.418 9.06641 61.8789 12.0938 61.8789H54.8867C57.9141 61.8789 60.375 59.418 60.375 56.3906V25.8438H61.6641C64.1055 25.8438 66.0781 23.8711 66.0781 21.4297V18.6367C66.0781 16.1953 64.1055 14.2227 61.6641 14.2227ZM38.0117 4.35937C38.7734 3.48047 39.75 3.07031 41.0195 3.07031C41.3711 3.07031 41.7617 3.10938 42.1523 3.16797C43.6367 3.42188 46.1172 4.22266 45.9023 6.78125C45.668 9.61328 42.0742 13.6367 36.0977 14.1641C35.9023 11.4102 36.0391 6.64453 38.0117 4.35937ZM21.0977 6.78125C20.8828 4.22266 23.3633 3.42188 24.8477 3.16797C25.2383 3.10938 25.6289 3.07031 25.9805 3.07031C27.25 3.07031 28.2266 3.5 28.9883 4.35937C30.9609 6.625 31.0977 11.3906 30.9023 14.1641C24.9258 13.6367 21.332 9.61328 21.0977 6.78125ZM57.4453 56.3711C57.4453 57.7773 56.293 58.9297 54.8867 58.9297H12.0938C10.6875 58.9297 9.53516 57.7773 9.53516 56.3711V25.8438H57.4258V56.3711H57.4453ZM63.1484 21.4297C63.1484 22.25 62.4844 22.9141 61.6641 22.9141H58.9102H8.08984H5.33594C4.51563 22.9141 3.85156 22.25 3.85156 21.4297V18.6367C3.85156 17.8164 4.51563 17.1523 5.33594 17.1523H61.6641C62.4844 17.1523 63.1484 17.8164 63.1484 18.6367V21.4297Z" fill="#3B8ED7" />
                        <path d="M25.8438 39.9648C28.7344 39.9648 31.0781 37.6211 31.0781 34.7305C31.0781 31.8398 28.7344 29.4961 25.8438 29.4961C22.9531 29.4961 20.6094 31.8398 20.6094 34.7305C20.6094 37.6211 22.9531 39.9648 25.8438 39.9648ZM25.8438 32.4258C27.1133 32.4258 28.1484 33.4609 28.1484 34.7305C28.1484 36 27.1133 37.0352 25.8438 37.0352C24.5742 37.0352 23.5391 36 23.5391 34.7305C23.5391 33.4609 24.5742 32.4258 25.8438 32.4258Z" fill="#3B8ED7" />
                        <path d="M41.1563 44.7891C38.2656 44.7891 35.9219 47.1328 35.9219 50.0234C35.9219 52.9141 38.2656 55.2578 41.1563 55.2578C44.0469 55.2578 46.3906 52.9141 46.3906 50.0234C46.3906 47.1328 44.0469 44.7891 41.1563 44.7891ZM41.1563 52.3477C39.8867 52.3477 38.8516 51.3125 38.8516 50.043C38.8516 48.7734 39.8867 47.7383 41.1563 47.7383C42.4258 47.7383 43.4609 48.7734 43.4609 50.043C43.4609 51.3125 42.4258 52.3477 41.1563 52.3477Z" fill="#3B8ED7" />
                        <path d="M22.0547 53.832C22.3477 54.125 22.7188 54.2617 23.0898 54.2617C23.4609 54.2617 23.832 54.125 24.125 53.832L44.9453 33.0117C45.5117 32.4453 45.5117 31.5078 44.9453 30.9414C44.3789 30.375 43.4414 30.375 42.875 30.9414L22.0547 51.7617C21.4688 52.3281 21.4688 53.2656 22.0547 53.832Z" fill="#3B8ED7" />
                    </svg>

                    <p class="font-medium text-black md:text-[16px] text-[12px] text-center">Бонусы за покупки</p>
                </div>


            </div>
        </div>
    </section>

    <section id="product_p" class="md:pt-[60px] pt-[40px] product-popular-swiper overflow-hidden ">
        <div class="container product-popular-wrapper overflow-hidden">
            <h2 class="md:text-[24px] text-[20px] font-medium">Популярный товар</h2>
            <div class="product_popular-item relative md:pt-[24px] pt-[16px]">
                <div class="swiper-wrapper md:p-[20px] p-[0px] relative">
                    <div class="swiper-slide rounded-[30px]">
                        <div class="bg-white rounded-[30px] p-[15px] min-h-[440px]">
                            <img class="md:scale-100 scale-75" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/src/img/main/product_p_1.png'; ?>" alt="">
                            <p class="text-black font-bold md:mt-[41px] sm:mt-[16px] mt-[15px]">19 000 Р</p>
                            <p class="text-black pt-[8px] font-medium">Видео проектор Aspect, Android 9.0, WIFI, домашний, кинотеатр</p>
                        </div>
                    </div>

                    <div class="swiper-slide rounded-[30px]">
                        <div class="bg-white rounded-[30px] p-[15px] min-h-[440px]">
                            <img class="md:scale-100 scale-75" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/src/img/main/product_p_1.png'; ?>" alt="">
                            <p class="text-black font-bold md:mt-[41px] sm:mt-[16px] mt-[15px]">19 000 Р</p>
                            <p class="text-black pt-[8px] font-medium">Видео проектор Aspect, Android 9.0, WIFI, домашний, кинотеатр</p>
                        </div>
                    </div>

                    <div class="swiper-slide rounded-[30px]">
                        <div class="bg-white rounded-[30px] p-[15px] min-h-[440px]">
                            <img class="md:scale-100 scale-75" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/src/img/main/product_p_1.png'; ?>" alt="">
                            <p class="text-black font-bold md:mt-[41px] sm:mt-[16px] mt-[15px]">19 000 Р</p>
                            <p class="text-black pt-[8px] font-medium">Видео проектор Aspect, Android 9.0, WIFI, домашний, кинотеатр</p>
                        </div>
                    </div>

                    <div class="swiper-slide rounded-[30px]">
                        <div class="bg-white rounded-[30px] p-[15px] min-h-[440px]">
                            <img class="md:scale-100 scale-75" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/src/img/main/product_p_1.png'; ?>" alt="">
                            <p class="text-black font-bold md:mt-[41px] sm:mt-[16px] mt-[15px]">19 000 Р</p>
                            <p class="text-black pt-[8px] font-medium">Видео проектор Aspect, Android 9.0, WIFI, домашний, кинотеатр</p>
                        </div>
                    </div>

                    <div class="swiper-slide rounded-[30px]">
                        <div class="bg-white rounded-[30px] p-[15px] min-h-[440px]">
                            <img class="md:scale-100 scale-75" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/src/img/main/product_p_1.png'; ?>" alt="">
                            <p class="text-black font-bold md:mt-[41px] sm:mt-[16px] mt-[15px]">19 000 Р</p>
                            <p class="text-black pt-[8px] font-medium">Видео проектор Aspect, Android 9.0, WIFI, домашний, кинотеатр</p>
                        </div>
                    </div>v
                    <div class="swiper-slide rounded-[30px]">
                        <div class="bg-white rounded-[30px] p-[15px] min-h-[440px]">
                            <img class="md:scale-100 scale-75" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/src/img/main/product_p_1.png'; ?>" alt="">
                            <p class="text-black font-bold md:mt-[41px] sm:mt-[16px] mt-[15px]">19 000 Р</p>
                            <p class="text-black pt-[8px] font-medium">Видео проектор Aspect, Android 9.0, WIFI, домашний, кинотеатр</p>
                        </div>
                    </div>
                    <div class="swiper-slide rounded-[30px]">
                        <div class="bg-white rounded-[30px] p-[15px] min-h-[440px]">
                            <img class="md:scale-100 scale-75" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/src/img/main/product_p_1.png'; ?>" alt="">
                            <p class="text-black font-bold md:mt-[41px] sm:mt-[16px] mt-[15px]">19 000 Р</p>
                            <p class="text-black pt-[8px] font-medium">Видео проектор Aspect, Android 9.0, WIFI, домашний, кинотеатр</p>
                        </div>
                    </div>
                </div>

                <div class="popular-slider__btns" style="
                                            z-index: 100;
                                            bottom: 260px;
                                        ">
                    <button class="product-popular-prev rounded-full bg-white p-[10px]">
                        <img src="<?php echo get_template_directory_uri() . '/src/img/icons/left.svg'; ?>" alt="">
                    </button>
                    <button class="product-popular-next rounded-full bg-white p-[10px]">
                        <img src="<?php echo get_template_directory_uri() . '/src/img/icons/right.svg'; ?>" alt="">
                    </button>
                </div>
            </div>



        </div>
    </section>



    <section class="md:pt-[60px] pt-[40px]">
        <div class="container">
            <div id="sale_list" class="flex gap-[30px]">

                <div class="md:flex hidden flex-col items-center justify-center relative w-[30%]">
                    <div class="absolute -top-[0px]">
                        <img class="scale-90" src="<?php echo get_template_directory_uri() . '/src/img/main/persent.png'; ?>" alt="">
                    </div>

                    <div class="flex flex-col items-center justify-center items gap-[10px] p-[20px] rounded-[30px] w-[100%] h-[100%] relative" style="background-image: url('<?php echo get_template_directory_uri() . '/src/img/main/sale_pattern.png'; ?>'); background-position: center; background-repeat: no-repeat; background-size: contain; background-position-y: 76px;">
                        <div class="flex flex-col items-center justify-center">
                            <img class="max-w-[110px] max-h-[110px]" src="<?php echo get_template_directory_uri() . '/src/img/main/pngwing 1.png'; ?>" alt="">
                        </div>

                        <div class="flex gap-[10px] flex-col absolute bottom-[20px]">
                            <div>
                                <p class="md:text-[24px] text-[16px] font-black">Телескоп F30070M</p>
                            </div>
                            <div class="flex gap-[10px] ">
                                <p class="text-[20px] text-black font-medium">6 950 ₽</p>
                                <p class="text-[20px] text-light-gray font-medium">7 722 ₽</p>
                            </div>
                        </div>
                    </div>

                </div>


                <?php
                $args = array(
                    'post_type' => 'sale',
                    'posts_per_page' => -1,
                );
                $data = get_posts($args);

                if ($data):
                    foreach ($data as $post):
                        setup_postdata($post);

                        $gallery = get_field('sale_gallery');
                        $gallery_s = get_field('sale_gallery_s');

                        if ($gallery || $gallery_s) : ?>
                            <div class="swiper-wrapper relative">
                                <?php
                                if ($gallery) :
                                    foreach ($gallery as $image) :
                                        $img_url = esc_url($image['url']);
                                        $img_alt = esc_attr($image['alt']);
                                ?>
                                        <div class="swiper-slide">
                                            <img class="md:flex hidden absolute top-0 right-[160px]" src="<?php echo get_template_directory_uri() . '/src/img/main/hit_btn.png'; ?>" alt="">
                                            <img class="md:flex hidden mt-[60px]" style="width: 100%;" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">

                                            <?php
                                            if ($gallery_s) :
                                                foreach ($gallery_s as $small_image) :
                                                    $small_img_url = esc_url($small_image['url']);
                                                    $small_img_alt = esc_attr($small_image['alt']);
                                            ?>

                                                    <div class="md:flex hidden w-full rounded-[30px]">
                                                        <div class="relative flex flex-col w-full">
                                                            <img class="max-h-[600px] object-contain" src="<?php echo $img_url; ?>" alt="">

                                                            <div class="clip_box bottom left">
                                                                <a href="" class="clip flex justify-center text-white text-center rounded-[40px] bg-blue px-[15px] w-[280px] py-[20px] mt-[20px] font-medium btn_catalog--blue clip_box ">
                                                                    <p class="flex justify-center">Смотреть все</p>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="sale-swiper overflow-hidden md:hidden block" style="width: max-content;">
                                                        <div class="swiper-wrapper" style="width: max-content;">
                                                            <div class="sale-item--small">
                                                                <div class="relative">
                                                                    <img style="width: 100%;" src="<?php echo $small_img_url; ?>" alt="">
                                                                </div>
                                                                <div class="clip_box bottom left">
                                                                    <a href="" class="clip flex justify-center text-white text-center rounded-[40px] bg-blue px-[15px] w-[160px] py-[20px] mt-[20px] font-medium btn_catalog--blue clip_box ">
                                                                        <p class="flex justify-center">Смотреть все</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-pagination"></div>
                                                        </div>
                                                    </div>
                                            <?php
                                                endforeach; // end foreach ($gallery_s)
                                            endif; // end if ($gallery_s)
                                            ?>
                                        </div>
                                <?php
                                    endforeach; // end foreach ($gallery)
                                endif; // end if ($gallery)
                                ?>
                            </div>
                <?php endif; // end if ($gallery || $gallery_s)
                    endforeach; // end foreach ($data)
                    wp_reset_postdata(); // Сбрасываем глобальную переменную $post
                endif; // end if ($data)
                ?>



                <div class="sale-swiper overflow-hidden md:hidden block" style="width: max-content;">
                    <div class="swiper-wrapper" style="width: max-content;">
                        <div class="sale-item--small">
                            <div class="relative">
                                <img style="width: 100%;" src="<?php echo get_template_directory_uri() . '/src/img/main/sale_s.png'; ?>" alt="">
                            </div>
                            <div class="clip_box bottom left">
                                <a href="" class="clip flex justify-center text-white text-center rounded-[40px] bg-blue px-[15px] w-[160px] py-[20px] mt-[20px] font-medium btn_catalog--blue clip_box ">
                                    <p class="flex justify-center">Смотреть все</p>
                                </a>
                            </div>
                        </div>
                        <div class="sale-item--small">
                            <div class="relative">
                                <img style="width: 100%;" src="<?php echo get_template_directory_uri() . '/src/img/main/sale_s.png'; ?>" alt="">
                            </div>
                            <div class="clip_box bottom left">
                                <a href="" class="clip flex justify-center text-white text-center rounded-[40px] bg-blue px-[15px] w-[160px] py-[20px] mt-[20px] font-medium btn_catalog--blue clip_box ">
                                    <p class="flex justify-center">Смотреть все</p>
                                </a>
                            </div>
                        </div>
                        <div class="sale-item--small">
                            <div class="relative">
                                <img style="width: 100%;" src="<?php echo get_template_directory_uri() . '/src/img/main/sale_s.png'; ?>" alt="">
                            </div>
                            <div class="clip_box bottom left">
                                <a href="" class="clip flex justify-center text-white text-center rounded-[40px] bg-blue px-[15px] w-[160px] py-[20px] mt-[20px] font-medium btn_catalog--blue clip_box ">
                                    <p class="flex justify-center">Смотреть все</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="cat_p" class="md:pt-[60px] pt-[40px]">
        <div class="container">
            <h2 class="md:text-[24px] text-[20px] font-medium">Популярные категории</h2>
            <ul class="grid md:grid-cols-4 grid-cols-2 gap-[30px] md:pt-[24px] pt-[16px]">
                <li>
                    <a href="">
                        <div class="bg-white rounded-[17px] min-h-[190px] p-[20px]">
                            <img class="object-contain m-auto max-h-[200px] w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="">
                        </div>
                        <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                    </a>
                </li>

                <li>
                    <a href="">
                        <div class="bg-white rounded-[17px] min-h-[190px] p-[20px]">
                            <img class="object-contain m-auto max-h-[200px] w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="">
                        </div>
                        <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="bg-white rounded-[17px] min-h-[190px] p-[20px]">
                            <img class="object-contain m-auto max-h-[200px] w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="">
                        </div>
                        <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                    </a>
                </li>

                <li>
                    <a href="">
                        <div class="bg-white rounded-[17px] min-h-[190px] p-[20px]">
                            <img class="object-contain m-auto max-h-[200px] w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="">
                        </div>
                        <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                    </a>
                </li>

                <li>
                    <a href="">
                        <div class="bg-white rounded-[17px] min-h-[190px] p-[20px]">
                            <img class="object-contain m-auto max-h-[200px] w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="">
                        </div>
                        <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                    </a>
                </li>


                <li>
                    <a href="">
                        <div class="bg-white rounded-[17px] min-h-[190px] p-[20px]">
                            <img class="object-contain m-auto max-h-[200px] w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="">
                        </div>
                        <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                    </a>
                </li>

                <li>
                    <a href="">
                        <div class="bg-white rounded-[17px] min-h-[190px] p-[20px]">
                            <img class="object-contain m-auto max-h-[200px] w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="">
                        </div>
                        <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="bg-white rounded-[17px] min-h-[190px] p-[20px]">
                            <img class="object-contain m-auto max-h-[200px] w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="">
                        </div>
                        <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                    </a>
                </li>

                <li>
                    <a href="">
                        <div class="bg-white rounded-[17px] min-h-[190px] p-[20px]">
                            <img class="object-contain m-auto max-h-[200px] w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/cat_p_1.png'; ?>" alt="">
                        </div>
                        <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>