export const initModal = () => {
    const modalBtn = document.querySelector('.modal_btn');
    const modalLk = document.querySelector('.modal_content');
    const arrowLk = document.querySelector('#arrow_lk');


    const categoryAsideSubMenu = document.querySelector('aside .sub-menu');
    console.log(categoryAsideSubMenu)
    
    const category = categoryAsideSubMenu.querySelectorAll('li')
    console.log(category)

    category.forEach((e) => {
        
    })

    modalBtn.addEventListener('click', () => {
        modalLk.classList.toggle('is-open');
        arrowLk.classList.toggle('is-open');
    });
    
    document.querySelector('body').addEventListener('click', () => { 
        // console.log('Клик')
    });
}