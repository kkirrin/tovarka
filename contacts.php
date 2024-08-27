<?php
/*
        Template Name: contacts
    */
?>

<?php echo get_header(); ?>

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


    <section class="md:pt-[12px] pt-[36px]">
        <div class="container">
            <h2 class="text-black font-medium">Контакты</h2>
            <div class="pt-[24px]">
                <p class="text-black">Вы можете связаться с нами любым <br> удобным для вас способом:</p>

                <div class="flex md:flex-row flex-col gap-[30px] pt-[30px]">
                    <div class="flex flex-col items-center justify-center gap-[20px] bg-white p-[20px] w-full rounded-[30px] min-h-[140px]">
                        <img class="w-[20px]" src="<?php echo get_template_directory_uri() . '/src/img/icons/geo.png'; ?>" alt="">
                        <a href="tel:+79025287888" class="text-[16px] text-black font-medium">
                            +7 (902) 528-78-88
                        </a>
                    </div>

                    <div class="flex flex-col items-center justify-center gap-[20px] bg-white p-[20px] w-full rounded-[30px] min-h-[140px]">
                        <img class="w-[20px]" src="<?php echo get_template_directory_uri() . '/src/img/icons/phone.png'; ?>" alt="">
                        <p class="text-[16px] text-black font-medium">
                            г. Владивосток, ул. Жигура 32 (3-я рабочая)
                        </p>
                    </div>

                    <div class="flex flex-col items-center justify-center gap-[20px] bg-white p-[20px] w-full rounded-[30px] min-h-[140px]">
                        <img class="w-[20px]" src="<?php echo get_template_directory_uri() . '/src/img/icons/email.png'; ?>" alt="">
                        <a href="mailto:tovarkamix@yandex.ru" class="text-[16px] text-black font-medium">
                            tovarkamix@yandex.ru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="md:py-[50px] py-[36px]">
        <div class="container grid grid-cols-1 items-center justify-center w-full">
            <iframe class="w-full" src="https://yandex.ru/map-widget/v1/?um=constructor%3Abf751e6414cf6a7cc79993da0a5dbb4cbfec83323e296f876f9fe639a1959d18&amp;source=constructor" width="1280" height="450" frameborder="0"></iframe>
        </div>
    </section>



</main>

<?php get_footer(); ?>