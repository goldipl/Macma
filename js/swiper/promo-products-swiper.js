const promo_products_swiper = new Swiper('.promo_products_swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 5,
    slidesPerGroup: 1,
    spaceBetween: 24,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      // when window width is >= 1240px
       1240: {
        slidesPerView: 5,
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 2,
      },
      // when window width is >= 200px
      200: {
        slidesPerView: 1,
      },
    },
  
  });