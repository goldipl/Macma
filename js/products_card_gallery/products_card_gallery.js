var galleryThumbs = new Swiper('.slider-two', {
  spaceBetween: 10,
  slidesPerView: 4,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  centerInsufficientSlides: true,
  slideToClickedSlide: true,
  loop: true,
  breakpoints: {
    // when window width is >= 992px
    992: {
      slidesPerView: 4,
    },
    // when window width is >= 200px
    200: {
      slidesPerView: 3,
    },
  },
});
var galleryTop = new Swiper('.slider-one', {
  spaceBetween: 10,
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  thumbs: {
      swiper: galleryThumbs
  },
  loop: true,
  on: {
      slideChange: function() {
          let activeIndex = this.activeIndex + 1;
          let nextSlide = document.querySelector(`.slider-two .swiper-slide:nth-child(${activeIndex + 1})`);
          let prevSlide = document.querySelector(`.slider-two .swiper-slide:nth-child(${activeIndex - 1})`);

          if (nextSlide && !nextSlide.classList.contains('swiper-slide-visible')) {
              this.thumbs.swiper.slideNext()
          } else if (prevSlide && !prevSlide.classList.contains('swiper-slide-visible')) {
              this.thumbs.swiper.slidePrev()
          }

      }
  },
});