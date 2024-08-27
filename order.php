<?php
/*
    Template Name: order
*/
?>

<?php get_header(); ?>

<main>
    <h1 class="visually-hidden">Скрытый заголовок</h1>

    <section class="md:pt-[30px] sm:pt-[6px] xs:pt-[6px]">
        <div class="container">
            <div class="flex gap-[10px]">
                <div class="relative md:flex sm:hidden xs:hidden items-center justify-between w-full">
                    <input
                        alt=""
                        placeholder="input search text"
                        class="bg-white p-[8px] rounded-[10px] w-full"
                        style="z-index: 0">
                    <svg class="absolute right-[40px] border-r border-light-gray p-[8px]" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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


    <section class="md:pt-[12px] pt-[36px] md:pb-[46px] pb-[30px]">
        <div class="container">
            <h2 class="text-black md:text-[24px] text-[20px] font-medium">Способы оплаты</h2>
            <div class="flex gap-[30px] md:flex-row flex-col pt-[24px]">
                <div class="bg-white p-[30px] rounded-[30px] max-w-[700px]">
                    <img class="md:w-auto w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/order1.png'; ?>" alt="">
                    <ul class="pt-[30px] flex flex-col gap-[30px] text-black">
                        <p class="text-black font-medium">При получении</p>
                        <li class="text-[16px]">1. Наличными
                            Оплата заказа наличными во время приёма, возможна во всех пунктах самовывоза и курьерам.</li>
                        <li class="text-[16px]">2. Банковской картой
                            Все наши курьеры принимают к оплате банковские карты: VISA, MasterCard, Maestro, CUP, МИР. Для этого у службы доставки есть специальные мобильные терминалы. Оплата заказа картой также возможна во всех пунктах самовывоза.</li>
                    </ul>
                </div>

                <div class="bg-white p-[30px] rounded-[30px] max-w-[700px]">
                    <img class="md:w-auto w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/order2.png'; ?>" alt="">
                    <ul class="pt-[30px] flex flex-col gap-[30px] text-black">
                        <p class="text-black font-medium">Он-лайн оплата на сайте </p>
                        <li class="text-[16px]"> Оплата банковской картой, через Интернет</li>
                        <li class="text-[16px]">Данный вид оплаты возможен через системы электронных платежей.
                            Мы принимаем платежи с сайта по следующим банковским картам: VISA, MasterCard, Maestro, American Express, JCB, МИР.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="md:pt-[12px] pt-[36px] md:pb-[46px] pb-[30px]">
        <div class="container">
            <h2 class="text-black md:text-[24px] text-[20px] font-medium">Условия доставки</h2>
            <div class="flex gap-[30px] md:flex-row flex-col pt-[24px]">
                <div class="bg-gray p-[30px] rounded-[30px] max-w-[700px]">

                    <ul class="pt-[30px] flex flex-col gap-[30px] text-black">
                        <p class="text-black font-medium">По России</p>
                        <li class="text-[16px]">Доставка товаров из нашего интернет-магазина осуществляется только при 100% предоплате заказа. </li>
                        <li class=""> В случае доставки курьером покупатели могут оплатить заказ как наличным, так и безналичным способом. Мы постоянно совершенствуем нашу службу доставки для того, чтобы сделать ее максимально удобной. Чтобы быть к Вам как можно ближе мы регулярно открываем новые пункты самовывоза.</li>
                        <li class="text-[16px]">Банковской картой
                            Все наши курьеры принимают к оплате банковские карты: VISA, MasterCard, Maestro, CUP, МИР. Для этого у службы доставки есть специальные мобильные терминалы. Оплата заказа картой также возможна во всех пунктах самовывоза.</li>

                        <li class="text-[16px] text-black font-medium">Доставка компаниями:
                            <div class="flex md:flex-row flex-col gap-[20px] pt-[10px]">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/cdek.png'; ?>" alt="">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/boxberry.png'; ?>" alt="">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/main/energy.png'; ?>" alt="">
                            </div>
                        </li>

                        <li class="text-[16px] font-black font-medium">
                            По 100% предоплате.
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-[30px] rounded-[30px] max-w-[700px]">

                    <ul class="pt-[30px] flex flex-col gap-[30px] text-black">
                        <p class="text-black font-medium">По Владивостоку</p>

                        <div class="flex gap-[20px]">
                            <div class="flex flex-col gap-[10px] bg-blue rounded-[30px] p-[20px]">
                                <p class="text-white text-[16px] font-medium">
                                    300 руб
                                </p>

                                <p class="text-white text-[16px]">Доставка по Владивостоку</p>
                            </div>

                            <div class="flex flex-col gap-[10px] bg-blue rounded-[30px] p-[20px]">
                                <p class="text-white text-[16px] font-medium">
                                    350 руб
                                </p>

                                <p class="text-white text-[16px]">Доставка до транспортной <br> компании во Владивостоке</p>
                            </div>
                        </div>
                        <li class="text-[16px] font-medium">Доставим в течение 1часа. </li>
                        <li class="font-black font-medium">При заказе от 10 000 руб. доставка курьером во Владивостоке и до транспортной компании бесплатна !!!</li>
                    </ul>
                </div>



            </div>
        </div>
    </section>



</main>


<?php get_footer(); ?>