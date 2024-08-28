<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Подберем автомобиль по вашему бюджету на аукционах Японии и доставим в любую точку России. Купите автомобиль мечты и сэкономьте до 50% по сравнению со вторичным рынком">
    <title>Tovarka</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class('wrapper'); ?>>

    <div>
        <header class="z-10 w-full transition-colors pt-[20px] bg-white pb-[20px]">
            <div class="container flex gap-[15px] justify-between items-center">
                <div class="md:hidden sm:flex flex" style="width: inherit;">
                    <div>
                        <div class="btn__menu--mobile items-center gap-10 md:hidden flex">
                            <button class="flex items-center gap-2 pl-10 pr-2 py-1">
                                <svg class="h-3 w-3 bg-blue" viewBox="0 0 64 48">
                                    <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                    <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                    <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="relative md:hidden sm:flex flex items-center justify-between w-full">
                        <input
                            alt=""
                            placeholder="input search text"
                            class="bg-white p-[8px] rounded-[10px] w-full"
                            style="z-index: 0">
                        <svg class=" right-[20px]" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5 17.5L13.875 13.875" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                <div>
                    <img class="md:block sm:hidden hidden" src="<?php echo get_template_directory_uri() . '/src/img/main/logo-w.png'; ?>" alt="logo" />



                </div>

                <div class="md:w-full w-auto">
                    <div class="flex md:justify-between justify-end items-center md:border-b border-0 pb-[11px] border-light-gray" style="border-bottom-style: thin;">
                        <div class="md:block hidden">
                            <span class="text-light-gray"> Магазин тредовых товаров. Доставка по России. </span>
                        </div>

                        <div>
                            <div class="gap-[20px] md:flex  hidden">
                                <div>
                                    <a href="tel:+79025287888" class="text-[20px] hover:text-blue transition-colors">+7 (902) 528-78-88</a>
                                </div>
                                <div>
                                    <a href="tel:+79644390999" class="text-[20px] hover:text-blue transition-colors">+7 (964) 439-09-99 </a>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="flex justify-between pt-[23px] md:flex hidden">
                        <nav>
                            <ul class="flex gap-[24px]">
                                <li><a href="/" class="font-[18px] hover:text-blue transition-colors"> Главная</a></li>
                                <li><a href="/about" class="font-[18px] hover:text-blue transition-colors"> О магазине</a></li>
                                <li><a href="/shop" class="font-[18px] hover:text-blue transition-colors"> Каталог</a></li>
                                <li><a href="/order" class="font-[18px] hover:text-blue transition-colors"> Оплата и доставка</a></li>
                                <li><a href="/contacts" class="font-[18px] hover:text-blue transition-colors"> Контакты</a></li>
                            </ul>
                        </nav>

                        <div class="flex gap-[24px]">
                            <div class="flex gap-[10px]">
                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.1746 3.89762C18.8754 3.20484 18.444 2.57706 17.9045 2.0494C17.3647 1.52017 16.7281 1.0996 16.0295 0.810563C15.3052 0.509654 14.5282 0.355632 13.7438 0.357438C12.6434 0.357438 11.5697 0.658777 10.6367 1.22797C10.4135 1.36413 10.2014 1.51369 10.0005 1.67663C9.79963 1.51369 9.58758 1.36413 9.36436 1.22797C8.43133 0.658777 7.35767 0.357438 6.25722 0.357438C5.46481 0.357438 4.69695 0.509223 3.97151 0.810563C3.27061 1.10074 2.63892 1.51815 2.09651 2.0494C1.55632 2.57646 1.1248 3.20439 0.826416 3.89762C0.516148 4.6186 0.357666 5.38422 0.357666 6.17217C0.357666 6.91547 0.509452 7.69003 0.810791 8.47797C1.06302 9.13646 1.42463 9.81949 1.88668 10.5092C2.61883 11.6007 3.62552 12.7391 4.87552 13.8932C6.94695 15.8061 8.99829 17.1275 9.08535 17.1811L9.61436 17.5204C9.84874 17.6699 10.1501 17.6699 10.3845 17.5204L10.9135 17.1811C11.0005 17.1253 13.0496 15.8061 15.1233 13.8932C16.3733 12.7391 17.38 11.6007 18.1121 10.5092C18.5742 9.81949 18.938 9.13646 19.188 8.47797C19.4894 7.69003 19.6411 6.91547 19.6411 6.17217C19.6434 5.38422 19.4849 4.6186 19.1746 3.89762ZM10.0005 15.7548C10.0005 15.7548 2.05409 10.6632 2.05409 6.17217C2.05409 3.89762 3.93579 2.05387 6.25722 2.05387C7.88892 2.05387 9.30409 2.96458 10.0005 4.29494C10.697 2.96458 12.1121 2.05387 13.7438 2.05387C16.0653 2.05387 17.947 3.89762 17.947 6.17217C17.947 10.6632 10.0005 15.7548 10.0005 15.7548Z" fill="#8C8C8C" />
                                </svg>

                                <a href="/favorite" class="text-light-gray hover:text-blue transition-colors">
                                    Избранное
                                </a>
                            </div>

                            <div class="relative">
                                <div class="flex gap-[10px]">
                                    <img src="<?php echo get_template_directory_uri() . '/src/img/icons/lk.svg'; ?>" alt="">
                                    <button class="text-light-gray hover:text-blue transition-colors flex items-center gap-[5px] modal_btn">
                                        Личный кабинет
                                        <svg id="arrow_lk" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.15179 0.142822H8.31473C8.25781 0.142822 8.20424 0.170724 8.17076 0.216483L5 4.58702L1.82924 0.216483C1.79576 0.170724 1.74219 0.142822 1.68527 0.142822H0.848216C0.775671 0.142822 0.733261 0.225412 0.775671 0.284563L4.71094 5.70979C4.8538 5.90622 5.14621 5.90622 5.28795 5.70979L9.22322 0.284563C9.26674 0.225412 9.22433 0.142822 9.15179 0.142822Z" fill="#8C8C8C" />
                                        </svg>

                                    </button>
                                    <div class="modal_content">
                                        <a href="popup1" class="popup-link">Войти</a>
                                        <a href="popup2" class="popup-link">Зарегистрироваться</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mobile-menu w-full">
                    <ul class="text-dark-green text-base pt-[74px] flex flex-col items-center justify-center">
                        <li class="pb-[15px]">
                            <a href="/">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/logo_m_m.svg'; ?>" alt="Logo">
                            </a>
                        </li>
                        <li class="pb-[15px]"><a href="/" class=" text-[14px] font-medium">Главная</a></li>
                        <li class="pb-[15px]"><a href="/about" class=" text-[14px] font-medium">О магазине</a></li>
                        <li class="pb-[15px]"><a href="/shop" class=" text-[14px] font-medium">Каталог</a></li>
                        <li class="pb-[24px]"><a href="/contacts" class=" text-[14px] font-medium">Контакты</a></li>

                        <li class="pb-[24px] flex gap-[8px] items-center justify-center">
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.1744 3.89762C18.8752 3.20484 18.4438 2.57706 17.9043 2.0494C17.3644 1.52017 16.7279 1.0996 16.0293 0.810563C15.3049 0.509654 14.528 0.355632 13.7436 0.357438C12.6431 0.357438 11.5695 0.658777 10.6364 1.22797C10.4132 1.36413 10.2012 1.51369 10.0003 1.67663C9.79939 1.51369 9.58733 1.36413 9.36412 1.22797C8.43108 0.658777 7.35742 0.357438 6.25698 0.357438C5.46456 0.357438 4.69671 0.509223 3.97126 0.810563C3.27037 1.10074 2.63867 1.51815 2.09626 2.0494C1.55608 2.57646 1.12456 3.20439 0.826172 3.89762C0.515904 4.6186 0.357422 5.38422 0.357422 6.17217C0.357422 6.91547 0.509208 7.69003 0.810547 8.47797C1.06278 9.13646 1.42439 9.81949 1.88644 10.5092C2.61858 11.6007 3.62528 12.7391 4.87528 13.8932C6.94671 15.8061 8.99805 17.1275 9.0851 17.1811L9.61412 17.5204C9.84849 17.6699 10.1498 17.6699 10.3842 17.5204L10.9132 17.1811C11.0003 17.1253 13.0494 15.8061 15.123 13.8932C16.373 12.7391 17.3797 11.6007 18.1119 10.5092C18.5739 9.81949 18.9378 9.13646 19.1878 8.47797C19.4891 7.69003 19.6409 6.91547 19.6409 6.17217C19.6431 5.38422 19.4847 4.6186 19.1744 3.89762ZM10.0003 15.7548C10.0003 15.7548 2.05385 10.6632 2.05385 6.17217C2.05385 3.89762 3.93555 2.05387 6.25698 2.05387C7.88867 2.05387 9.30385 2.96458 10.0003 4.29494C10.6967 2.96458 12.1119 2.05387 13.7436 2.05387C16.065 2.05387 17.9467 3.89762 17.9467 6.17217C17.9467 10.6632 10.0003 15.7548 10.0003 15.7548Z" fill="#3B8ED7" />
                            </svg>

                            <a href="/favorite" class="text-[14px] font-medium">
                                Избранное
                            </a>
                        </li>

                        <li class="pb-[24px] flex gap-[8px] items-center justify-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7337 15.6133C17.3127 14.6159 16.7016 13.7099 15.9346 12.9459C15.17 12.1796 14.2642 11.5687 13.2672 11.1468C13.2583 11.1423 13.2494 11.1401 13.2404 11.1356C14.6311 10.1311 15.5351 8.49498 15.5351 6.649C15.5351 3.59096 13.0574 1.11328 9.99936 1.11328C6.94132 1.11328 4.46364 3.59096 4.46364 6.649C4.46364 8.49498 5.36766 10.1311 6.75829 11.1378C6.74936 11.1423 6.74043 11.1445 6.7315 11.149C5.7315 11.5709 4.83418 12.1758 4.06409 12.9481C3.29782 13.7128 2.68687 14.6186 2.26498 15.6155C1.85052 16.5915 1.627 17.6379 1.6065 18.6981C1.60591 18.7219 1.61008 18.7456 1.61879 18.7678C1.6275 18.79 1.64056 18.8102 1.6572 18.8273C1.67384 18.8443 1.69373 18.8579 1.71569 18.8671C1.73765 18.8764 1.76124 18.8811 1.78507 18.8811H3.12436C3.22257 18.8811 3.3007 18.803 3.30293 18.707C3.34757 16.9838 4.03954 15.37 5.26275 14.1468C6.52838 12.8811 8.20918 12.1847 9.99936 12.1847C11.7895 12.1847 13.4703 12.8811 14.736 14.1468C15.9592 15.37 16.6511 16.9838 16.6958 18.707C16.698 18.8052 16.7761 18.8811 16.8744 18.8811H18.2136C18.2375 18.8811 18.2611 18.8764 18.283 18.8671C18.305 18.8579 18.3249 18.8443 18.3415 18.8273C18.3582 18.8102 18.3712 18.79 18.3799 18.7678C18.3886 18.7456 18.3928 18.7219 18.3922 18.6981C18.3699 17.6311 18.1489 16.5932 17.7337 15.6133ZM9.99936 10.4883C8.97481 10.4883 8.01052 10.0887 7.28507 9.36328C6.55963 8.63784 6.16007 7.67355 6.16007 6.649C6.16007 5.62444 6.55963 4.66016 7.28507 3.93471C8.01052 3.20926 8.97481 2.80971 9.99936 2.80971C11.0239 2.80971 11.9882 3.20926 12.7136 3.93471C13.4391 4.66016 13.8386 5.62444 13.8386 6.649C13.8386 7.67355 13.4391 8.63784 12.7136 9.36328C11.9882 10.0887 11.0239 10.4883 9.99936 10.4883Z" fill="#3B8ED7" />
                            </svg>

                            <button class="text-[14px] font-medium transition-colors flex items-center gap-[5px] modal_btn">
                                Личный кабинет
                            </button>
                            <div class="modal_content">
                                <a href="/login">Войти</a>
                                <a href="/register">Зарегистрироваться</a>
                            </div>
                        </li>

                        <li class="pb-[15px] flex gap-[8px] items-center justify-center">
                            <img src="<?php echo get_template_directory_uri() . 'src/img/icons/phone_b.svg'; ?>" alt="">
                            <a href="+79025287888" class="text-[20px] hover:text-blue transition-colors">+7 (902) 528-78-88</a>
                        </li>

                        <li class="pb-[15px] flex gap-[8px] items-center justify-center">
                            <img src="<?php echo get_template_directory_uri() . 'src/img/icons/phone_b.svg'; ?>" alt="">
                            <a href="+79644390999" class="text-[20px] hover:text-blue transition-colors">+7 (964) 439-09-99 </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>