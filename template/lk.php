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

        <div>
            <div class="_tabs-block _active" id="tab1">
                <div class="profile_box">
                    <div class="profile-list">
                        <h2 class="md:text-[45px] text-[30px] text-black">Ваши данные</h2>

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
<!-- 
                    <div class="profile-list">
                        <h2 class="md:text-[45px] text-[30px] text-black">Адрес доставки</h2>

                        <ul class="lk_shipping_adress">
                            <?php
                            foreach(WC()->checkout->get_checkout_fields('billing') as $key => $field)
                            {
                                if(!in_array($key, array('billing_first_name', 'billing_phone', 'billing_country')))
                                {
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
                    </div> -->
                </div>
            </div>
            <div class="reorder__order">
                <ul class="lk-order-list">
                    <?php echo show_user_order($user_id); ?>
                </ul>
            </div>
        </div>

    </main>
</div>
<?php get_footer(); ?>


