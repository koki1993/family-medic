jQuery(document).ready(function($){
  // Swiper silider
  var swiper = new Swiper(".mySwiper", {
    direction: 'horizontal',
    speed: 1000,
    autoplay: {
      delay: 3000,
    },
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});