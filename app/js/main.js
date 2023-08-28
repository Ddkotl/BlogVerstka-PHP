const menuButton = document.querySelector('.header__btn');
const menu = document.querySelector('.menu__list');

menuButton.addEventListener('click',() => {
    menu.classList.toggle('menu__list--active');
  });

  const swiper = new Swiper(".swiper", {
    effect: "fade",
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
       delay: 1000,
       disableOnInteraction: false,
     },
  });