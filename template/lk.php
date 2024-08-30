<?php
/*
Template Name: страница шаблон - Личный кабинет
*/
get_header();
?>
<div class="container">
    <main>
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <span>&bull;</span>
            <span>Личный кабинет</span>
        </div>

        <h1 class="font-semibold text-4xl mb-8">Привет, <?php echo wp_get_current_user()->first_name; ?>!</h1>

        <div class="_tabs">
            <nav class="flex gap-8 lk-nav">
                <button class="_tabs-item lk-button _active" data-tab="#tab1">Профиль</button>
                <button class="_tabs-item lk-button" data-tab="#tab2">История заказов</button>
                <button class="_tabs-item lk-button" data-tab="#tab3">Любимые товары</button>
            </nav>

            <div class="_tabs-block _active" id="tab1">
                <div class="profile_box">
                    <div class="profile-list">
                        <h2 class="font-bold">Ваши данные</h2>

                        <ul>
                            <li>
                                <div class="form-lk__item">
                                    <div class="form-lk__title">Введите имя</div>

                                    <?php echo add_custom_field('user_name'); ?>
                                </div>

                                <div class="form-lk__item">
                                    <div class="form-lk__title">Электронная почта</div>

                                    <?php echo add_custom_field('user_email'); ?>
                                </div>

                                <div class="form-lk__item">
                                    <div class="form-lk__title">Телефон</div>

                                    <?php echo add_custom_field('user_phone'); ?>
                                </div>

                                <div class="form-lk__item">
                                    <div class="form-lk__title">Дата рождения</div>

                                    <?php echo add_custom_field('user_birth'); ?>
                                </div>

                                <div class="form-lk__item">
                                    <div class="form-lk__title">Пароль</div>

                                    <?php echo add_custom_field('user_pass'); ?>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="profile-list">
                        <h2 class="font-bold">Адрес доставки</h2>

                        <ul class="lk_shipping_adress">
                            <?php
                            foreach (WC()->checkout->get_checkout_fields('billing') as $key => $field) {
                                if (!in_array($key, array('billing_first_name', 'billing_phone', 'billing_country'))) {
                            ?>
                                    <li>
                                        <div class="form-lk__item">
                                            <div class="form-lk__title"><?php echo $field['label']; ?></div>

                                            <?php echo add_custom_field($key); ?>
                                        </div>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="_tabs-block" id="tab2">
                <ul class="lk-order-list">
                    <?php echo show_user_order($user_id); ?>
                </ul>
            </div>
            <div class="_tabs-block" id="tab3">
                <ul class="catalog__list">
                    <?php echo show_favorite_product($user_id); ?>
                </ul>
            </div>
        </div>

    </main>
</div>
<?php get_footer(); ?>