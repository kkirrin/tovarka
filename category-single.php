<?php
/*
        Template Name: category-single
    */
?>


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
            <div class="rounded-[30px]">
                <img src="./src/img/main/banner_auto_c.png" class="w-full" alt="">
            </div>

            <ul class="grid grid-cols-2 gap-[30px] md:pt-[30px] pt-[10px]">
                <li class="flex flex-col justify-center items-center bg-white rounded-[30px] w-full h-full p-[30px]">
                    <img src="./src/img/main/cat_s.png" alt="">
                    <h3 class="text-black md:text-[20px] text-[16px] font-medium pt-[20px]">Название категории</h3>
                </li>

                <li class="flex flex-col justify-center items-center bg-white rounded-[30px] w-full h-full p-[30px]">
                    <img src="./src/img/main/cat_s.png" alt="">
                    <h3 class="text-black md:text-[20px] text-[16px] font-medium pt-[20px]">Название категории</h3>
                </li>

                <li class="flex flex-col justify-center items-center bg-white rounded-[30px] w-full h-full p-[30px]">
                    <img src="./src/img/main/cat_s.png" alt="">
                    <h3 class="text-black md:text-[20px] text-[16px] font-medium pt-[20px]">Название категории</h3>
                </li>

                <li class="flex flex-col justify-center items-center bg-white rounded-[30px] w-full h-full p-[30px]">
                    <img src="./src/img/main/cat_s.png" alt="">
                    <h3 class="text-black md:text-[20px] text-[16px] font-medium pt-[20px]">Название категории</h3>
                </li>
            </ul>
        </div>
    </section>

    <section class="md:pt-[60px] pt-[40px]">
        <div class="container">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="md:text-[20px] text-[16px] font-medium text-black">
                        Все товары категории
                    </h2>
                </div>

                <div class="flex gap-[10px]">
                    <span>Сортировать по</span>
                    <select>По чему то</select>
                    <option>ЧТо то</option>
                </div>
            </div>

            <div>
                <ul class="grid md:grid-cols-4 grid-cols-2 gap-[30px] md:pt-[24px] pt-[16px]">
                    <li>
                        <a href="">
                            <div class="bg-white rounded-[17px] min-h-[250px] p-[30px] relative">
                                <object class="absolute top-[10px] right-[10px]"><a>Кнопка любимое</a></object>
                                <img class="object-contain m-auto max-h-[200px] w-full" src="./src/img/main/cat_p_1.png" alt="">
                                <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                                <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>

                                <button class="w-full bg-blue rounded-[30px] text-white p-[15px]">Купить</button>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="bg-white rounded-[17px] min-h-[250px] p-[30px] relative">
                                <object class="absolute top-[10px] right-[10px]"><a>Кнопка любимое</a></object>
                                <img class="object-contain m-auto max-h-[200px] w-full" src="./src/img/main/cat_p_1.png" alt="">
                                <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                                <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>

                                <button class="w-full bg-blue rounded-[30px] text-white p-[15px]">Купить</button>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="bg-white rounded-[17px] min-h-[250px] p-[30px] relative">
                                <object class="absolute top-[10px] right-[10px]"><a>Кнопка любимое</a></object>
                                <img class="object-contain m-auto max-h-[200px] w-full" src="./src/img/main/cat_p_1.png" alt="">
                                <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                                <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>

                                <button class="w-full bg-blue rounded-[30px] text-white p-[15px]">Купить</button>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="bg-white rounded-[17px] min-h-[250px] p-[30px] relative">
                                <object class="absolute top-[10px] right-[10px]"><a>Кнопка любимое</a></object>
                                <img class="object-contain m-auto max-h-[200px] w-full" src="./src/img/main/cat_p_1.png" alt="">
                                <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                                <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>

                                <button class="w-full bg-blue rounded-[30px] text-white p-[15px]">Купить</button>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="bg-white rounded-[17px] min-h-[250px] p-[30px] relative">
                                <object class="absolute top-[10px] right-[10px]"><a>Кнопка любимое</a></object>
                                <img class="object-contain m-auto max-h-[200px] w-full" src="./src/img/main/cat_p_1.png" alt="">
                                <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>
                                <p class="pt-[12px] text-black md:text-[16px] text-[14px] font-medium">Butovaya technila</p>

                                <button class="w-full bg-blue rounded-[30px] text-white p-[15px]">Купить</button>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>