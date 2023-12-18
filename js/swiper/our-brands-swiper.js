const our_brands_swiper = new Swiper('.our_brands_swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 5,
    slidesPerGroup: 5,
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
        slidesPerGroup: 5,
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 4,
        slidesPerGroup: 4,
      },
      // when window width is >= 760px
      760: {
        slidesPerView: 3,
        slidesPerGroup: 3,
      },
      // when window width is >= 200px
      200: {
        slidesPerView: 2,
        slidesPerGroup: 2,
      },
    },
  
  });