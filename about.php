<?php
/*
        Template Name: about
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

    <section class="md:pt-[60px] pt-[40px]">
        <div class="container">
            <div class="flex md:flex-row flex-col gap-[50px]">
                <div class="md:w-[60%] w-full md:p-[30px] p-[10px] bg-gray rounded-[30px]">
                    <p class="text-black md:text-[18px] text-[16px]">
                        Интернет-магазин «Товарка» — это место, где вы можете найти все необходимое для обустройства своего дома и выполнения ремонтных работ. У нас представлено более 2000 наименований товаров, которые помогут сделать ваш дом комфортным, уютным и современным.
                    </p>

                    <p class="text-black md:text-[20px] text-[16px] pt-[20px]">
                        В нашем ассортименте вы найдете широкий выбор умной электроники: от смарт-телевизоров до систем «умный дом». Мы предлагаем только самые передовые технологии, которые помогут сделать вашу жизнь проще и удобнее.
                    </p>
                </div>

                <div class="w-full">
                    <img class="w-full rounded-[30px]" src="<?php echo get_template_directory_uri() . '/src/img/main/about_1.png'; ?>" alt="">
                </div>
            </div>

            <div class="flex md:flex-row flex-col gap-[30px] md:pt-[30px] pt-[10px]">
                <div class="md:w-[60%] w-full md:p-[30px] p-[10px] bg-blue rounded-[30px]">
                    <p class="text-white md:text-[18px] text-[16px]">
                        Кроме того, у нас есть большой выбор креативных подарков для любого случая: от забавных сувениров до эксклюзивных предметов интерьера. Вы можете быть уверены, что у нас есть то, что понравится каждому члену вашей семьи или друзьям.
                         
                    </p>
                    <p class="text-white md:text-[20px] text-[16px] pt-[20px]">
                        Мы также предлагаем широкий выбор инструментов и материалов для ремонта: от штукатурки до обоев. У нас есть все необходимое для того, чтобы вы могли выполнить любые работы по дому самостоятельно.

                    </p>
                </div>

                <div class="w-full">
                    <img class="w-full rounded-[30px]" src="<?php echo get_template_directory_uri() . '/src/img/main/about_2.png'; ?>" alt="">
                </div>
            </div>


            <div class="flex md:flex-row flex-col gap-[30px] md:pt-[30px] pt-[10px]">
                <div class="w-full">
                    <img class="w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/about_3.png'; ?>" alt="">
                </div>

                <div class="md:w-[60%] w-full md:p-[30px] p-[10px] bg-gray rounded-[30px]">
                    <p class="text-black md:text-[20px] text-[16px] pt-[20px]">
                         Интернет-магазин «Товарка» — это место, где вы найдете все необходимое для обустройства своего дома и выполнения ремонтных работ. Мы предлагаем только самые передовые технологии, качественные товары и выгодные цены. Закажите у нас уже сегодня и наслаждайтесь комфортом и уютом в своем доме </p>
                </div>
            </div>


        </div>
    </section>
</main>


<?php get_footer(); ?>