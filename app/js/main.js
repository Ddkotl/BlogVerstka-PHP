const menuButton = document.querySelector('.header__btn');
const menu = document.querySelector('.menu__list');

menuButton.addEventListener('click',() => {
    menu.classList.toggle('menu__list--active');
  });


const singInBtn = document.querySelector('.singin__btn');
const singUpBtn = document.querySelector('.singup__btn');
const formBox = document.querySelector('.form-box');
const regContainer = document.querySelector('.reg__container')

singUpBtn.addEventListener('click',function(){
  formBox.classList.add('active');
  regContainer.classList.add('active');
});

singInBtn.addEventListener('click',function(){
  formBox.classList.remove('active');
  regContainer.classList.remove('active');
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