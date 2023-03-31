const burgerBtn = document.querySelector('.header-nav__burger');

if (burgerBtn) {
    burgerBtn.addEventListener( 'click', () => {
        burgerBtn.classList.toggle('header-nav__burger--is_open');
    });
}



