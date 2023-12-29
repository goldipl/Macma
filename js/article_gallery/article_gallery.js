let gallery_top = new Swiper(".article-gallery", {
  slidesPerView: 1,
  freeMode: false,
  loop: false,
  pagination: {
      el: ".swiper-pagination",
      clickable: true
  },
  // Navigation arrows
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
});

let gallery_thumbs = new Swiper(".gallery-thumbs", {
  slidesPerView: "auto",
  centeredSlides: true,
  spaceBetween: 20,
  loop: false,
  slideToClickedSlide: true,
});

gallery_top.controller.control = gallery_thumbs;
gallery_thumbs.controller.control = gallery_top;