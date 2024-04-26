const news_swiper = new Swiper('.news_swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
    slidesPerGroup: 1,
    spaceBetween: 40,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      // when window width is >= 1240px
       1240: {
        slidesPerView: 3,
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