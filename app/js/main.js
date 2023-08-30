const menuButton = document.querySelector('.header__btn');
const menu = document.querySelector('.menu__list');

menuButton.addEventListener('click',() => {
    menu.classList.toggle('menu__list--active');
  });

  let swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });