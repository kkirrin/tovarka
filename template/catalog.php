<?php
/*
Template Name: страница шаблон - Каталог 
*/
    get_header();
?>
    <main>
        <h1 class="visually-hidden">Скрытый заголовок</h1>

        <section class="pt-[20px]" data-scroll>      
            <div class="container">
                <div class="breadcrumb">
                    <ul class="breadcrumb__list flex items-center justify-start gap-2">
                        <li class="breadcrumb__item text-bg-black opacity-60 ">
                            <a href="/" class="font-medium">
                                Главная
                            </a>
                        </li>
                        <li class="opacity-60 text-bg-black">
                            /
                        </li>
                        <li class="breadcrumb__item">
                            <span class="opacity-60 text-bg-black">Каталог товаров</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>  

        <section class="mt-[24px] mb-[120px]" data-scroll="">
            <div class="container">  
                <div class="flex justify-between items-center ">
                    <div>
                        <h2 class="md:text-[45px] text-[30px] text-dark-green"> Каталог Товаров</h2>
                    </div>

                    <div class="flex flex-row gap-[20px]">
                        <div>
                            <select class="">Цена</select>
                        </div>
                        <div>
                            <select class="">Название</select>
                        </div>
                    </div>
                </div>
                    
                <div class="flex md:flex-row flex-col gap-[50px]">
                    <div class="md:w-1/3 w-auto">
                        <form action="" class="flex flex-col gap-[20px] md:pt-[60px] pt-[20px]">
                            <div class="flex gap-[10px] flex-col">
                                <label>Марка</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите марку">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Модель</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите модель">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Номер кузова</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите номер кузова">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Год</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="date" name="marka" placeholder="Введите год">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                    <label>Номер двигателя</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите yомер двигателя">
                            </div>
                            <div class="my-[5px]">
                                <button style="width: -webkit-fill-available;" class="p-[10px] md:w-auto w-auto text-center bg-green text-white" type="submit" name="get_maslo">Подобрать</button>
                            </div>
                        </form>
                    </div>

                    <div class="md:w-10/12 w-auto">
                        <ul class="flex flex-col gap-[20px]">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        

    </main>
    
<?php get_footer(); ?>
