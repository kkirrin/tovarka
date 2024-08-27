export const initNav = () => {
    const body = document.querySelector('body');
    // Меню
    const mobileMenu = document.querySelector('.mobile-menu')
    const mobileMenuButton = document.querySelector('.btn__menu--mobile')

    const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');

    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', (evt) => {
            evt.preventDefault();
            body.classList.remove('lock');
        });
    });
    mobileMenuButton.addEventListener('click', (evt) => {
        evt.preventDefault();
        mobileMenuButton.classList.toggle('active');
        mobileMenu.classList.toggle('is-active');
        body.classList.toggle('lock');
    })
}