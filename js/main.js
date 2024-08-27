import { initNav } from "./module/nav.js";
import { initPopup } from "./module/popup.js";
import { initModal } from "./module/modal.js";
import { initProductPopularSlider, initMainSwiper, initHitSwiper, initNewSlider, initSaleSlider, initAllCategorySwiper } from "./module/sliders.js";


window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    initNav();
    baguetteBox.run('.gallery-wrapper');
    initPopup();
    initModal(); 
    initProductPopularSlider();
    initMainSwiper();
    initHitSwiper();
    initNewSlider();
    initSaleSlider();  
    initAllCategorySwiper();
    

});
