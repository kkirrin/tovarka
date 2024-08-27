export const initStickyHeader = () => {

    const header = document.querySelector('header');

    if (header) {
        window.addEventListener('scroll', () => {
            let scrollTop = window.scrollY;
            if (scrollTop >= 50) {
                header.classList.add('header-fix');
            } else {
                header.classList.remove('header-fix');
            }
        });
    }
}
