const our_brands_swiper = new Swiper('.our_brands_swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 5,
    slidesPerGroup: 1,
    spaceBetween: 80,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      // when window width is >= 1240px
       1240: {
        slidesPerView: 5,
        spaceBetween: 80,
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 4,
        spaceBetween: 60,
      },
      // when window width is >= 760px
      760: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      // when window width is >= 200px
      200: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
    },
  
  });