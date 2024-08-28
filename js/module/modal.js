export const initModal = () => {
    const modalBtn = document.querySelector('.modal_btn');
    const modalLk = document.querySelector('.modal_content');
    const arrowLk = document.querySelector('#arrow_lk');


    const categoryAsideSubMenu = document.querySelector('aside .sub-menu');  
    if (categoryAsideSubMenu) {
        const categoryItems = categoryAsideSubMenu.querySelectorAll('li'); 
        
        if (categoryItems.length > 0) {
            categoryItems.forEach((item) => {
                const subMenu = item.querySelector('.sub-menu'); 
                
                item.addEventListener('mouseenter', () => {
                    if (subMenu) {
                        subMenu.classList.add('is-active'); 
                    }
                });

                item.addEventListener('mouseleave', () => {
                    if (subMenu) {
                        subMenu.classList.remove('is-active'); 
                    }
                });
            });    
        }
    }


    modalBtn.addEventListener('click', () => {
        modalLk.classList.toggle('is-open');
        arrowLk.classList.toggle('is-open');
    });
    
    document.querySelector('body').addEventListener('click', () => { 
        // console.log('Клик')
    });
}