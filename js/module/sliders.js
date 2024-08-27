export const initProductPopularSlider = () => {
    const item = document.querySelector('.product_popular-item');
        let swiper;
        if (item) {
            
            swiper = new Swiper(item, {
                autoplay: {
                    delay: 3000
                },
                speed: 3000,
                direction: 'horizontal',
                spaceBetween: 30,
                equalHeight: true,

                // If we need pagination
                navigation: {
                    nextEl: ".product-popular-next",
                    prevEl: ".product-popular-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    695: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    767: {
                        slidesPerView: 4,
                        spaceBetween: 15
                    },
                    1200: {
                        slidesPerView: 4,
                    }
                    }
            });
        }
}

export const initMainSwiper = () => {
    const item = document.querySelector('.main-item');
        let swiper;
        if (item) {
            
            swiper = new Swiper(item, {
               
                speed: 3000,
                direction: 'horizontal',
                spaceBetween: 30,
                slidesPerView: 1,
                equalHeight: true,

                // If we need pagination
                navigation: {
                    nextEl: ".main-item-next",
                    prevEl: ".main-item-prev",
                },
                
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                      },
    
            });
        }
}


export const initHitSwiper= () => {
    const item = document.querySelector('.hit-item');
        let swiper;
        if (item) {
            
            swiper = new Swiper(item, {
               
                speed: 3000,
                direction: 'horizontal',
                spaceBetween: 30,
                slidesPerView: 1,
                equalHeight: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
    
            });
        }
}


export const initNewSwiper = () => {
    // слайдер "новинки"
    const exclusiveSlider = document.querySelector('.new-swiper');

    if (exclusiveSlider) {
        const sliderItems = document.querySelectorAll('.new-item');
        console.log(window.innerWidth)
        if (window.innerWidth < 769 ) {
            console.log('f')
            sliderItems.forEach((slide) => {
                slide.classList.add('swiper-slide');
            });

            console.log('количество items', sliderItems);
        }

        let breakpoint = window.matchMedia('(min-width:1023px)');
        let swiper;

        const breakpointChecker = function () {
            if (breakpoint.matches === true) {

                if (swiper !== undefined) {
                    swiper.destroy(true, true);
                } return;

            } else if (breakpoint.matches === false) {
                // eslint-disable-next-line consistent-return
                return exclusiveSliderInit();
            }
        };

        const exclusiveSliderInit = function () {
            swiper = new Swiper(exclusiveSlider, {
                loop: true,
                spaceBetween: 30,
                init: true,
                slidesPerView: 1.5,
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },

                    500: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },

                    767: {
                        slidesPerView: 2,
                        spaceBetween: 15,
                    },
                },

            });
        };

        breakpoint.addEventListener('change', breakpointChecker);
        breakpointChecker();
    }
}

export const initNewSlider = () => {
    // слайдер "сертификаты"
    const exclusiveSlider = document.querySelector('.new-swiper');

    if (exclusiveSlider) {
        const sliderItems = document.querySelectorAll('.new-slide');
        console.log(window.innerWidth)
        if (window.innerWidth < 769 ) {
            console.log('f')
            sliderItems.forEach((slide) => {
                slide.classList.add('swiper-slide');
            });

            console.log('количество items', sliderItems);
        }

        let breakpoint = window.matchMedia('(min-width:1023px)');
        let swiper;

        const breakpointChecker = function () {
            if (breakpoint.matches === true) {

                if (swiper !== undefined) {
                    swiper.destroy(true, true);
                } return;

            } else if (breakpoint.matches === false) {
                // eslint-disable-next-line consistent-return
                return exclusiveSliderInit();
            }
        };

        const exclusiveSliderInit = function () {
            swiper = new Swiper(exclusiveSlider, {
                // loop: true,
                init: true,
                slidesPerView: 1,
                breakpoints: {
                    480: {
                        slidesPerView: 1,
                    },

                },

            });
        };

        breakpoint.addEventListener('change', breakpointChecker);
        breakpointChecker();
    }
}

export const initSaleSlider = () => {
    // слайдер "сертификаты"
    const exclusiveSlider = document.querySelector('.sale-swiper');

    if (exclusiveSlider) {
        const sliderItems = document.querySelectorAll('.sale-item--small');
        console.log(window.innerWidth)
        if (window.innerWidth < 769 ) {
            console.log('f')
            sliderItems.forEach((slide) => {
                slide.classList.add('swiper-slide');
            });

            console.log('количество items', sliderItems);
        }

        let breakpoint = window.matchMedia('(min-width:1023px)');
        let swiper;

        const breakpointChecker = function () {
            if (breakpoint.matches === true) {

                if (swiper !== undefined) {
                    swiper.destroy(true, true);
                } return;

            } else if (breakpoint.matches === false) {
                // eslint-disable-next-line consistent-return
                return exclusiveSliderInit();
            }
        };

        const exclusiveSliderInit = function () {
            swiper = new Swiper(exclusiveSlider, {
                // loop: true,
                init: true,
                slidesPerView: 1,
                breakpoints: {
                    480: {
                        slidesPerView: 1,
                    },

                },
                 pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                      },
                

            });
        };

        breakpoint.addEventListener('change', breakpointChecker);
        breakpointChecker();
    }
}



export const initAllCategorySwiper = () => {
    const item = document.querySelector('.category-item');
    let swiper;
    if (item) {
        
        swiper = new Swiper(item, {
           
            speed: 3000,
            direction: 'horizontal',
            spaceBetween: 30,
            slidesPerView: 1,
            equalHeight: true,

            // If we need pagination
            navigation: {
                nextEl: ".product-popular-next",
                prevEl: ".product-popular-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 15
                }
                }
        });
    }
}