const menuButton = document.querySelector('.header__btn');
const menu = document.querySelector('.menu__list');

menuButton.addEventListener('click',() => {
    menu.classList.toggle('menu__list--active');
  });
