const import_page_swiper = new Swiper('.import-page-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 4,
    slidesPerGroup: 4,
    spaceBetween: 25,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      // when window width is >= 992px
      992: {
        slidesPerView: 4,
        slidesPerGroup: 4,
        spaceBetween: 25,
      },
      // when window width is >= 760px
      760: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 25,
      },
      // when window width is >= 200px
      200: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 20,
      },
    },
  
  });